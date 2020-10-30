<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';

class Berita extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model('KategoriModel');
	}
	public function index()
	{
		$content = 'kategori/berita/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Kategori Berita",
			'form_url' => base_url('kategori/berita/add')
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new KategoriModel;
		$output = $model->findBy(['jenis_kategori' => 1]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->nama_kategori;
			$row[] = $val->deskripsi_kategori;
			$row[] = '<a href="'.base_url('kategori/berita/edit').'?session_id='.encode($val->id_kategori).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					  <a href="'.base_url('kategori/berita/destroy').'?session_id='.encode($val->id_kategori).'" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" title="Delete" onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Kategori Berita : '.$val->nama_kategori.' ? "><i class="fa fa-trash"></i></span></a> ';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

	// Form Url
	public function add()
	{
		$content = 'kategori/berita/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Kategori Berita",
			'form_url' => base_url('kategori/berita/add')
		];
		if(!empty($this->input->post())):
			$model = new KategoriModel();
			$model->nama_kategori = $this->input->post('nama_kategori');
			$model->deskripsi_kategori = $this->input->post('deskripsi_kategori');
			$model->jenis_kategori = 1;
			if($model->save()):
				$this->session->set_flashdata('message', 'Data Kategori Berita Telah Di Input');
				return redirect(base_url('kategori/berita'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new KategoriModel();
		$id = decode($_GET['session_id']);
		$content = 'kategori/berita/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data Kategori Berita",
			'form_url' => base_url('kategori/berita/edit?session_id='.encode($id)),
			'form_data' => $model->find($id)
		];
		if(!empty($this->input->post())):
			
			$model->nama_kategori = $this->input->post('nama_kategori');
			$model->deskripsi_kategori = $this->input->post('deskripsi_kategori');
			$model->jenis_kategori = 1;
			if($model->update($id)):
				$this->session->set_flashdata('message', 'Data Kategori Berita Telah Di Update');
				return redirect(base_url('kategori/berita'));
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
		$this->session->set_flashdata('message', 'Data Kategori Berita Telah Di Hapus');
		return redirect(base_url('kategori/berita'));
	}
	// Export 

}
