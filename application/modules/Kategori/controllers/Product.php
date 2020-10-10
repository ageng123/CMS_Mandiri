<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('KategoriModel');
	}
	public function index()
	{
		$content = 'kategori/produk/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Kategori Produk",
			'form_url' => base_url('kategori/product/add')
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new KategoriModel;
		$output = $model->findBy(['jenis_kategori' => 2]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_kategori;
			$row[] = '';
			$row[] = $val->nama_kategori;
			$row[] = '<a href='.base_url('admin').' class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Detail"><i class="fa fa-info"></i></span></a>
					  <a href='.base_url('admin').' class="btn btn-info btn-sm" data-toggle="tooltip" title="Download Word"><i class="fa fa-download"></i></span></a>
					  <a href="'.base_url('kategori/product/edit').'?session_id='.encode($val->id_kategori).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					  <a href="'.base_url('kategori/product/destroy').'?session_id='.encode($val->id_kategori).'" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></span></a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

	// Form Url
	public function add()
	{
		$content = 'kategori/produk/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Kategori Produk",
			'form_url' => base_url('kategori/product/add')
		];
		if(!empty($this->input->post())):
			$model = new KategoriModel();
			$model->nama_kategori = $this->input->post('nama_kategori');
			$model->deskripsi_kategori = $this->input->post('deskripsi_kategori');
			$model->jenis_kategori = 2;
			if($model->save()):
				$this->session->set_flashdata('message', 'Data Kategori Produk Telah Di Input');
				return redirect(base_url('kategori/product'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new KategoriModel();
		$id = decode($_GET['session_id']);
		$content = 'kategori/produk/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data Kategori Produk",
			'form_url' => base_url('kategori/product/edit?session_id='.encode($id)),
			'form_data' => $model->find($id)
		];
		if(!empty($this->input->post())):
			
			$model->nama_kategori = $this->input->post('nama_kategori');
			$model->deskripsi_kategori = $this->input->post('deskripsi_kategori');
			$model->jenis_kategori = 2;
			if($model->update($id)):
				$this->session->set_flashdata('message', 'Data Kategori Produk Telah Di Update');
				return redirect(base_url('kategori/product'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function destroy()
	{
		$id = decode($_GET['session_id']);
		$model = new KategoriModel;
		$model->delete($id);
			$this->session->set_flashdata('message', 'Data Kategori Produk Telah Di Hapus');
		return redirect(base_url('kategori/product'));
	}
	// Export 

}