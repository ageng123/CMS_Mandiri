<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Auth_Guard.php';
class Nasabah extends Auth_Guard {


	public function __construct(){
		parent::__construct();
		$this->load->model(['UserModel', 'AssignRoles/AssignRoleModel', 'Roles/RoleModel']);
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
		$content = 'nasabah/list';
		$this->formUrl = base_url('nasabah/save');

		$data = [
			'form_url' => $this->formUrl,
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Nasabah"
		];
		admin_parse($content, $data);
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
		$output = $model->getNasabah();
		// var_dump($output);
		$no = $this->input->post('start');
		$result = array();
		foreach($output as $key => $val):
			$row = array();
			$row[] = $val->id;
			$row[] = '';
			$row[] = $val->sudah_member == 1 ? 'Sudah' : 'Belum';
			$row[] = ucwords($val->full_name);
			$row[] = $val->email;
			$row[] = $val->jenis_kelamin;
			$row[] = $val->no_hp;
			$row[] = $val->tempat_lahir;
			$row[] = indonesiaFullDate($val->tanggal_lahir);
			// $row[] = $val->tanggal_lahir;
			$row[] = str_replace('/', ',', $val->alamat);
			$alamat = explode(',', $val->alamat);
			$alamat2 = explode('/', $val->alamat);

			$row[] = strtoupper( $alamat[6] ? $alamat[6] : $alamat2[6]);
			$row[] = $val->last_update;
			// $row[] = '<a href='.base_url('admin').' class="btn btn-success btn-sm">Edit</a><a href='.base_url('admin').' class="btn btn-danger btn-sm">Hapus</a>';
			$row[] = '<a href='.base_url('admin').' class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Detail"><i class="fa fa-info"></i></span></a>
			<a href='.base_url('nasabah/word/'.$val->id.'').' class="btn btn-info btn-sm" data-toggle="tooltip" title="Download Word"><i class="fa fa-download"></i></span></a>
			<a onclick="NasabahServices.updateEvent('."'".encode($val->id)."'".')" class="btn btn-warning btn-sm text-white" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>
			<a href='.base_url('nasabah/delete?session_id=').encode($val->id).' class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></span></a>';
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
	public function getRoleNamaByIDUser($id_user){
		$roleModel = new AssignRoleModel();
		$role = $roleModel->findBy(['id_user' => $id_user]);
		if(count($role) > 0):
			$role = $role[0];
			$modelRoleDetail = new RoleModel();
			$role_detail = $modelRoleDetail->find($role->id_role);
			$output = $role_detail->nama_role;
		return $output;
		else:
			return 'Jabatan Belum Diisi';
		endif;
	}


	public function excel()
	{
		
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Nasabah",
			'data_user' => $this->UserModel->get_data_user()
		];
		
		$this->load->view('nasabah/excel',$data);
	}

		public function word()
	{
		
		$id = $this->uri->segment(3);
		$data = [
			'title' => 'Mandiri Sekuritas - CMS',
			'card_title' => "Data Nasabah",
			'data_user' => $this->UserModel->get_data_nasabah($id)
		];
		
		$this->load->view('nasabah/word',$data);
	}
	public function edit(){
		$id = decode($_GET['session_id']);
		$model = new UserModel();
		$output = $model->get_NasabahData($id);
		$data = json_output(200, null, $output);
		echo JSON_ENCODE($data, JSON_PRETTY_PRINT);
	}
	public function update(){
		$id = decode($_GET['session_id']);
		

	}
	public function delete(){
		$id = decode($_GET['session_id']);
	}
	public function pendaftaran_nasabah(){
		$this->trigger_save_event('SAVE_DATA_DIRI', $this->input->post('data_diri'));
		$content = '
		<p> Kepada Yth Bapak/ Ibu '.$this->nama_pendaftaran.' <p>
		<br>
		<br>
		<p>Selamat Datang di Koperasi Jasa Komunitas PanenSAHAM Indonesia.		
		Terima kasih telah melakukan pendaftaran sebagai calon anggota Koperasi Jasa Komunitas PanenSaham Indonesia dengan data sebagai berikut : </p>
		<table>
		<tr>
		<td>No Pendaftaran</td><td>:</td><td>'.$this->nomor_pembayaran.'</td>
		</tr>
		<tr>
		<td>Nama </td><td>:</td><td>'.$this->nama_pendaftaran.'</td>
		</tr>
		<tr>
		<td>Email</td><td>:</td><td>'.$this->data_email['to'].'</td>
		</tr>
		<tr>
		<td>No HP</td><td>:</td><td>'.$this->no_hp.'</td>
		</tr>
		<tr>
		<td>Link Aktivasi Akun</td><td><a href="'.base_url('auth/activate/').$this->data_email['kode_aktivasi'].'">Link Aktivasi</a></td>
		</tr>
		</table>
		<br>
		<p>Simpanan koperasi dengan rincian : </p>
		<br>
		<br>
		<p>Simpanan Pokok Rp 100.000,- </p>
		<p> Simpanan Wajib Rp 15.000,- </p>
		<p> Simpanan Sukarela Rp '.$this->sukarela.' </p>
		<p> Kode Unik Rp '.$this->kode_pendaf.',- </p>
		<p> Jumlah Pembayaran Rp '.$this->data_email['total_pembayaran'].',- </p>
		<br>
		<p>silahkan lakukan pembayaran simpanan koperasi Anda melalui nomor rekening di bawah ini :</p>
		<br>
		<p>Rekening BRI an Koperasi Jasa Komunitas PanenSaham Indonesia</p>
		<p>No Rek 032001001729302</p>
		<br>
		<p>Rekening Mandiri an Koperasi Jasa Komunitas PanenSaham Indonesia<p>
		<p>No Rek 1250014072052<p>
		<br>
		<p>Setelah melakukan pembayaran, mohon tunggu konfirmasi dari kami.
		<br>
		<p>Jika Bpk/ibu ingin mendaftarkan Anak, istri, kerabat atau teman terdekat silahkan langsung mendaftar melalui website kami http://kjkpi.com/ </p>
		<br>
		<p>Untuk pertanyaan dan informasi lebih lanjut, silahkan hubungi bagian keanggotaan kami 0812-1139-4434 
		Jam Operasional:</p>
		<p>pukul 08.30 – 17.00 ( Hari kerja )</p>
		<br?
		<p>Terima kasih atas kepercayaan Anda telah bergabung di Koperasi Jasa Komunitas PanenSAHAM Indonesia.</p>
		<br?
		Salam,
		<p>Koperasi Jasa Komunitas PanenSAHAM Indonesia.</p>
		<br?
		<p> ---------------- </p>
		';
		// $send = send_email($this->data_email['to'], null, null, 'Status Pendaftaran Akun KJKPI ANDA',$message);
		$this->session->set_flashdata('daftar_sukses', true);
		return redirect(base_url('nasabah'));
	}
	private function saveData_diri($request){
		$model = new Nasabah_Model;
		$request = (object)$request;
		$model->sudah_member = $request->member == 'sudah' ? 1 : 0;
		$model->member = $request->member == 'sudah' ? $request->client_id : 0;
		$model->full_name = $request->nama;
		$this->nama_pendaftaran = $request->nama;
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
		$model->no_hp = $request->hp;
		$his->no_hp = $request->hp;
		
		$model->alamat = $request->alamat.','.$request->rumah.','.$request->rt.','.$request->kelurahan.','.$request->kecamatan.','.$request->kabupaten.','.$request->provinsi.','.$request->kodepos;
		$model->alamat_rumah = $request->alamat_rumah;
		$model->email = $request->email;
		$this->session->set_flashdata('email_nasabah', $request->email);
		$this->data_email['to'] = $request->email;
		$model->password = $this->bcrypt->hash($request->password);
		$code =  encode($request->nomor_identity.$request->nama);
		$model->activation_code = $this->clean($code);
		$this->data_email['kode_aktivasi'] = $this->clean($code);
		$rtrw = explode('/', $request->rt);
		$additional = [
			'pendidikan' => $request->pendidikan,
			'client_id' => $request->client_id,
			'provinsi' => $request->provinsi,
			'kabupaten' => $request->kabupaten,
			'RT' => $rtrw[0],
			'RW' => $rtrw[1]
		];
		$model->additional = json_encode($additional);
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
			$role = new AssignRoleModel;
			$role->id_user = $this->nasabahId;
			$role->id_role = '3';
			$role->last_update = date('Y-m-d H:i:s');
			$role->save();
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
		$model->alamat = $request->alamat.','.$request->rt.','.$request->kelurahan.','.$request->kecamatan.','.$request->kabupaten.','.$request->provinsi.','.$request->kodepos;
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
		$this->nomor_pendaftaran = $kodenasabah;
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
		$this->sukarela = $$simpanan->sukarela;
		$model->simpanan_sukarela = $sukarela;
		$random_number = rand(100, 999);
		$model->total_pembayaran = (15000 * (int)$simpanan->wajib ) + 100000 + (int)$sukarela;
		$model->kode_pembayaran = $random_number;
		$this->kode_pendaf = $random_number;
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
			case 'UPDATE_DATA_DIRI':
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
}

	