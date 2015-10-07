<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
    }

    public function login_form() {
        $this->load->view('demo_login/index');
    }

//    public function login() {
////        echo 'dang nhap thanh cong';
//        $this->load->library('form_validation');
//        $this->form_validation->set_rules('user_name', 'User_name', 'trim|requied||xss_clean');
//        $this->form_validation->set_rules('pass_word', 'Pass_word', 'trim|requide||xss_clean');
//        die();
//        if ($this->form_validation->run() == FALSE) {
//            $this->load->view('demo_login/index');
//        } else {
//            $user = $this->input->port('user_name');
//            $pass = md5($this->input->port('password'));
//            $this->load->model('m_login_form');
//            $result = $this->m_login_form->test($user, $pass);
//            if ($result) {
//                $this->session->set_userdata('user', $result);
//                $this->load->view('demo_login/admin');
//            } else {
//                $this->load->view('demo_login/index');
//            }
//        }
//    }
    public function check_login() {
        $user = $this->input->post('user_name');
        $pass = $this->input->post('password');
        
//        var_dump($user);
//        var_dump($pass);
        $this->load->model('m_login_form');
        $result = $this->m_login_form->test($user,$pass);
        if ($result == FALSE) {
            echo "that bai";
        } else {
            echo "thanh cong";
//            $this->load->view('demo_login/admin');
        }
    }

    public function login() {
        $userdata = array(
            'name' => $this->input->post('user_name'),
            'password' => md5($this->input->post('password')),
            'login' => TRUE
        );
        $this->session->set_userdata('userdata', $userdata);
    }

    public function logout() {
        if ($this->_user_is_login()) {
            //neu thanh vien da dang nhap thi xoa session login
            $this->session->unset_userdata('userInfo');
        }
        $this->session->set_flashdata('flash_message', 'Đăng xuất thành công');
    }

}
