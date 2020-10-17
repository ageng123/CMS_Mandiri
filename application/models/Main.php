<?php 

class Main extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_tablename()
    {
        echo $this->table;
    }
    public function all(){
        $query = $this->db->get($this->table)->result_object();
        return $query;
    }
    public function query($sqlQuery)
    {
        $query = $this->db->query($sqlQuery)->result_object();
        return $query;
    }
    public function find($params)
    {
        $primaryKey = isset($this->primaryKey) ? $this->primaryKey : 'id';
        $query = $this->db->where($primaryKey, $params)->get($this->table)->row_object();
        return $query;
    }
    
    public function findBy($array_params){
        $query = $this->db->where($array_params)->get($this->table)->result_object();
        return $query;
    }
    public function save(){
        $query = $this->db->insert($this->table, $this);
        $this->set_lastId();
        return $query;
    }
    public function update($params){
        $pk = isset($this->primaryKey) ? $this->primaryKey : 'id';
        $this->db->where($pk, $params);
        $query = $this->db->update($this->table, $this);
        return $query;
    }
    public function delete($params){
        $pk = isset($this->primaryKey) ? $this->primaryKey : 'id';
        $this->db->where($pk, $params);
        $query = $this->db->delete($this->table);
        return $query;
    }
    public function set_lastId(){
        $this->lastId = $this->db->insert_id();
        return true;
    }
    private function upload_file($params, $id){
        $folder = APPPATH.'../public/resources/upload/'.$id;
        $config['upload_path']          = $folder;
        $config['allowed_types']        = '*';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);
        if(!file_exists($folder)):
            mkdir($folder, 0777);
        endif;
        if ( ! $this->upload->do_upload($params))
        {
                return $this->upload->display_errors();
        }
        else
        {
                // $data = array('upload_data' => $this->upload->data());
                
                // $this->load->view('upload_success', $data);
                return (object)$this->upload->data();
        }
}
}