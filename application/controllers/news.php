<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function test(){
        $this->load->model('new_model');
        $test = $this->new_model->getList();
    }
}

