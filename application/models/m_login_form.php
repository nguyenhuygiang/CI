<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_login_form extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function test($user, $pass) {
        $this->db->select('name,password');
        $this->db->from('demo');
        $this->db->where('name', $user);
        $this->db->where('password', $pass);
       $this -> db -> limit(1);
        $query = $this->db->get();

//        echo $this->db->last_query();
//        die;
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

}
