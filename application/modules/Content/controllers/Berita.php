<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['BeritaModel', 'Users/UserModel', 'Kategori/KategoriModel']);
		$this->status = [
			'1' => 'Publish',
			'2' => 'Simpan',
			'3' => 'Delete'
		];
	}
	public function index()
	{
		$content = 'content/berita/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Berita"
		];
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}
	// JSON
	public function getJSON(){
		$model = new BeritaModel;
		$output = $model->all();
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_news;
			$row[] = '';
			$row[] = $val->title;
			$row[] = $this->getUserNamaById($val->author);
			$row[] = '<i class="fa fa-eye"></i> '.$val->view;
			$row[] = $model->status($val->status);
			$row[] = '<h4>'.$model->kategori_list($val->tag_id).'</h4>';
			$row[] = '<a href="'.base_url('content/berita/edit').'?session_id='.encode($val->id_news).'" class="btn btn-success btn-sm">Edit</a><a href="'.base_url('content/berita/destroy').'?session_id='.encode($val->id_news).'" class="btn btn-danger btn-sm">Hapus</a>';
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
	public function add()
	{
		$content = 'content/berita/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Kategori Berita",
			'form_url' => base_url('content/berita/add'),
			'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 1]),
			'status_list' => $this->status
		];
		if(!empty($this->input->post())):
			$model = new BeritaModel();
			$model->title = $this->input->post('judul');
			$model->link = str_replace([' ', '-'], ['_', ''], $this->input->post('judul'));
			$model->sub = $this->input->post('subjudul');
			$model->content = $this->input->post('isi_berita');
			$model->tag_id = implode(',',$this->input->post('kategori_berita'));
			$model->status = $this->input->post('status_berita');
			$model->view = 0; //must-edit
			$model->author = 3; //must-edit
			if($model->save()):
				return redirect(base_url('content/berita'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new BeritaModel();
		$id = decode($_GET['session_id']);
		$content = 'content/berita/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data Kategori Berita",
			'form_url' => base_url('content/berita/edit?session_id='.encode($id)),
			'form_data' => $model->find($id),
			'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 1]),
			'status_list' => $this->status
		];
		if(!empty($this->input->post())):
			
			$model->title = $this->input->post('judul');
			$model->link = str_replace([' ', '-'], ['_', ''], $this->input->post('judul'));
			$model->sub = $this->input->post('subjudul');
			$model->content = $this->input->post('isi_berita');
			$model->tag_id = implode(',',$this->input->post('kategori_berita'));
			$model->status = $this->input->post('status_berita');
			$model->view = 0; //must-edit
			$model->author = 3; //must-edit
			if($model->update($id)):
				return redirect(base_url('content/berita'));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}
	public function destroy()
	{
		$id = decode($_GET['session_id']);
		$model = new BeritaModel;
		$model->delete($id);
		return redirect(base_url('content/berita'));
	}
	// Export 
	public function tes()
	{
		$model = new BeritaModel();
		$output = $model->kategori_list('1,3');
		var_dump($output);

	}
}
