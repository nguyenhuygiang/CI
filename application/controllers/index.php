<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('login/demoCI');
    }

    public function demo() {
        $this->load->model('m_user');
        $select = $this->m_user->select();
        echo "<pre>";
        var_dump($select);
        echo $select[1]->user;
    }

    public function form() {
        $data = array(
            'title' => 'day la trang login',
            'message' => 'nhap thong tin dang nhap'
        );
        $this->load->view('demo', $data);
    }

    public function insert() {
        $this->load->model('m_user');
        $this->m_user->insert();
    }

    public function delete() {
        $this->load->model('m_user');
        $this->m_user->delete();
        echo "";
    }

    public function update() {
        $this->load->model('m_user');
        $this->m_user->update();
        
    }

}
