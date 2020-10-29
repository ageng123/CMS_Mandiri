<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class RoleModel extends Main{
        protected $table = 'roles_dat';
        protected $primaryKey = 'id_role';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }

    }