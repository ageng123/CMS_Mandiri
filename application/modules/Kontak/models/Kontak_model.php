<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/Main.php');
    class Kontak_model extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id_user';
        protected $model;
        public function __construct(){
            parent::__construct();
		$this->model = 'dat_kontak';
        }



	public function simpan($data){
		return $this->db->insert($this->model, $data);
	}

    }