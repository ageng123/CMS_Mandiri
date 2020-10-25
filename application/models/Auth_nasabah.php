<?php 

class Auth_Nasabah extends CI_Model{
    protected $lastId;
    protected $table = 'tb_user';
    protected $identity = 'email';
    protected $identityInput = '';
    protected $passwordInput = '';
    protected $password = '';
    protected $userData = array();
    protected $roles = array();
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
        if(!$login){
            var_dump($login);
        }
        $this->userData = $login;
        $this->password = $login->password;
        if($this->bcrypt->verify($this->get_password() ,$this->password)){
            $this->userData->role = $this->getRoles($login->id);
            if($this->userData->role == NULL){
                $this->session->set_flashdata('error_login', 'Salah Username atau Password');
                return redirect(base_url('/'));
            } else {
                $this->trigger_events('post_login');
            }
        }
    }
    public function getRoles($id_user){
        $roles = "SELECT * FROM roles_dat a INNER JOIN roles_list b ON a.id_role = b.id_role WHERE b.id_user = {$id_user} and a.id_role = 3";
        $output = $this->db->query($roles)->row_object();
        return $output;
    }
    public function trigger_events($action, $msg = null){
        switch($action){
            case 'post_login':
                $this->set_session();
                $this->update_lastLogin($this->userData->id);
                return redirect(base_url('/'));
            break;
        }
    }
    public function update_lastLogin($id){
        $time = time();
        $sql = "UPDATE tb_user SET last_login = '{$time}' WHERE id = {$id}";
        if($this->db->query($sql)){
            return TRUE;
        }
        return FALSE;
    }
    public function set_session(){
        $data = [
            'user_id' => $this->userData->id,
            'full_name' => $this->userData->full_name,
            'email' => $this->userData->email,
            'id_role' => $this->userData->role->id_role
        ];
        $this->session->set_userdata($data);
    }
}