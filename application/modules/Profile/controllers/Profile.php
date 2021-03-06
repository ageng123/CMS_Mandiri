<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
		if($this->session->userdata('id_role') == 3){

		} else {
			return redirect(base_url(''));
		}
	}
	public function index()
	{
		$model = new Profile_model();
		$user = $model->find($this->session->userdata('user_id'));
		$content = 'index';
		$data = [
			'page_title' => 'KJKPI - Profile',
			'user' => $user
		];
		landing_parse($content, $data);
	}


	public function edit_foto()
	{
		$model = new Profile_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'edit';
		$data = [
			'page_title' => 'KJKPI - Edit Foto Profile'
		];
		landing_parse($content, $data);
	}
	public function save_changes(){
		$model = new Profile_model();
		$model->save_upload();
		return redirect(base_url('/Profile'));
	}

}
