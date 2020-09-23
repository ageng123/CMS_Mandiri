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

}