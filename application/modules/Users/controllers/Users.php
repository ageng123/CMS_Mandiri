<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}
	private function msg($status = null, $msg = ' Data Found', $data = []){
		$result = [
			'kode' => $status, 
			'msg' => $msg,
			'data' => $data
		];
		return $result;
	}
	public function index()
	{
		$model = new UserModel();
		$user = $model->findBy(['active' => '1']);
		$content = 'list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS'
		];
		admin_parse($content, null);
		// $this->load->view('welcome_message');
	}
	public function save_data()
	{
		$model = new Landing_model();
		$model->nama = 'Nofri Willis 2';
		$model->active = 1;
		$model->delete(4);
	}
	public function getJSON(){
		$model = new UserModel;
		$output = $model->findBy(['active' => 0]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id_role;
			$row[] = '';
			$row[] = $val->nama_role;
			$row[] = '<a href='.base_url('admin').' class="btn btn-success btn-sm">Edit</a><a href='.base_url('admin').' class="btn btn-danger btn-sm">Hapus</a>';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function add()
	{
		$this->formUrl = base_url('Users/save');
		$data = [
			'form_url' => $this->formUrl,
			'card_title' => 'Tambah Data User'
		];
		$content = 'add';
		admin_parse($content, $data);
	}
	private function upload($params, $id){
				$folder = APPPATH.'../public/resources/upload/'.$id;
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
	public function save()
	{
		$model = new UserModel();
		$request = $this->input->post();
		$request = (object)$request;
		$model->full_name = $request->full_name;
		$model->tempat_lahir = $request->tempat_lahir;
		$model->tanggal_lahir = $request->tanggal_lahir;
		$model->jenis_kelamin = $request->jenis_kelamin;
		$model->username = $request->username;
		$model->password = $request->password;
		$model->active = 1;
		$model->created_on = date('Y-m-d');
		$model->save();
		$id = $this->db->insert_id();
		$ktp = $this->upload('foto_ktp', $id);
		$photo = $this->upload('photo', $id);
		$kk = $this->upload('foto_kk', $id);
		$ahli_waris = $this->upload('foto_ktp_ahli_waris', $id);
		$model->photo = $photo->full_path;
		$model->foto_ktp = $ktp->full_path;
		$model->foto_kk = $kk->full_path;
		$model->foto_ktp_ahli_waris = $ahli_waris->full_path;
		$model->activation_code = base64_encode(md5(date('Y-m-d').$id));
		$model->update($id);
		return redirect(base_url('users'));
	}
	public function testing()
	{
		echo APPPATH.'../public/resources/upload';
	}
}
