<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    var $name;
    var $color;

    public function demo() {

        $this->name = "giang";
        $this->color = "red";
        $tung['name'] = $this->name;
        $data['color'] = $this->color;
        $this->load->view('test/index', $data);
        $this->load->view('test/index', $tung);
    }

    public function index() {
        $data = array(
            'name' => $this->name = "giang",
            'color' => $this->color = "red"
        );
        $this->load->view('test/index', $data);
    }

    public function demo_foreach() {
        $data = array(
            '1' => "nguyen",
            '2' => 'huy',
            '3' => 'giang'
        );
//        echo $data[1];
//        die();
        foreach ($data as $item) {
            echo $item;
        }
    }

    public function demo_1() {
        $this->load->model('m_test');
        $data['ketqua'] = $this->m_test->select();
//        echo "<pre>";
//        var_dump($data);
        $this->load->view('test/index', $data);
//$result = $this->m_test->select();
//        echo "<pre>";
//        var_dump($result);
//        echo $result[1]->name;
//        die();
//$data['result'] = $result;
//        foreach ($result as $ketqua) {
//            echo $ketqua;
//            print $ketqua->user_id;
//            print $ketqua->name;
//            die();
    }

//$this->load->view('test/index', $data);
}
