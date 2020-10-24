<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Request extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model(['Request_model', 'AssignRoles/AssignRoleModel', 'Roles/RoleModel', ]);
	}

	private function msg($status = null, $msg = ' Data Found', $data = []){
		$result = [
			'kode' => $status, 
			'msg' => $msg,
			'data' => $data
		];
		return $result;
	}

	public function index()
	{
		$content = 'request/list';
		$this->formUrl = base_url('request/save');

		$data = [
			'form_url' => $this->formUrl,
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Request Nasabah"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	public function accept(){
		$id = $_GET['code'];
		$id = decode($id);
		$model = new Request_model($id);
		$data = $model->find($id);
		$koperasi = new Koperasi_model($data->id_user);
		switch($data->jenis_request){
			case 'NOMOR_REKENING':
				$koperasi->nomor_rekening = $data->data_request;
			break;
			case 'NAMA_REKENING':
				$koperasi->nama_rekening = $data->data_request;
			break;
			case 'CABANG':
				$koperasi->cabang = $data->data_request;
			break;
		}
		$koperasi->update_data() ? $model->status_request = 2 : '';
		$model->update_data();
		return redirect(base_url('request'));
	}
	public function decline(){
		$id = $_GET['code'];
		$id = decode($id);
		$model = new Request_model($id);
		$model->status_request = 3;
		$model->update_data();
		return redirect(base_url('request'));
	}
	public function save_data()
	{
		// var_dump($this->input->post());
		foreach($this->input->post('data_request') as $key => $val){
			if(isset($val)):
				$model = new Request_model();
				$model->id_user = '4';
				$model->jenis_request = $this->input->post('jenis_req')[$key];
				$model->data_request = $val;
				$model->status_request = 1;
				$model->created_on = date('Y-m-d H:i:s');
				$model->save();
			endif;
		}
		return redirect(base_url('rekening'));		
	}
	
	public function getJSON(){
		$model = new Request_model;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_request;
			$row[] = '';
			$row[] = $val->jenis_request;
			$row[] = $val->data_request;
			$content = '' ; 
			switch($val->status_request){
				case 1:
					$content = 'Belum di Approve';
				break;
				case 2:
					$content = 'Approved';
				break;
				case 3:
					$content = 'Declined';
				break;
			}
			$row[] = $content ;
			$content = '';
			// $row[] = '<a href='.base_url('admin').' class="btn btn-success btn-sm">Edit</a><a href='.base_url('admin').' class="btn btn-danger btn-sm">Hapus</a>';
			$val->status_request == 1 ? 
				($content .= '<a href='.base_url('request/accept?code=').encode($val->id_request).' class="btn btn-info btn-sm" data-toggle="tooltip" title="Acccept Request"><i class="fa fa-download"></i></span>Accept Incoming Request</a>
				<a href='.base_url('request/decline?code=').encode($val->id_request).' class="btn btn-danger btn-sm" data-toggle="tooltip" title="Decline Request"><i class="fa fa-download"></i></span>Decline Incoming Request</a>')  
				: ''; 
				$row[] = $content;
				$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

	public function add()
	{
		$this->formUrl = base_url('Users/save');
		$data = [
			'form_url' => $this->formUrl,
			'card_title' => 'Tambah Data User'
		];
		$content = 'add';
		admin_parse($content, $data);
	}

	private function upload($params, $id){
				$folder = APPPATH.'../public/resources/upload/'.$id;
				$config['upload_path']          = $folder;
                $config['allowed_types']        = '*';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

				$this->load->library('upload', $config);
				if(!file_exists($folder)):
					mkdir($folder, 0777);
				endif;
                if ( ! $this->upload->do_upload($params))
                {
                        return $this->upload->display_errors();
                }
                else
                {
                        // $data = array('upload_data' => $this->upload->data());
						
						// $this->load->view('upload_success', $data);
						return (object)$this->upload->data();
                }
	}

	public function save()
	{
		$model = new UserModel();
		$request = $this->input->post();
		$request = (object)$request;
		$model->full_name = $request->full_name;
		$model->tempat_lahir = $request->tempat_lahir;
		$model->tanggal_lahir = $request->tanggal_lahir;
		$model->jenis_kelamin = $request->jenis_kelamin;
		$model->username = $request->username;
		$model->password = $request->password;
		$model->active = 1;
		$model->created_on = date('Y-m-d');
		$model->save();
		$id = $this->db->insert_id();
		$ktp = $this->upload('foto_ktp', $id);
		$photo = $this->upload('photo', $id);
		$kk = $this->upload('foto_kk', $id);
		$ahli_waris = $this->upload('foto_ktp_ahli_waris', $id);
		$model->photo = $photo->full_path;
		$model->foto_ktp = $ktp->full_path;
		$model->foto_kk = $kk->full_path;
		$model->foto_ktp_ahli_waris = $ahli_waris->full_path;
		$model->activation_code = base64_encode(md5(date('Y-m-d').$id));
		$model->update($id);
		return redirect(base_url('users'));
	}

	public function testing()
	{
		echo APPPATH.'../public/resources/upload';
	}
	public function getRoleNamaByIDUser($id_user){
		$roleModel = new AssignRoleModel();
		$role = $roleModel->findBy(['id_user' => $id_user]);
		if(count($role) > 0):
			$role = $role[0];
			$modelRoleDetail = new RoleModel();
			$role_detail = $modelRoleDetail->find($role->id_role);
			$output = $role_detail->nama_role;
		return $output;
		else:
			return 'Jabatan Belum Diisi';
		endif;
	}
}
