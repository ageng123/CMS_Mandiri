<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class UserModel extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id';
        public function __construct(){
            parent::__construct();
            $this->setNasabah();
        }
        public function setNasabah(){
            $this->nasabah = $this->query('SELECT * FROM '.$this->table.' a LEFT JOIN roles_list b ON a.id = b.id_user WHERE b.id_user IS NULL AND a.email IS NOT NULL');
            return $this;
        }
        public function getNasabah(){
            return $this->nasabah;
        }
    }