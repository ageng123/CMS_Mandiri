<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpanan extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Simpanan_model');
	}
	public function index()
	{
		$model = new Simpanan_model();
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, $data);
	}

}
