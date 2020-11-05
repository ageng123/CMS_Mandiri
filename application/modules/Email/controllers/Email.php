<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Email extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model(['EmailModel', 'AssignRoles/AssignRoleModel', 'Roles/RoleModel']);
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
		$content = 'Email/list';
		$this->formUrl = base_url('Email/save');

		$data = [
			'form_url' => $this->formUrl,
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Email"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}


	public function getJSON(){
		$model = new EmailModel;
		$output = $model->get_Email();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->email;
			$row[] = '
			<a href='.base_url('Email/delete?session_id=').encode($val->id).' class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"  onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Email : '.$val->email.' ? "><i class="fa fa-trash"></i></span></a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	
	public function delete(){
		$id = decode($_GET['session_id']);
		$model = new EmailModel;
		$model->delete($id);
		return redirect(base_url('/Email'));
	}


	public function excel(){
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Email",
			'data_email' => $this->EmailModel->get_Email()
		];
		
		$this->load->view('Email/excel',$data);
	}
	
}
