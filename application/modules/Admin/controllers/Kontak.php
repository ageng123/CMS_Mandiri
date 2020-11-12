<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Kontak extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model(['Kontak_model']);
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
		$content = 'Admin/kontak_view/list';
		$this->formUrl = base_url('Admin/Kontak/save');

		$data = [
			'form_url' => $this->formUrl,
			'page_title' => 'KJKPI - Data Kontak',
			'card_title' => "Data Kontak"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}


	public function getJSON(){
		$model = new Kontak_model;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->nama;
			$row[] = $val->email;
			$row[] = $val->subject;
			$row[] = $val->message;
			$row[] = '
			<a href='.base_url('Admin/Kontak/delete?session_id=').encode($val->id).' class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"  onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Email : '.$val->email.' ? "><i class="fa fa-trash"></i></span></a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	
	public function delete(){
		$id = decode($_GET['session_id']);
		$model = new Kontak_model;
		$model->delete($id);
		return redirect(base_url('/kontak/admin'));
	}


	public function excel(){
		$data = [
			'page_title' => 'KJKPI - Data Kontak',
			'card_title' => "Data Kontak",
			'data_email' => $this->EmailModel->get_Email()
		];
		
		$this->load->view('Admin/kontak_view/excel',$data);
	}
	
}
