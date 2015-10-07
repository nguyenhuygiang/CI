<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_test extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $this->db->select();
        $this->db->from('demo');
        $query = $this->db->get();
        
//        echo $this->db->last_query();
//        die();
        return $query->result();
    }

}
