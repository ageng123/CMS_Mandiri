<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class AssignRoleModel extends Main{
        protected $table = 'roles_list';
        protected $primaryKey = 'id_lst_roles';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }

    }