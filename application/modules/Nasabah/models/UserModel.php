<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once(APPPATH.'/models/Main.php');
    class UserModel extends Main{
        protected $table = 'tb_user';
        protected $primaryKey = 'id';
        public function __construct(){
            parent::__construct();
            $this->setNasabah();
        }
        public function setNasabah(){
            $this->nasabah = $this->query('SELECT a.*, b.*, c.*, d.*, b.last_update AS created_on  FROM '.$this->table.' a 
            LEFT JOIN roles_list b ON a.id = b.id_user 
            LEFT JOIN tb_nasabah_pekerjaan c ON a.id = c.id_user
            LEFT JOIN tb_koperasi_data d ON a.id = d.id_user 
            WHERE a.active != 3 AND b.id_role = 3 AND a.email IS NOT NULL');
            return $this;
        }
        public function getNasabah(){
            return $this->nasabah;
        }

    public function get_data_user(){
       return $this->nasabah = $this->query('SELECT * FROM '.$this->table.' a LEFT JOIN roles_list b ON a.id = b.id_user WHERE b.id_role = 3 AND a.email IS NOT NULL');
    }

    public function get_data_nasabah($id){
       return $this->nasabah = $this->query('SELECT a.*,b.jenis_pekerjaan, b.nama_perusahaan, b.divisi, b.lama_bekerja, b.alamat as alamat_perusahaan,c.* FROM '.$this->table.' a 
        LEFT JOIN tb_nasabah_pekerjaan b ON a.id = b.id_user
        LEFT JOIN tb_koperasi_data c ON a.id = c.id_user
        where id ='.$id.' ');
    }
    public function get_NasabahData($id){
        return $this->db->query('SELECT a.*,b.jenis_pekerjaan, b.nama_perusahaan, b.divisi, b.lama_bekerja, b.alamat as alamat_perusahaan,c.*  FROM '.$this->table.' a 
        LEFT JOIN tb_nasabah_pekerjaan b ON a.id = b.id_user
        LEFT JOIN tb_koperasi_data c ON a.id = c.id_user
        where id ='.$id.' LIMIT 1 ')->row_object();
    }
    public function softDelete($id){
        return $this->db->set('active',3)->where('id', $id)->update($this->table);
    }
    }