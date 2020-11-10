<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Password_model');
		if($this->session->userdata('id_role') == 3){

		} else {
			return redirect(base_url(''));
		}
	}
	public function index()
	{
		$model = new Password_model();
		$user = $model->findBy(['active' => '1']);
		$user = $model->find($this->session->userdata('user_id'));

		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'user' => $user
		];
		landing_parse($content, $data);
	}

}
