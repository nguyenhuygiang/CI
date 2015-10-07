<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_ajax_login extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($name, $password) {
        $this->db->select('name,password');
        $this->db->from('demo');
        $this->db->where('name', $name);
        $this->db->where('password', $password);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
