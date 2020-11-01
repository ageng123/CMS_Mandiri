<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/Main.php');
    class Rekening_model extends Main{
        protected $table = 'tb_koperasi_data';
        protected $primaryKey = 'id_user';
        protected $id_user = '';
         public function __construct(){
            parent::__construct();
            $this->model = 'dat_subscribe';
            $this->id_user = $this->session->userdata('user_id');
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }
        public function get_rekeningNasabah(){
            return $this->db->select('a.nama_rekening as nama, a.nomor_rekening as nomor, a.cabang, a.nama_bank as bank')->where('id_user', $this->id_user)->get($this->table.' a')->row_object();
        }
    }