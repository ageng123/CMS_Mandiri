<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class UserModel extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id';
        
        public function __construct(){
            parent::__construct();
        }
        public function get_Users(){
            $sql  = $this->db->join('roles_list b', 'a.id = b.id_user', 'LEFT')->where('b.id_role != 3')->or_where('b.id_role IS NULL')->get($this->table. ' a')->result_object();
            return $sql;
        }
    }