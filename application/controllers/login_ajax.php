<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ajax extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
    }

    public function login() {
        $this->load->view('login_ajax/index');
    }

    public function check_login() {
        $user = $this->input->post('user_name');
        $pass = $this->input->post('password');

        $this->load->model('m_login_ajax');
        $result = $this->m_login_ajax->check($user, $pass);
        if ($result == FALSE) {
            echo FALSE;
        } else {
            echo TRUE;
        }
    }

    public function admin() {
        echo "dang nhap thanh cong";
    }

}
