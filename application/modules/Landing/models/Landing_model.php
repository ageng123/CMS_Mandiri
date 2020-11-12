<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class Landing_Model extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id';
        
        public function __construct(){
            parent::__construct();
            $this->model = 'dat_subscribe';
        }
        public function simpan($data){
            return $this->db->insert($this->model, $data);
        }

        public function data_slider(){
            $query = $this->db->query("SELECT * FROM attachment_list WHERE tipe_attachment = 3 and status_slider = 1 ");

            return $query;
        }

        public function data_berita(){
            $query = $this->db->query("SELECT * FROM news_dat order by id_news desc limit 8 ");        
            return $query;
        }

   

    }
    // @table user berisi tentang data umum nasabah pada form step 1
    class Nasabah_Model extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id';
        protected $email = '';
        protected $phone = '';
        public function __construct(){
            parent::__construct();
        }
        public function setEmail($val){
            return $this->email = $val;
        }
        public function setPhone($val){
            return $this->phone = $val;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function checkEmailAndPhone(){
            $row = $this->db->where('email', $this->getEmail())->or_where('no_hp', $this->getPhone)->get($this->table)->result_array();
            if(count($row) > 0){
                return FALSE;
            }
            return TRUE;
        }
    }
    // @table tb_nasabah_pekerjaan Berisi tentang detail pekerjaan nasabah
    class Pekerjaan_Model extends Main{
        // tb_nasabah_pekerjaan
        protected $table = 'tb_nasabah_pekerjaan';
        protected $primaryKey = 'id_pekerjaan';
        
        public function __construct(){
            parent::__construct();
        }
        public function update_nasabahData($id){
            return $this->db->where('id_user', $id)->update($this->table, $this);
        }
    }
    class Koperasi_Model extends Main{
        protected $table = 'tb_koperasi_data';
        protected $primaryKey = 'id_koperasi_data';
        
        public function __construct(){
            parent::__construct();
        }
        public function update_nasabahData($id){
            return $this->db->where('id_user', $id)->update($this->table, $this);
        }
    }
    class detailBerita_Model extends Main{
        protected $table = 'news_dat';
        protected $primaryKey = 'id_news';
        protected $slug;
        protected $primary;
        protected $viewBerita;
        protected $tags;
        public function __construct($slug = null){
            parent::__construct();
            if($slug != null):
                $this->slug = $slug;
            endif;
        }
        public function getComment(){
            $berita = $this->findBy(['link' => $this->slug]);
            $sql = '';
            foreach($berita as $key => $val){
                
                $sql = "SELECT a.*, a.last_update as comment_update,b.full_name, b.photo, c.* FROM news_comment_list a LEFT JOIN tb_user b ON a.author_id = b.id LEFT JOIN attachment_list c ON a.author_id = c.uploader  WHERE news_id = {$val->id_news}  ORDER BY a.last_update DESC";
            }
            $comment = $this->query($sql);
            return $comment;
        }
        public function getBerita(){
            $berita = $this->db->select('*')->where('link', $this->slug)->get($this->table)->row_object();
            $this->tags = $berita->tag_id;
            $this->viewBerita = $berita->view;
            $this->primary = $berita->id_news;
            $this->triggerEvents('ADD_BERITA_VIEW');
            $this->triggerEvents('ADD_TAGS_VIEW');
            return $berita;
        }
        public function triggerEvents($action){
            switch($action){
                case 'ADD_BERITA_VIEW':
                    $this->view = (int)$this->viewBerita + 1;
                    $this->update($this->primary);
                    return true;
                break;
                case 'ADD_TAGS_VIEW':
                    $viewNow = 1;
                    $tags = explode(',', $this->tags);
                    foreach($tags as $val){
                        $sql = "SELECT view FROM kategori_list WHERE  id_kategori = {$val}";
                        $view = $this->query($sql);
                        $viewNow = (int)$view[0]->view + $viewNow;
                        $sql = "UPDATE kategori_list SET view = {$viewNow} WHERE id_kategori = {$val}";
                        $this->query($sql);
                    }
                    return true;
                break;
                case 'ADD_COMMENT':
                break;
            }
        }
        private function add_beritaView($id_berita){

        }
    }
    class Comment_Model extends Main{
        protected $table = 'news_comment_list';
        protected $primaryKey = 'id_comment';
        
        public function __construct(){
            parent::__construct();
        }
    }