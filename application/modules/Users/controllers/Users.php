<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Users extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model(['UserModel', 'AssignRoles/AssignRoleModel', 'Roles/RoleModel']);
		$this->load->library('bcrypt');
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
		$content = 'Users/list';
		$this->formUrl = base_url('Users/save');

		$data = [
			'form_url' => $this->formUrl,
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data User"
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
		$output = $model->get_Users();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->username;
			$row[] = $this->getRoleNamaByIDUser($val->id);
			$row[] = $val->active == 1 ? 'aktif' : ' tidak aktif';
			// $row[] = '<a href='.base_url('admin').' class="btn btn-success btn-sm">Edit</a><a href='.base_url('admin').' class="btn btn-danger btn-sm">Hapus</a>';
			$row[] = '<a onclick="UserServices.buttonUpdateClicked('."'".encode($val->id)."'".')" class="btn btn-warning btn-sm text-white" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
			<a href='.base_url('Users/delete?session_id=').encode($val->id).' class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></span></a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	

	public function add(){
		$this->formUrl = base_url('Users/save');
		$data = [
			'form_url' => $this->formUrl,
			'card_title' => 'Tambah Data User'
		];
		$content = 'add';
		admin_parse($content, $data);
	}
	public function edit(){
		$id = decode($_GET['session_id']);
		$user = new UserModel;
		$output = $user->find($id);
		$data = json_output(200, null, $output);
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function delete(){
		$id = decode($_GET['session_id']);
		$model = new UserModel;
		$model->delete($id);
		return redirect(base_url('Users'));
	}
	private function upload($params, $id){
				$folder = APPPATH.'../resources/upload/'.$id;
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
		$model->password = $this->bcrypt->hash($request->password);
		$model->email = $request->email;
		$model->active = 1;
		$model->created_on = time();
		$model->save();
		$id = $this->db->insert_id();
		$photo = $this->upload('photo', $id);
		$model->photo = $photo->file_name;
		$model->active = 1;
		$model->update($id);
		return redirect(base_url('Users'));
	}
	public function update(){
		$id = decode($_GET['session_id']);
		$model = new UserModel();
		$request = $this->input->post();
		$request = (object)$request;
		$model->full_name = $request->full_name;
		$model->tempat_lahir = $request->tempat_lahir;
		$model->tanggal_lahir = $request->tanggal_lahir;
		$model->jenis_kelamin = $request->jenis_kelamin;
		$model->username = $request->username;

		if($request->password != ''){
			$model->password = $this->bcrypt->hash($request->password);
		}

		$model->email = $request->email;
		$model->active = 1;
		$model->created_on = time();
		$model->update($id);
		$id = $this->db->insert_id();
		$photo = $this->upload('photo', $id);
		if(isset($photo->file_name)){
			$model->photo = $photo->file_name;
		}
		$model->active = 1;
		$model->update($id);
		return redirect(base_url('Users'));
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
