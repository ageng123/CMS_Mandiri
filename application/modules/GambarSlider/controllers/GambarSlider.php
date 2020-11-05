<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	require_once APPPATH.'controllers/Auth_Guard.php';

	class GambarSlider extends Auth_Guard {

		public function __construct(){
			parent::__construct();
			$this->load->model('GambarSliderModel');
			$this->user = $this->session->userdata('user_id');
			$this->status_slider = [
				'1' => 'Aktif',
				'0' => 'Tidak Aktif'
			];
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
				$row[] = $key+1;
				$row[] = $val->nama_attachment;
				$row[] = '<img src="'.base_url('resources/Slider/'.$val->nama_file).'" alt="Image placeholder" width="50%">';
				$row[] = $val->status_slider == 1 ? 'Aktif' : 'Tidak Aktif';
				$row[] = '<a href="'.base_url('GambarSlider/edit').'?session_id='.encode($val->id_attachment).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
						<a href="'.base_url('GambarSlider/destroy').'?session_id='.encode($val->id_attachment).'" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" title="Delete" onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Gambar : '.$val->nama_attachment.' ? "><i class="fa fa-trash"></i></span></a>';
				$result[] = $row;
			endforeach;
			$data = json_output(200, null, $result);
			$data['draw'] = $this->input->post('draw');
			echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
		}


		// Form Url
		private function upload($params){
			$folder = APPPATH.'../resources/Slider/';
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
			if ( ! $this->upload->do_upload($params)) {
				
				return $this->upload->display_errors();
			} else {
				$upload_data = (object)$this->upload->data();
				$config['source_image']=  APPPATH.'../resources/Slider/'.$upload_data->file_name;
				$config['width']= 1260;
                $config['height']= 800;
                $config['new_image']=  APPPATH.'../resources/Slider/'.$upload_data->file_name;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
				return (object)$this->upload->data();
			}
		}


		public function add(){
			$content = 'GambarSlider/add';
			$data = [
				'title' => 'Mandiri Sekuritas - CMS',
				'card_title' => "Tambah Data Gambar Slider",
				'form_url' => base_url('Gambarslider/add'),
				'status_list' => $this->status_slider
			];
			if(!empty($this->input->post())):
				$model = new GambarSliderModel();
				$slider = $this->upload('cover_slider');
				$model->nama_file = $slider->file_name;
				$model->mime = $slider->file_type;
				$model->uploader = $this->session->userdata('user_id');
				$model->seq = $this->session->userdata('seq');
				$model->tipe_attachment = 3;
				$model->nama_attachment = $slider->client_name;
				$model->status_slider = $this->input->post('status_slider');

				if($model->save()):
					$this->session->set_flashdata('message', 'Data Gambar Slider Telah Di Input');
					return redirect(base_url('GambarSlider'));
				else:
					echo $this->db->error();
				endif;
			endif;
			admin_parse($content, $data);
		}


		public function edit(){
			$model = new GambarSliderModel();
			$id = decode($_GET['session_id']);
			$content = 'GambarSlider/add';
			$data = [
				'title' => 'Mandiri Sekuritas - CMS',
				'card_title' => "Edit Data Gambar Slider",
				'form_url' => base_url('GambarSlider/edit?session_id='.encode($id)),
				'form_data' => $model->find($id),
				'status_list' => $this->status_slider
			];
			if(!empty($this->input->post())):
				$slider = $this->upload('cover_slider');
				if(isset($slider->file_name)):
					$model->nama_file = $slider->file_name;
				endif;
				$model->uploader = $this->session->userdata('user_id');
				$model->seq = $this->session->userdata('seq');
				$model->tipe_attachment = 3;
				$model->nama_attachment = $slider->client_name;
				$model->status_slider = $this->input->post('status_slider');

				if($model->update($id)):
					$this->session->set_flashdata('message', 'Data Gambar Slider Telah Di Update');
					return redirect(base_url('GambarSlider'));
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
			$this->session->set_flashdata('message', 'Data Gambar Slider Di Hapus');
			return redirect(base_url('Gambarslider'));
		}


		public function upload_foto(){
			$product = $this->upload('file');
			if(isset($product)){
				$model = new GambarSliderModel;
				$model->nama_file = $product->file_name;
				$model->mime = $product->file_type;
				$model->uploader = $this->session->userdata('user_id');
				$model->seq = $this->session->userdata('seq');
				$model->tipe_attachment = 3;
				$model->nama_attachment = $product->client_name;
				if($model->save()){
					$output = json_output(200, 'Success Upload', $data = ['id_upload' => $this->db->insert_id()]);
					echo json_encode($output, JSON_PRETTY_PRINT);
				}
			}
			
		}

	}
