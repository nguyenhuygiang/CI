<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_session extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
    }

    public function index() {
        $data = array(
            "username" => "giang",
            "email" => "giang@gmail.com",
            "sex" => "male"
        );
        $this->session->set_userdata($data);
        redirect(base_url(), "index.php/demo_session/index2");
    }

    public function index2() {
        $user = $this->session->userdata("username");
        $email = $this->session->userdata("email");
        $sex = $this->session->userdata("sex");
        echo "Username :$user,Email:$email,Sex:$sex";
        $data = $this->session->all_userdata();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    public function index3() {
        $this->session->sess_destroy();
        echo "Huy session thanh cong";
    }

    public function insert() {
        $data = array(
            "user" => "hien",
            "password" => "23456",
            "email" => "hien@gmail"
        );
        $this->db->insert('user', $data);
    }

}
