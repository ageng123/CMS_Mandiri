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
			'card_title' => "Master Data Role",
			'form_url' => base_url('roles/add')
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
			$row[] = '<a href="'.base_url('roles/edit').'?session_id='.encode($val->id_role).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					 <a href="'.base_url('roles/destroy').'?session_id='.encode($val->id_role).'" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" title="Delete" onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Role : '.$val->nama_role.' ? "><i class="fa fa-trash"></i></span></a>
					 ';
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
				$this->session->set_flashdata('message', 'Data Role Telah Di Input');
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
			'card_title' => "Edit Data Role",
			'form_url' => base_url('roles/edit?session_id='.encode($id)),
			'form_data' => $model->find($id)
		];
		if(!empty($this->input->post())):
			
			$model->nama_role = $this->input->post('nama_role');
			if($model->update($id)):
				$this->session->set_flashdata('message', 'Data Role Telah Di Update');
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
		$this->session->set_flashdata('message', 'Data Role Telah Di Hapus');
		return redirect(base_url('roles'));
	}
	// Export 

}
