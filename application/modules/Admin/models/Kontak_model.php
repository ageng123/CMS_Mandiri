<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class Kontak_model extends Main{
        protected $table = 'dat_kontak';
        protected $primaryKey = 'id';
        
        public function __construct(){
            parent::__construct();
        }
        public function get_Email(){
            $sql= $this->query('SELECT * FROM '.$this->table);
            return $sql;
        }

    }