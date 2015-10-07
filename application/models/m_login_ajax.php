<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_login_ajax extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function check($user, $pass) {
        $this->db->select('name,password');
        $this->db->from('demo');
        $this->db->where('name', $user);
        $this->db->where('password', $pass);
        $query = $this->db->get();
        if ($query->num_rows == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
