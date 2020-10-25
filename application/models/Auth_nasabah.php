<?php 

class Auth_Nasabah extends CI_Model{
    protected $lastId;
    protected $table = 'tb_user';
    protected $identity = 'email';
    protected $identityInput = '';
    protected $passwordInput = '';
    protected $password = '';
    protected $userData = array();
    public function __construct()
    {
        parent::__construct();
    }
    public function set_email($value){
        $this->identityInput = $value;
        return $this;
    }
    public function get_Identity($value){
        return $this->identityInput;
    }
    public function set_password($value){
        $this->passwordInput = $value;
        return $this;
    }
    public function get_password($value){
        return $this->passwordInput;
    }
    public function login(){
        $login = $this->db->select('*')->where($this->identity, $this->get_Identity())->get($this->table)->row_object();
        if(count($login) > 0){
            var_dump($login);
        } else {
            var_dump($login);
        }
    }
}