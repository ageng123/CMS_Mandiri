<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers\Auth.php');
Class Auth_Guard extends Auth{
        function __construct()
        {
            parent::__construct();
            if($this->ion_auth->logged_in()){
            } else {
                return redirect(base_url('admin/login'));

            }
        }
}