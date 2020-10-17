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
    // @table user berisi tentang data umum nasabah pada form step 1
    class Nasabah_Model extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id_user';
        
        public function __construct(){
            parent::__construct();
        }
    }
    // @table tb_nasabah_pekerjaan Berisi tentang detail pekerjaan nasabah
    class Pekerjaan_Model extends Main{
        // tb_nasabah_pekerjaan
        protected $table = 'tb_nasabah_pekerjaan';
        protected $primaryKey = 'id_pekerjaan';
        
        public function __construct(){
            parent::__construct();
        }
    }
    class Koperasi_Model extends Main{
        protected $table = 'tb_koperasi_data';
        protected $primaryKey = 'id_koperasi_data';
        
        public function __construct(){
            parent::__construct();
        }
    }