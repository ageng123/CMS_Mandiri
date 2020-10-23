<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Landing_model');
		$this->load->library('bcrypt');
	}
	private function upload($params, $id){
		$folder = APPPATH.'../public/resources/upload/';
		$config['upload_path']          = $folder;
		$config['allowed_types']        = '*';
		$config['file_name']			= encode($id.date('Ymdhis'));
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
	public function index()
	{
		$model = new Landing_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, $data);
		// admin_parse($content, null);
		// $this->load->view('welcome_message');
	}

	public function detail_berita()
	{
		$model = new Landing_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'detail_berita';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS'
		];
		landing_parse($content, $data);
	}

	public function save_data()
	{
		$model = new Landing_model();
		$model->nama = 'Nofri Willis 2';
		$model->active = 1;
		$model->delete(4);
	}
	public function pendaftaran()
	{
		$content = 'form_pendaftaran';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'form_url' => 'users/add'
		];
		landing_parse($content, $data);

	}
	public function pendaftaran_nasabah(){
		$this->trigger_save_event('SAVE_DATA_DIRI', $this->input->post('data_diri'));
		$message = '
					<html>
					<head>
					<title>Birthday Reminders for August</title>
					</head>
					<body>
					<p>Harap Klik Link dibawah Ini untuk aktivasi Akun KJKPI Anda</p>
					<table>
					<tr>
					<td>Total Pembayaran</td><td>'.$this->email['total_pembayaran'].'</td>
					</tr>
					<tr>
					<td>Link Aktivasi Akun</td><td>'.$this->email['kode_aktivasi'].'</td>
					</tr>
					</table>
					</body>
					</html>
					';
		send_email($this->email['to'], null, null, 'Status Pendaftaran Akun KJKPI ANDA',$message);
	}
	private function saveData_diri($request){
		$model = new Nasabah_Model;
		$request = (object)$request;
		$model->sudah_member = $request->member == 'sudah' ? 1 : 0;
		$model->member = $request->member == 'sudah' ? $request->client_id : null;
		$model->full_name = $request->nama;
		if($request->punya_ktp == 'sudah'): 
			$model->ektp = $request->nomor_identity;
		else:
			$model->no_kk = $request->nomor_identity;
		endif;
		$model->jenis_kelamin = $request->jenis_kelamin;
		$model->tempat_lahir = $request->tempat;
		$tanggal = $request->tahun.'-'.$request->bulan.'-'.$request->tanggal;
		$model->tanggal_lahir = date('Y-m-d', strtotime($tanggal));
		$model->no_hp = $request->hp.'/'.$request->rumah;
		$model->alamat = $request->alamat.'/'.$request->rt.'/'.$request->kelurahan.'/'.$request->kecamatan.'/'.$request->kabupaten.'/'.$request->provinsi.'/'.$request->kodepos;
		$model->alamat_rumah = $request->alamat_rumah;
		$model->email = $request->email;
		$this->email['to'] = $request->email;
		$model->password = $this->bcrypt->hash($request->password);
		$code =  encode($request->nomor_identity.$request->nama);
		$model->activation_code = $code;
		$this->email['kode_aktivasi'] = $code;
		if($model->save()):
			$this->nasabahId = $model->lastId;
			$ktp = $this->upload('ktp', $this->nasabahId);
			$ktp_ahli = $this->upload('ktp_ahli', $this->nasabahId);
			$kk = $this->upload('kk', $this->nasabahId);
			$prefix = $this->nasabahId.'/';
			if(isset($ktp->filename)):
				$model->foto_ktp = $prefix.$ktp->file_name;
				$model->foto_kk = $prefix.$kk->file_name;
			else:
				$model->foto_kk = $prefix.$kk->file_name;
				$model->foto_ktp_ahli_waris = $prefix.$ktp_ahli->file_name;
			endif;
			$model->update($this->nasabahId);
			$pekerjaan = $this->trigger_save_event('SAVE_PEKERJAAN', $this->input->post('pekerjaan'));
			$koperasi = $this->trigger_save_event('SAVE_KOPERASI_DATA', $this->input->post('koperasi'));
		endif;
	}
	private function saveData_pekerjaan($request){
		$model = new Pekerjaan_Model;
		$request = (object)$request;
		$model->id_user = $this->nasabahId;
		$model->jenis_pekerjaan = $request->jenis;
		$model->nama_perusahaan = $request->perusahaan;
		$model->divisi = $request->divisi;
		$model->lama_bekerja = $request->lama;
		$model->alamat = $request->alamat.'/'.$request->rt.'/'.$request->kelurahan.'/'.$request->kecamatan.'/'.$request->kabupaten.'/'.$request->provinsi.'/'.$request->kodepos;
		if($model->save()):
			return true;
		endif;
	}
	private function saveData_koperasi($request){
		$model = new Koperasi_Model;
		$request = (object)$request;
		$shu = $this->input->post('shu');
		$shu = (object)$shu;
		$model->nama_rekening = $shu->nama;
		$model->nomor_rekening = $shu->norek;
		$model->nama_bank = $shu->bank;
		$model->cabang = $shu->cabang;
		$waris = $this->input->post('waris');
		$waris = (object)$waris;
		$model->nama_ahli_waris = $waris->nama;
		$model->hubungan_ahli_waris = $waris->hubungan;
		$simpanan = $this->input->post('simpanan');
		$simpanan = (object)$simpanan;
		$model->simpanan_wajib = $simpanan->wajib;
		$sukarela = str_replace('.', '', $simpanan->sukarela);
		$model->simpanan_sukarela = $sukarela;
		$random_number = rand(100, 999);
		$model->total_pembayaran = (15000 * (int)$simpanan_wajib ) + 100000 + (int)$sukarela;
		$model->kode_pembayaran = $random_number;
		$this->email['total_pembayaran'] = (15000 * (int)$simpanan_wajib ) + 100000 + (int)$sukarela + (int)$random_number;
		if($model->save()):
			return true;
		endif;
	}
	private function trigger_save_event($action, $data){
		switch($action){
			case 'SAVE_DATA_DIRI':
				$this->saveData_diri($data);
			break;
			case 'SAVE_PEKERJAAN':
				$this->saveData_pekerjaan($data);
			break;
			case 'SAVE_KOPERASI_DATA':
				$this->saveData_koperasi($data);
			break;
		}
	}

	public function proses_add()
		{
			$data = [
				'email'  => $this->input->post('email')
			];
		
			$sqlinsert = $this->Landing_model->simpan($data);
			if($sqlinsert) {
				$this->session->set_flashdata('message', 'Pesan Berhasil Dikirim');
				return redirect(base_url().'landing');
			}

		}

}
