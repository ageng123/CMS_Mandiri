<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class MenuModel extends Main{
        protected $table = 'menu_list';
        protected $primaryKey = 'id_menu';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }

    }