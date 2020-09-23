<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		$model = new Admin_model();
		$user = $model->findBy(['is_active' => '1']);
		$content = 'welcome_message';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, null);
		// $this->load->view('welcome_message');
	}
	public function save_data()
	{
		$model = new Admin_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}
}
