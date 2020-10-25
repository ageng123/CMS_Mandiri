<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once APPPATH.'controllers/Auth_Guard.php';

	class GambarSlider extends Auth_Guard {

		public function __construct(){
			parent::__construct();
			$this->load->model('GambarSliderModel');
			$this->user = $this->session->userdata('user_id');
		}


		public function index(){
			$content = 'GambarSlider/list';
			$data = [
				'title' => 'Mandiri Sekuritas - CMS',
				'card_title' => "Data Gambar Slider",
			];
			admin_parse($content, $data);
			// $this->load->view('welcome_message');
		}


		public function getJSON(){
			$model = new GambarSliderModel;
			// var_dump($this->user);
			$output = $model->findBy(['tipe_attachment' => 3]);
			$no = $this->input->post('start');
			$result = array();
			foreach($output as $key => $val):
				$row = array();
				$row[] = $val->id_attachment;
				$row[] = '';
				$row[] = $val->nama_attachment;
				$row[] = $val->status_slider;
				$row[] = '<a href="'.base_url('gambarslider/edit').'?session_id='.encode($val->id_attachment).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
						<a href="'.base_url('gambarslider/destroy').'?session_id='.encode($val->id_attachment).'" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" title="Delete" onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Gambar : '.$val->nama_attachment.' ? "><i class="fa fa-trash"></i></span></a>';
				$result[] = $row;
			endforeach;
			$data = json_output(200, null, $result);
			$data['draw'] = $this->input->post('draw');
			echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
		}


		// Form Url
		private function upload($params){
			$folder = APPPATH.'../public/resources/Slider/';
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


		public function add(){
			$content = 'content/berita/add';
			$data = [
				'title' => 'Mandiri Sekuritas - CMS',
				'card_title' => "Tambah Data Konten Berita",
				'form_url' => base_url('content/berita/add'),
				'kategori_list' => $this->KategoriModel->findBy(['jenis_kategori' => 1]),
				'status_list' => $this->status
			];
			if(!empty($this->input->post())):
				$model = new BeritaModel();
				$model->title = $this->input->post('judul');
				$model->link = str_replace([' ', '-'], ['+', ''], $this->input->post('judul'));
				$model->sub = $this->input->post('subjudul');
				$model->content = $this->input->post('isi_berita');
				$model->tag_id = implode(',',$this->input->post('kategori_berita'));
				$model->status = $this->input->post('status_berita');
				$cover = $this->upload('cover_berita');
				$model->thumbnail = $cover->file_name;
				$model->view = 0; //must-edit
				$model->author = $this->user; //must-edit
				if($model->save()):
					$this->session->set_flashdata('message', 'Data Konten Berita Telah Di Input');
					return redirect(base_url('content/berita'));
				else:
					echo $this->db->error();
				endif;
			endif;
			admin_parse($content, $data);
		}


		public function edit(){
			$model = new GambarSliderModel();
			$id = decode($_GET['session_id']);
			$content = 'content/berita/add';
			$data = [
				'title' => 'Mandiri Sekuritas - CMS',
				'card_title' => "Edit Data Konten Berita",
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
				$cover = $this->upload('nama_file');
				if(isset($cover->file_name)):
					$model->thumbnail = $cover->file_name;
				endif;
				$model->author = $this->user; 
				if($model->update($id)):
					$this->session->set_flashdata('message', 'Data Konten Berita Telah Di Update');
					return redirect(base_url('content/berita'));
				else:
					echo $this->db->error();
				endif;
			endif;
			admin_parse($content, $data);
		}


		public function destroy(){
			$id = decode($_GET['session_id']);
			$model = new GambarSliderModel;
			$model->delete($id);
			$this->session->set_flashdata('message', 'Data Konten Berita Telah Di Hapus');
			return redirect(base_url('content/berita'));
		}

	}
