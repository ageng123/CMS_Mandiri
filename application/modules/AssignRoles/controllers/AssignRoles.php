<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssignRoles extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model(['AssignRoleModel', 'Users/UserModel', 'Roles/RoleModel']);
	}
	public function index()
	{
		$content = 'AssignRoles/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'form_url' => base_url('assignroles/add'),
			'user_data' => $this->UserModel->all(),
			'role_data' => $this->RoleModel->all(),
			'card_title' => "Master Data User Roles"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new AssignRoleModel;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_lst_roles;
			$row[] = '';
			$row[] = $this->getUserNamaById($val->id_user);
			$row[] = $this->getRoleNamaById($val->id_role);
			$row[] = '<a href='.base_url('admin').' class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Detail"><i class="fa fa-info"></i></span></a>
					  <a href='.base_url('admin').' class="btn btn-info btn-sm" data-toggle="tooltip" title="Download Word"><i class="fa fa-download"></i></span></a>
					  <a href="'.base_url('assignroles/edit').'?session_id='.encode($val->id_lst_roles).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					  <a href="'.base_url('assignroles/destroy').'?session_id='.encode($val->id_lst_roles).'" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></span></a>
					   ';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function getUserNamaById($params){
		$model = new UserModel();
		$output = $model->find($params);
		return $output->username;
	}
	public function getRoleNamaById($params){
		$model = new RoleModel();
		$output = $model->find($params);
		return $output->nama_role;
	}

	// Form Url
	public function add()
	{
		$content = 'assignroles/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Assign User to Roles",
			'form_url' => base_url('assignroles/add'),
			'user_data' => $this->UserModel->all(),
			'role_data' => $this->RoleModel->all()
		];
		if(!empty($this->input->post())):
			$model = new AssignRoleModel();
			$model->id_role = $this->input->post('role_id');
			$model->id_user = $this->input->post('user_id');
			if($model->save()):
				$this->session->set_flashdata('message', 'Data User Role Telah Di Input');
				return redirect(base_url('assignroles'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new AssignRoleModel();
		$id = decode($_GET['session_id']);
		$content = 'assignroles/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data User Roles",
			'form_url' => base_url('assignroles/edit?session_id='.encode($id)),
			'form_data' => $model->find($id),
			'user_data' => $this->UserModel->all(),
			'role_data' => $this->RoleModel->all()
		];
		if(!empty($this->input->post())):
			
			$model->id_role = $this->input->post('role_id');
			$model->id_user = $this->input->post('user_id');
			if($model->update($id)):
				$this->session->set_flashdata('message', 'Data User Role Telah Di Update');
				return redirect(base_url('assignroles'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function destroy()
	{
		$id = decode($_GET['session_id']);
		$model = new AssignRoleModel;
		$model->delete($id);
		$this->session->set_flashdata('message', 'Data User Role Telah Di Hapus');
		return redirect(base_url('assignroles'));
	}
	// Export 

}