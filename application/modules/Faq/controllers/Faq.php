<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Faq_model');
	}
	public function index()
	{
		$model = new Faq_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, $data);
	}
	public function save_data()
	{
		$model = new Faq_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}
}
