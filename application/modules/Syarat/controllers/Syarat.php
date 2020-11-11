<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('syarat_model');
	}
	public function index()
	{
		$model = new syarat_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'KJKPI - Syarat & Ketentuan'
		];
		landing_parse($content, $data);
	}
	public function save_data()
	{
		$model = new syarat_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}
}
