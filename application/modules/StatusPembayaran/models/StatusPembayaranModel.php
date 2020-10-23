<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    require_once(APPPATH.'/models/Main.php');

    class StatusPembayaranModel extends Main{

        protected $table = 'dat_pembayaran';
        protected $primaryKey = 'id';
        
        public function __construct(){
            parent::__construct();
        }

    }