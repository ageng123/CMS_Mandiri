<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    require_once(APPPATH.'/models/Main.php');

    class GambarSliderModel extends Main{
        protected $table = 'attachment_list';
        protected $primaryKey = 'id_attachment';
        
        public function __construct(){
            parent::__construct();
        }
    }