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
    public function get_Identity(){
        return $this->identityInput;
    }
    public function set_password($value){
        $this->passwordInput = $value;
        return $this;
    }
    public function get_password(){
        return $this->passwordInput;
    }
    public function login(){
        $login = $this->db->select('*')->where($this->identity, $this->get_Identity())->get($this->table)->row_object();
        if(!empty($login)){
            var_dump($login);
        } else {
            var_dump($login);
        }
    }
    public function getRoles(){

    }
}