<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
 class HeaderModel extends Main{
    protected $table = 'attachment_list';
    protected $primaryKey = 'id_attachment';
    
    public function __construct(){
        parent::__construct();
        $this->last_update = date('Y-m-d H:i:s');
    }
    public function header_list(){
        return $this->findBy(['tipe_attachment' => 3]);
    }
 }
?>