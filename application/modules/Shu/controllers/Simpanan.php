<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
	}
	public function index()
	{
		$model = new Profile_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, $data);
	}

}
