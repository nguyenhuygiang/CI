<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->library('table');
        $this->load->model('m_book');
        $config['base_url'] = base_url('index.php/book'); // xác định trang phân trang 
        $config['total_rows'] = $this->m_book->count_all(); // xác định tổng số record 
        $config['per_page'] = 5; // xác định số record ở mỗi trang 
        $config['uri_segment'] = 2; // xác định segment chứa page number 
        $this->pagination->initialize($config);
        // tạo table 
        $this->table->set_heading('id', 'name');

        $data['data'] = $this->m_book->list_all($config['per_page'], $this->uri->segment(2));
        $this->load->view('book/index', $data);
    }

}
