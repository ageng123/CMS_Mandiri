<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('RoleModel');
	}
	public function index()
	{
		$content = 'roles/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Roles"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new RoleModel;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_role;
			$row[] = '';
			$row[] = $val->nama_role;
			$row[] = '<a href="'.base_url('roles/edit').'?session_id='.encode($val->id_role).'" class="btn btn-success btn-sm">Edit</a><a href="'.base_url('roles/destroy').'?session_id='.encode($val->id_role).'" class="btn btn-danger btn-sm">Hapus</a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

	// Form Url
	public function add()
	{
		$content = 'roles/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Roles",
			'form_url' => base_url('roles/add')
		];
		if(!empty($this->input->post())):
			$model = new RoleModel();
			$model->nama_role = $this->input->post('nama_role');
			if($model->save()):
				return redirect(base_url('roles'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new RoleModel();
		$id = decode($_GET['session_id']);
		$content = 'roles/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Roles",
			'form_url' => base_url('roles/edit?session_id='.encode($id)),
			'form_data' => $model->find($id)
		];
		if(!empty($this->input->post())):
			
			$model->nama_role = $this->input->post('nama_role');
			if($model->update($id)):
				return redirect(base_url('roles'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function destroy()
	{
		$id = decode($_GET['session_id']);
		$model = new RoleModel;
		$model->delete($id);
		return redirect(base_url('roles'));
	}
	// Export 

}
