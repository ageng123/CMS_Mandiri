<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Rekening_model');
	}
	public function index()
	{
		$model = new Rekening_model();
		$rekening = $model->get_rekeningNasabah();
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'rekening' => $rekening
		];
		landing_parse($content, $data);
	}

}
