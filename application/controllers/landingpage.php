<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

//    public function index() {
//        $data = array(
//            'header' => $this->load->view('landingpage/header', '', TRUE),
//            'slide' => $this->load->view('landingpage/slide', '', TRUE),
//            'content' => $this->load->view('landingpage/content', '', TRUE),
//            'footer' => $this->load->view('landingpage/footer', '', TRUE)
//        );
//        $this->load->view('landingpage/master_page', $data);
//    }

    public function index() {
        $data = array(
            'head' => $this->load->view('landingpage/head', '', TRUE),
            'header' => $this->load->view('landingpage/header', '', TRUE),
            'slide' => $this->load->view('landingpage/slide', '', TRUE),
            'content' => $this->load->view('landingpage/content', '', TRUE),
            'truyenthong' => $this->load->view('landingpage/truyenthong', '', TRUE),
            'biquyet' => $this->load->view('landingpage/biquyet', '', TRUE),
            'footer' => $this->load->view('landingpage/footer', '', TRUE)
        );
        $this->load->view('landingpage/master_page',$data);
    }

}
