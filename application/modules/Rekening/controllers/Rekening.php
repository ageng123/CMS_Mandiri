<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model(['Rekening_model', 'Profile/Profile_model']);
		if($this->session->userdata('id_role') == 3){

		} else {
			return redirect(base_url(''));
		}
	}
	public function index()
	{
		$model = new Rekening_model();
		$model2 = new Profile_model();
		$rekening = $model->get_rekeningNasabah();
		$user = $model2->find($this->session->userdata('user_id'));
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'rekening' => $rekening,
			'user' => $user
		];
		landing_parse($content, $data);
	}

}
