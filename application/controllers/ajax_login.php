<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

//    load form dang nhap
    public function index() {
        $this->load->view('ajax_login/index');
    }

//load form dang nhap thanh cong 

    public function login() {
        $this->load->view('ajax_login/login');
    }

// kiem tra login

    public function check_login() {
        $user = $this->input->post('user_name');
        $pass = $this->input->post('password');
        $this->load->model('m_ajax_login');
        $result = $this->m_ajax_login->login($name, $password);
    }

}
