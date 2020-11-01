<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';

class StatusPembayaran extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model('StatusPembayaranModel');
		$this->status = [
			'1' => 'Aktif',
			'0' => 'Tidak Aktif'
		];
	}

	public function index($id = null)
	{
		$content = 'StatusPembayaran/list';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Pembayaran",
			'form_url' => base_url('statuspembayaran/add'),
			'status_list' => $this->status,
			'id_user' => $id
		];
		
		admin_parse($content, $data);
		// $this->load->view('welcome_message');
	}

	// JSON
	public function getJSON(){
		$model = new StatusPembayaranModel;
		$id = decode($_GET['filter']);
		$output = $model->findBy(['id_nasabah' => $id]);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $key+1;
			$row[] = $val->id_nasabah;
			$row[] = $val->jenis_bayar;
			$row[] = 'Rp '.$val->jml_pembayaran;
			$row[] = date('d-m-Y', strtotime($val->tgl_pembayaran));
			$row[] = $val->status == 1 ? 'Aktif' : 'Tidak Aktif';
			$row[] = '<a href="'.base_url('statuspembayaran/edit').'?session_id='.encode($val->id).'" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
					 <a href="'.base_url('statuspembayaran/destroy').'?session_id='.encode($val->id).'" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" title="Delete" onclick="return ActionMessage(1, this, event)" data-msg="Yakin Mau Hapus Jenis Pembayaran : '.$val->jenis_bayar.' ? "><i class="fa fa-trash"></i></span></a>
					 ';
			$result[] = $row;
		endforeach;
		$data = json_output(200, null, $result);
		$data['draw'] = $this->input->post('draw');
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}

	// Form Url
	public function add()
	{
		$content = 'StatusPembayaran/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Tambah Data Pembayaran",
			'form_url' => base_url('statuspembayaran/add')
		];
		if(!empty($this->input->post())):
			$model = new StatusPembayaranModel();
			$model->id_nasabah = $this->input->post('id_nasabah');
			$model->jenis_bayar = $this->input->post('jenis_bayar');
			$model->jml_pembayaran = $this->input->post('jml_pembayaran');
			$model->tgl_pembayaran = $this->input->post('tgl_pembayaran');
			$model->status = $this->input->post('status');
			if($model->save()):
				$this->session->set_flashdata('message', 'Data Status Pembayaran Telah Di Input');
				return redirect(base_url('statuspembayaran/index/').encode($this->input->post('id_nasabah')));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}


	public function edit(){
		$model = new StatusPembayaranModel();
		$id = decode($_GET['session_id']);
		$content = 'StatusPembayaran/add';
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Edit Data Pembayaran",
			'form_url' => base_url('statuspembayaran/edit?session_id='.encode($id)),
			'status_list' => $this->status,
			'form_data' => $model->find($id)
		];
		if(!empty($this->input->post())):
			$model->id_nasabah = $this->input->post('id_nasabah');
			$model->jenis_bayar = $this->input->post('jenis_bayar');
			$model->jml_pembayaran = $this->input->post('jml_pembayaran');
			$model->tgl_pembayaran = $this->input->post('tgl_pembayaran');
			$model->status = $this->input->post('status');
			if($model->update($id)):
				$this->session->set_flashdata('message', 'Data Status Pembayaran Telah Di Update');
				return redirect(base_url('statuspembayaran/index/').encode($this->input->post('id_nasabah')));
			else:
				echo $this->db->error();
			endif;
		endif;
		admin_parse($content, $data);
	}


	public function destroy(){
		$id = decode($_GET['session_id']);
		$model = new StatusPembayaranModel;
		$model->delete($id);
		$this->session->set_flashdata('message', 'Data Status Pembayaran Telah Di Hapus');
		return redirect(base_url('statuspembayaran/index/').encode($id));
	}
	// Export 

}
