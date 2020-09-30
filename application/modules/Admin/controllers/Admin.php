<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('form_validation');
	}


	public function index(){
		$model = new Admin_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS'
		];
		admin_parse($content, null);
		// $this->load->view('login', $data);
	}


	public function save_data(){
		$model = new Admin_model();
		$model->nama = 'Nofri Willis 2';
		$model->active = 1;
		$model->delete(4);
	}

}
