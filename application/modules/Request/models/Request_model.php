<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/Main.php');
    class Request_model extends Main{
        protected $table = 'temp_request_data';
        protected $primaryKey = 'id_request';
        
         public function __construct($id = null){
            parent::__construct();
            if($id !== null):
                $this->set_primaryKey($id);
            endif;
        }
        public function set_primaryKey($value){
            $this->id_request = $value;
            return $this;
        }
        public function get_primaryKey(){
            return $this->id_request;
        }
        public function get_namaUser($value){
            $query = "SELECT full_name FROM tb_user a WHERE a.id = {$value}";
            $output = $this->query($query);
            // var_dump($output);
            return $output[0];
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }
        public function update_data(){
            $pk = isset($this->primaryKey) ? $this->primaryKey : 'id';
            $this->db->where($pk, $this->get_primaryKey());
            $query = $this->db->update($this->table, $this);
            return $query;  
        }
    }
    class Koperasi_model extends Main{
        protected $table = 'tb_koperasi_data';
        protected $primaryKey = 'id_koperasi_data';
        protected $data = [];
         public function __construct($id = null){
            parent::__construct();
            if($id !== null):
                $this->set_userId($id);
            endif;
        }
        public function set_userId($value){
            $this->data['id_user'] = $value;
            return $this;
        }
        public function get_userId(){
            return $this->data['id_user'];
        }
        public function get_namaUser($value){
            $query = "SELECT full_name FROM tb_user a WHERE a.id = {$value}";
            $output = $this->query($query);
            // var_dump($output);
            return $output[0];
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }
        public function update_data(){
            $pk = isset($this->primaryKey) ? $this->primaryKey : 'id';
            $this->db->where('id_user', $this->get_userId());
            $query = $this->db->update($this->table, $this);
            return $query;  
        }
    }