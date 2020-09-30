<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Landing_model');
	}
	public function index()
	{
		$model = new Landing_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, null);
		// admin_parse($content, null);
		// $this->load->view('welcome_message');
	}
	public function save_data()
	{
		$model = new Landing_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}
}
