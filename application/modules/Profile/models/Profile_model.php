<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/Main.php');
    class Profile_model extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id';
        protected $filename;
         public function __construct(){
            parent::__construct();
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }
        public function save_upload(){
            $upload = $this->upload_file('profilePhoto', $this->session->userdata('user_id'));
            if($upload->file_name != NULL){
                $this->filename = $upload->file_name;
            }
            $this->photo = $this->filename;
            $this->update($this->session->userdata('user_id'));
        }
    }   