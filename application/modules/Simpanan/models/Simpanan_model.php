<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/Main.php');
    class Simpanan_model extends Main{
        protected $table = 'dat_pembayaran';
        protected $primaryKey = 'id';
        
         public function __construct(){
            parent::__construct();
            $this->model = 'dat_subscribe';
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }
        public function get_History(){
            return $this->db->join('tb_koperasi_data b', 'a.id_nasabah = b.kode_nasabah')->where('b.id_user', decode($_GET['auth']))->get($this->table.' a')->result_object();
        }
    }