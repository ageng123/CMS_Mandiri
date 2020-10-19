<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Kontak_model');
	}
	public function index()
	{
		$model = new Kontak_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, $data);
	}
	public function save_data()
	{
		$model = new Kontak_model();
		$model->nama = 'Nofri Willis 2';
		$model->is_active = 1;
		$model->delete(4);
	}


		public function proses_add()
		{
			$data = [
				'nama' => $this->input->post('nama'),
				'email'  => $this->input->post('email'),
				'subject'  => $this->input->post('subject'),
				'message'  => $this->input->post('message')
			];
		
			$sqlinsert = $this->Kontak_model->simpan($data);
			if($sqlinsert) {
				$this->session->set_flashdata('message', 'Pesan Berhasil Dikirim');
				return redirect(base_url().'kontak');
			}

		}
}
