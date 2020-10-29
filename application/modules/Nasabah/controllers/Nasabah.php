<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Nasabah extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model(['UserModel', 'AssignRoles/AssignRoleModel', 'Roles/RoleModel']);
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
		$content = 'nasabah/list';
		$this->formUrl = base_url('nasabah/save');

		$data = [
			'form_url' => $this->formUrl,
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Nasabah"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}

	public function save_data()
	{
		$model = new Landing_model();
		$model->nama = 'Nofri Willis 2';
		$model->active = 1;
		$model->delete(4);
	}

	public function getJSON(){
		$model = new UserModel;
		$output = $model->getNasabah();
		// var_dump($output);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id;
			$row[] = '';
			$row[] = $val->sudah_member == 1 ? 'Sudah' : 'Belum Sudah';
			$row[] = ucwords($val->full_name);
			$row[] = $val->email;
			$row[] = $val->jenis_kelamin;
			$row[] = $val->no_hp;
			$row[] = $val->tempat_lahir;
			$row[] = indonesiaFullDate($val->tanggal_lahir);
			// $row[] = $val->tanggal_lahir;
			$row[] = str_replace('/', ',', $val->alamat);
			$alamat = explode('/', $val->alamat);
			$row[] = strtoupper($alamat[6]);
			$row[] = $val->last_update;
			// $row[] = '<a href='.base_url('admin').' class="btn btn-success btn-sm">Edit</a><a href='.base_url('admin').' class="btn btn-danger btn-sm">Hapus</a>';
			$row[] = '<a href='.base_url('admin').' class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Detail"><i class="fa fa-info"></i></span></a>
			<a href='.base_url('nasabah/word/'.$val->id.'').' class="btn btn-info btn-sm" data-toggle="tooltip" title="Download Word"><i class="fa fa-download"></i></span></a>
			<a href='.base_url('admin').' class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
			<a href='.base_url('admin').' class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></span></a>';
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


	public function excel()
	{
		
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Nasabah",
			'data_user' => $this->UserModel->get_data_user()
		];
		
		$this->load->view('nasabah/excel',$data);
	}

		public function word()
	{
		
		$id = $this->uri->segment(3);
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Nasabah",
			'data_user' => $this->UserModel->get_data_nasabah($id)
		];
		
		$this->load->view('nasabah/word',$data);
	}

}

	