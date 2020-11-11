<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Berita_model');
	}
	public function index()
	{
		$model = new Berita_model();
		$this->load->library('pagination');
		$config['base_url'] = site_url('Berita/index/'); //site url
        $config['total_rows'] = $model->getTotalBerita(); //total row
        $config['per_page'] = 8;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        // Membuat Style pagination untuk BootStrap v4
      	$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
		$this->pagination->initialize($config);
		$model->set_limit($config['per_page']);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$model->set_page($page);
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        // $data['data'] = $model->getBeritaData();           
		$content = 'index';
		$data2 = $model->getBeritaData(); 
		// echo var_dump($data2); die;
		$data = [
			'page_title' => 'KJKPI - Berita & Media',
			'page' => $page,
			'data' => $model->getBeritaData(),
			'paginate' => $this->pagination->create_links()
		];
		landing_parse($content, $data);
	}
	public function tes(){
		$model = new Berita_model;
		var_dump($model->getTotalBerita());
		die;
	}
}
