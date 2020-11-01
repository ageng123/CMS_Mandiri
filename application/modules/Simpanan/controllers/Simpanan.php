<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simpanan extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model(['Simpanan_model', 'Profile/Profile_model']);
	}
	public function index()
	{
		$model = new Simpanan_model();
		$model2 = new Profile_model();
		$content = 'index';
		$user = $model2->find($this->session->userdata('user_id'));

		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'user' => $user
		];
		landing_parse($content, $data);
	}

}
