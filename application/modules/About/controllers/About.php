<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('About_model');
	}
	public function index()
	{
		$model = new About_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'KJKPI - Tentang Kami'
		];
		landing_parse($content, $data);
	}
	public function save_data()
	{
		$model = new About_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}
}
