<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class BeritaModel extends Main{
        protected $table = 'news_dat';
        protected $primaryKey = 'id_news';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }
        public function Kategori_list($params){
            $result = [];
            $parameter = explode(',', $params);
            foreach($parameter as $val):
                $model = $this->db->where('id_kategori', $val)->get('kategori_list')->row_object();
                array_push($result, '<span class="badge p-2 badge-pill text-white badge-primary">'.$model->nama_kategori.'</span>');
            endforeach;
            return implode(' ',$result);
        }
        public function status($params){
           $result = '';
            switch($params){
                case 1:
                    $result = 'Sedang Dipublish';
                break;
                case 2:
                    $result = 'Tidak Aktif';
                break;
                case 1:
                    $result = 'Dihapus';
                break;
            }
            return $result;
        }
        public function top_3(){
            $query = "SELECT * FROM ".$this->table." WHERE status = 1 ORDER BY view DESC LIMIT 3";
            return $this->query($query);
        }
        public function newest(){
            $query = "SELECT * FROM ".$this->table." WHERE status = 1 ORDER BY last_update DESC LIMIT 10";
            return $this->query($query);
        }
    }