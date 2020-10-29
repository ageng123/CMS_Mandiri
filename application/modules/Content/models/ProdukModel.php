<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class ProdukModel extends Main{
        protected $table = 'product_dat';
        protected $primaryKey = 'id_product';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }
        public function status($params){
            $result = '';
             switch($params){
                 case 1:
                     $result = 'Sedang Dipublish';
                 break;
                 case 2:
                     $result = 'Tidak AKtif';
                 break;
                 case 1:
                     $result = 'Dihapus';
                 break;
             }
             return $result;
         }
         public function Kategori_list($params){
            $result = [];
            $parameter = explode(',', $params);
            foreach($parameter as $val):
                $model = $this->db->where('id_kategori', $val)->get('kategori_list')->row_object();
                array_push($result, '<span class="badge badge-pill p-2 text-white badge-primary">'.$model->nama_kategori.'</span>');
            endforeach;
            return implode(' ',$result);
        }
        public function newest(){
            $query = "SELECT * FROM ".$this->table." a LEFT JOIN attachment_list b ON a.id_product = b.refid  WHERE a.status = 1 GROUP BY b.refid ORDER BY a.last_update DESC, b.seq ASC LIMIT 6";
            return $this->query($query);
        }
        public function top(){
            $query = "SELECT * FROM ".$this->table." a LEFT JOIN attachment_list b ON a.id_product = b.refid  WHERE a.status = 1 GROUP BY b.refid ORDER BY a.view DESC, b.seq ASC LIMIT 10";
            return $this->query($query);
        }
        
    }
    class Attachment_Model extends Main{
        protected $table = 'attachment_list';
        protected $primaryKey = 'id_attachment';
        
        public function __construct(){
            parent::__construct();
            $this->last_update = date('Y-m-d H:i:s');
        }
        public function status($params){
            $result = '';
             switch($params){
                 case 1:
                     $result = 'Sedang Dipublish';
                 break;
                 case 2:
                     $result = 'Tidak AKtif';
                 break;
                 case 1:
                     $result = 'Dihapus';
                 break;
             }
             return $result;
         }
         public function Attachment_List($params){
            $sqlQuery = "SELECT GROUP_CONCAT(`id_attachment` separator ',') as list FROM ".$this->table." WHERE refid ='".$params."' GROUP BY refid";
            $output = $this->query($sqlQuery);
            if(count($output) > 0){
                return $output[0]->list;
            }
            return '';
        }
    }