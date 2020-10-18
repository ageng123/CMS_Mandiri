<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class KategoriModel extends Main{
        protected $table = 'kategori_list';
        protected $primaryKey = 'id_kategori';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }
        public function top($params){
            $query = "SELECT * FROM ".$this->table." ORDER BY view DESC LIMIT ".$params;
            return $this->query($query);
        }
    }