<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}


	public function index(){
		$content = 'index';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS'
		];
		// landing_parse($content, null);
		admin_parse($content, null);
		// $this->load->view('login');
	}
	private function msg($status = null, $msg = 'Error Data Not Found', $data = []){
		$result = [
			'kode' => $status, 
			'msg' => $msg,
			'data' => $data
		];
		return $result;
	}
	public function save_data(){
		$model = new Admin_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}
	// datatable JSON
	public function getJSON(){
		$model = new Admin_model;
		$output = $model->findBy(['active' => 0]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->username;
			$row[] = $val->password;
			$result[] = $row;
		endforeach;
		$data = $this->msg(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

}
