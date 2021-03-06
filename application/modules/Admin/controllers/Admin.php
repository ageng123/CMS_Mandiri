<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
require_once(APPPATH.'controllers/Auth.php');
class Admin extends Auth {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}


	public function index(){
		if($this->ion_auth->logged_in()){
		} else {
			return redirect(base_url('admin/login'));
		}
		$location = $this->uri->segment(1);
		$model = new Admin_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'KJKPI - Admin'
		];
		admin_parse($content, $data);
		// $this->load->view('login', $data);
	}

	public function login(){
		$data = [
			'page_title' => 'KJKPI - Login'
		];
		$this->load->view('login', $data);
	}

	private function msg($status = null, $msg = 'Error Data Not Found', $data = []){
		$result = [
			'kode' => $status, 
			'msg' => $msg,
			'data' => $data
		];
		return $result;
	}

	// public function save_data(){
	// 	$model = new Admin_model();
	// 	$model->nama = 'Nofri Willis 2';
	// 	$model->active = 1;
	// 	$model->delete(4);
	// }
	
	// datatable JSON
	public function getJSON(){
		$model = new Admin_model;
		$output = $model->findBy(['active' => 0]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_user;
			$row[] = '';
			$row[] = $key+1;
			$row[] = $val->username;
			$row[] = $val->password;
			$row[] = $val->active == 0 ? 'aktif' : 'tidak aktif';
			$row[] = '<a href='.base_url('admin').' class="btn btn-success btn-sm">Edit</a><a href='.base_url('admin').' class="btn btn-danger btn-sm">Hapus</a>';
			$result[] = $row;
		endforeach;
		$data = $this->msg(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

}
