<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class Landing_Model extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id_user';
        
         public function __construct(){
            parent::__construct();
		$this->model = 'dat_subscribe';
        }



	public function simpan($data){
		return $this->db->insert($this->model, $data);
	}

    }