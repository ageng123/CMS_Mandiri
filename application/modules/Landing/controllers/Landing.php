<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Landing_model');
		$this->load->library('bcrypt');
		$this->kode_nasabah = 'YYYYMMDD[IDNASABAH]His';
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
		// print_r($this->session->userdata);
        //         die;
		$model = new Landing_model();
		$user = $model->findBy(['active' => '1']);
		$content = 'index';
		$user = $model->find($this->session->userdata('user_id'));
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'user' => $user
		];
		landing_parse($content, $data);
		// admin_parse($content, null);
		// $this->load->view('welcome_message');
	}

	public function detail_berita($slug)
	{
		$model = new detailBerita_Model($slug);
		$berita = $model->getBerita();
		$content = 'detail_berita';
		$data = [
			'page_title' => 'Mandiri Sekuritas - CMS',
			'berita' => $berita,
			'comment' => $model->getComment()
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
					<td>Total Pembayaran</td><td>'.$this->data_email['total_pembayaran'].'</td>
					</tr>
					<tr>
					<td>Link Aktivasi Akun</td><td><a href="'.base_url('auth/activate/').$this->data_email['kode_aktivasi'].'">Link Aktivasi</a></td>
					</tr>
					</table>
					</body>
					</html>
					';
		$send = send_email($this->data_email['to'], null, null, 'Status Pendaftaran Akun KJKPI ANDA',$message);
		$this->session->set_flashdata('daftar_sukses', true);
		return redirect(base_url('landing'));
	}
	private function saveData_diri($request){
		$model = new Nasabah_Model;
		$request = (object)$request;
		$model->sudah_member = $request->member == 'sudah' ? 1 : 0;
		$model->member = $request->member == 'sudah' ? $request->client_id : 0;
		$model->full_name = $request->nama;
		$this->session->set_flashdata('nama_pendaftaran', $request->nama);
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
		$this->session->set_flashdata('email_nasabah', $request->email);
		$this->data_email['to'] = $request->email;
		$model->password = $this->bcrypt->hash($request->password);
		$code =  encode($request->nomor_identity.$request->nama);
		$model->activation_code = $this->clean($code);
		$this->data_email['kode_aktivasi'] = $this->clean($code);
		if($model->save()):
			$this->nasabahId = $model->get_lastId();
			$ktp = $this->upload('ktp', $this->nasabahId);
			$ktp_ahli = $this->upload('ktp_ahli', $this->nasabahId);
			$kk = $this->upload('kk', $this->nasabahId);
			$prefix = $this->nasabahId.'/';
			if(isset($ktp->file_name)):
				$model->foto_ktp = isset($ktp->file_name) ? $prefix.$ktp->file_name : 'ktp_'.$prefix;
				$model->foto_kk = isset($kk->file_name) ? $prefix.$kk->file_name : 'ktp_'.$prefix;
			else:
				$model->foto_kk = isset($kk->file_name) ? $prefix.$kk->file_name : 'ktp_'.$prefix;
				$model->foto_ktp_ahli_waris = isset($ktp_ahli->file_name) ? $prefix.$ktp_ahli->file_name : 'ktp_'.$prefix;
			endif;
			$user = explode(' ', $request->nama);
			$model->username = strtolower($user[0]).'-'.$this->nasabahId;
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
		$model->id_user = $this->nasabahId;
		$kodenasabah = 'KJKPI'.date("ym").$this->nasabahId.date("s");
		$model->kode_nasabah = $kodenasabah;
		$this->session->set_flashdata('nomor_nasabah', $kodenasabah);
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
		$model->total_pembayaran = (15000 * (int)$simpanan->wajib ) + 100000 + (int)$sukarela;
		$model->kode_pembayaran = $random_number;
		$this->data_email['total_pembayaran'] = (15000 * (int)$simpanan->wajib ) + 100000 + (int)$sukarela + (int)$random_number;
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
	public function addComment(){
		$id_berita = decode($_GET['code']);
		$id_user = decode($_GET['auth']);
		$model = new Comment_Model;
		$model->news_id = $id_berita;
		$model->author_id = $id_user;
		$model->isi = $this->input->post('comment_content');
		$model->last_update = date('Y-m-d H:i:s');
		$model->save();
		return redirect(base_url('landing/detail_berita/').$this->input->post('slug'));
	}
	function clean($string) {
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
	 
		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	 }
}
