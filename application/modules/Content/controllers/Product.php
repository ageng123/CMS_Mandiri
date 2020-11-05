<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Product extends Auth_Guard {
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
		$content = 'Content/Produk/list';
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
		$output = $model->findBy(['seller_id' => $this->session->userdata('user_id'), 'status !=' => 3]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->title;
			$row[] = $this->getUserNamaById($val->seller_id);
			$row[] = '<i class="fa fa-eye"></i> '.$val->view;
			$row[] = $model->status($val->status);
			$row[] = '<h4>'.$model->kategori_list($val->tag_id).'</h4>';
			$row[] = '<a href="'.base_url('Content/Product/edit').'?session_id='.encode($val->id_product).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					  <a href="'.base_url('Content/Product/destroy').'?session_id='.encode($val->id_product).'" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" title="Delete" onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Konten Produk : '.$val->title.' ? "><i class="fa fa-trash"></i></span></a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		// $data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function get_attachment(){
		$folder = APPPATH.'../resources/produk/'.$this->session->userdata('user_id');
		$id = decode($_GET['id']);
		$model = new Attachment_Model;
		$output = $model->findBy(['refid' => $id, 'nama_attachment !=' => null]);
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row['id'] = $val->id_attachment;
			$row['file'] = $val->nama_file;
			$row['nama'] = $val->nama_attachment;
			$row['size'] = filesize($folder.DIRECTORY_SEPARATOR.$val->nama_file);
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		echo json_encode($data, JSON_PRETTY_PRINT);
	}
	public function delete_attachment(){
		$nama_file = $this->input->post('name');
		$id = $this->input->post('id');
		$directory =  APPPATH.'../resources/produk/'.$this->session->userdata('user_id');
		if(unlink($directory.'/'.$nama_file)){
			$model = new Attachment_Model;
			if($model->delete($id)){
				$result = 'Berhasil Hapus Data';
			}
		}
		$data = json_output(200, null, $result);
		echo json_encode($data, JSON_PRETTY_PRINT);
	}
	public function getUserNamaById($params){
		$model = new UserModel();
		$output = $model->find($params);
		return $output->username;
	}
	// Form Url
	private function upload($params){
		$folder = APPPATH.'../resources/produk/'.$this->session->userdata('user_id');
		$config['upload_path']          = $folder;
		$config['allowed_types']        = '*';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['file_name'] = date('YmdHis').'_'.encode(date('Y-m-d H:i:s'));

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
		$content = 'Content/Produk/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Konten Produk",
			'form_url' => base_url('Content/Product/add'),
			'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 2]),
			'status_list' => $this->status
		];
		$tempData = new Attachment_model;
		
		if(!empty($this->input->post())):
			$model = new ProdukModel();
			$model->title = $this->input->post('judul');
			// $model->link = str_replace([' ', '-'], ['_', ''], $this->input->post('judul'));
			$model->harga = $this->input->post('subjudul');
			$model->deskripsi = $this->input->post('isi_berita');
			$model->tag_id = implode(',',$this->input->post('kategori_berita'));
			$model->status = $this->input->post('status_berita');
			// $cover = $this->upload('cover_berita');
			// $model->thumbnail = $cover->file_name;
			$model->view = 0; //must-edit
			$model->seller_id = $this->session->userdata('user_id'); //must-edit
			if($model->save()):
				$this->session->set_flashdata('message', 'Data Konten Produk Telah Di Input');
				$attach = new Attachment_model;
				$id =  $model->get_lastId();
				$attachArr = explode(',', $this->input->post('attachment'));
				foreach($attachArr as $key => $val){
					$attach->refid = $id;
					$attach->seq = $key + 1;
					$attach->update($val);
				}

				return redirect(base_url('Content/Product'));
			else:
				echo $this->db->error();
			endif;
		endif;
		$dataTemp = $tempData->findBy(['uploader' => $this->session->userdata('user_id'), 'refid' => null]);
		if(count($dataTemp) > 0):
			foreach($dataTemp as $key => $val): 
				$tempData->delete($val->id_attachment);
				unlink(APPPATH.'../resources/produk/'.$this->session->userdata('user_id').'/'.$val->nama_file);
			endforeach;
		endif;
		admin_parse($content, $data);
	}
	public function edit(){
		$model = new ProdukModel();
		$attach = new Attachment_Model;
		$id = decode($_GET['session_id']);
		$content = 'Content/Produk/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data Konten Produk",
			'form_url' => base_url('Content/Product/edit?session_id='.encode($id)),
			'form_data' => $model->find($id),
			'attachment' => $attach->Attachment_List($id),
			'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 2]),
			'status_list' => $this->status
		];
		$imgArr = explode(',',$data['attachment']);
		$img = array();
		foreach($imgArr as $val){
			$img[] = $attach->find($val);
		}
		$data['img'] = $img;
		if(!empty($this->input->post())):
			$model = new ProdukModel();
			$model->title = $this->input->post('judul');
			// $model->link = str_replace([' ', '-'], ['_', ''], $this->input->post('judul'));
			$model->harga = $this->input->post('subjudul');
			$model->deskripsi = $this->input->post('isi_berita');
			$model->tag_id = implode(',',$this->input->post('kategori_berita'));
			$model->status = $this->input->post('status_berita');
			$model->seller_id = $this->session->userdata('user_id'); //must-edit
			if($model->update($id)):
			$attachArr = explode(',', $this->input->post('attachment'));
				foreach($attachArr as $key => $val){
					$attach = new Attachment_Model;
					$attach->refid = $id;
					$attach->seq = $key + 1;
					$attach->update($val);
				}	
				$this->session->set_flashdata('message', 'Data Konten Produk Telah Di Update');
				return redirect(base_url('Content/Product'));
			else:
				echo $this->db->error();
				die;
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
		return redirect(base_url('Content/Product'));
	}
	// Export 
	public function tes()
	{
		$model = new ProdukModel();
		$output = $model->kategori_list('1,3');

	}
	public function upload_foto(){
		$product = $this->upload('file');
		if(isset($product)){
			$model = new Attachment_model;
			$model->nama_file = $product->file_name;
			$model->mime = $product->file_type;
			$model->uploader = $this->session->userdata('user_id');
			$model->seq = $this->session->userdata('seq');
			$model->tipe_attachment = 2;
			$model->nama_attachment = $product->client_name;
			if($model->save()){
				$output = json_output(200, 'Success Upload', $data = ['id_upload' => $this->db->insert_id()]);
				echo json_encode($output, JSON_PRETTY_PRINT);
			}
		}
		
	}
}
