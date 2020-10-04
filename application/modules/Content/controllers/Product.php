<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['ProdukModel', 'Users/UserModel', 'Kategori/KategoriModel']);
		$this->status = [
			'1' => 'Publish',
			'2' => 'Simpan',
			'3' => 'Delete'
		];
	}
	public function index()
	{
		$content = 'content/produk/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Konten Produk"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new ProdukModel;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_product;
			$row[] = '';
			$row[] = $val->title;
			$row[] = $this->getUserNamaById($val->seller_id);
			$row[] = '<i class="fa fa-eye"></i> '.$val->view;
			$row[] = $model->status($val->status);
			$row[] = '<h4>'.$model->kategori_list($val->tag_id).'</h4>';
			$row[] = '<a href='.base_url('admin').' class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Detail"><i class="fa fa-info"></i></span></a>
					 <a href='.base_url('admin').' class="btn btn-info btn-sm" data-toggle="tooltip" title="Download Word"><i class="fa fa-download"></i></span></a>
					 <a href="'.base_url('content/product/edit').'?session_id='.encode($val->id_product).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					 <a href="'.base_url('content/product/destroy').'?session_id='.encode($val->id_product).'" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></span></a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function getUserNamaById($params){
		$model = new UserModel();
		$output = $model->find($params);
		return $output->username;
	}
	// Form Url
	private function upload($params){
		$folder = APPPATH.'../public/resources/produk/';
		$config['upload_path']          = $folder;
		$config['allowed_types']        = '*';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);
		if(!file_exists($folder)):
			mkdir($folder, 0777);
		endif;
		if ( ! $this->upload->do_upload($params))
		{
				return $this->upload->display_errors();
		}
		else
		{
				// $data = array('upload_data' => $this->upload->data());
				
				// $this->load->view('upload_success', $data);
				return (object)$this->upload->data();
		}
	}
	public function add()
	{
		$content = 'content/produk/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Konten Produk",
			'form_url' => base_url('content/product/add'),
			'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 2]),
			'status_list' => $this->status
		];
		if(!empty($this->input->post())):
			$model = new ProdukModel();
			$model->title = $this->input->post('judul');
			$model->link = str_replace([' ', '-'], ['_', ''], $this->input->post('judul'));
			$model->sub = $this->input->post('subjudul');
			$model->content = $this->input->post('isi_berita');
			$model->tag_id = implode(',',$this->input->post('kategori_berita'));
			$model->status = $this->input->post('status_berita');
			$cover = $this->upload('cover_berita');
			$model->thumbnail = $cover->file_name;
			$model->view = 0; //must-edit
			$model->author = 3; //must-edit
			if($model->save()):
				$this->session->set_flashdata('message', 'Data Konten Produk Telah Di Input');
				return redirect(base_url('content/product'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new ProdukModel();
		$id = decode($_GET['session_id']);
		$content = 'content/produk/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data Konten Produk",
			'form_url' => base_url('content/product/edit?session_id='.encode($id)),
			'form_data' => $model->find($id),
			'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 2]),
			'status_list' => $this->status
		];
		if(!empty($this->input->post())):
			
			$model->title = $this->input->post('judul');
			$model->link = str_replace([' ', '-'], ['_', ''], $this->input->post('judul'));
			$model->sub = $this->input->post('subjudul');
			$model->content = $this->input->post('isi_berita');
			$model->tag_id = implode(',',$this->input->post('kategori_berita'));
			$model->status = $this->input->post('status_berita');
			$cover = $this->upload('cover_berita');
			if(isset($cover->file_name)):
				$model->thumbnail = $cover->file_name;
			endif;
			$model->author = 3; //must-edit
			if($model->update($id)):
				$this->session->set_flashdata('message', 'Data Konten Produk Telah Di Update');
				return redirect(base_url('content/product'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function destroy()
	{
		$id = decode($_GET['session_id']);
		$model = new ProdukModel;
		$model->delete($id);
		$this->session->set_flashdata('message', 'Data Konten Produk Telah Di Hapus');
		return redirect(base_url('content/product'));
	}
	// Export 
	public function tes()
	{
		$model = new ProdukModel();
		$output = $model->kategori_list('1,3');
		var_dump($output);

	}
}
