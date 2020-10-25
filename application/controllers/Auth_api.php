<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers\Auth.php');
Class Auth_api extends Auth{
    protected $request;
    function __construct(){
        parent::__construct();
        $this->load->model('Auth_nasabah');
        $this->request = (object)$this->input->post();
    }

    public function output($msg, $data, $code = 404){
        $data = [
            'msg' => $msg,
            'data' => $data,
            'kode' => $code
        ];
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
    public function login_api()
    {
        // $this->output('oke', $this->input->post());
        $remember = (bool)$this->input->post('remember');
        if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
        {
            //if the login is successful
            //redirect them back to the home page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            // redirect(base_url('/admin'), 'refresh');
            $this->output($this->ion_auth->messages(), $this->ion_auth->get_session(), 200);
            
        }
        else
        {
            // if the login was un-successful
            // redirect them back to the login page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            // redirect(base_url('auth/login'), 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
            $this->output('message', $this->ion_auth->errors());
        }
    // }
    }
    public function login_nasabah(){
        $model = new Auth_nasabah();
        $model->set_email($this->request->email);
        $model->set_password($this->request->password);
        $model->login();
        die;
    }
}
?>