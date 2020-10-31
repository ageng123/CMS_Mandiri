<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model(['Rekening_model', 'Profile/Profile_model']);
	}
	public function index()
	{
		$model = new Rekening_model();
		$rekening = $model->get_rekeningNasabah();
		$user = $model->find($this->session->userdata('user_id'));
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'rekening' => $rekening,
			'user' => $user
		];
		landing_parse($content, $data);
	}

}
