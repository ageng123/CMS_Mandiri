<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'/models/Main.php');
    class Berita_model extends Main{
        protected $table = 'news_dat';
        protected $primaryKey = 'id_news';
        protected $totalData = 0;
        protected $limit = 10;
        protected $start = 0;
         public function __construct(){
            parent::__construct();
            $this->model = 'dat_subscribe';
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }
        public function getTotalBerita(){
            return $this->db->where('status', 2)->from($this->table)->count_all_results();
        }
        public function set_limit($val){
            $this->limit = $val;
            return $this;
        }
        public function set_page($val){
            $this->start = $val;
            return $this;
        }
        public function get_page(){
            return (int)$this->start;
        }
        public function get_limit(){
            return (int)$this->limit;
        }
        public function getBeritaData(){
            $sql = $this->db->select('*')->where('status', 1)->get($this->table, $this->get_limit(), $this->get_page())->result_object();
            return $sql;
        }
    }