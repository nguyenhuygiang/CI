<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_book extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function list_all($number, $offset) {

        $this->db->select('*');
        $query = $this->db->get('book', $number, $offset);
        return $query->result_array();
    }
    public function count_all(){
        return $this->db->count_all('book');
    }

}

?>
