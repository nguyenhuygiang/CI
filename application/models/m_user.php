<?php

class M_user extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select() {
        $this->db->select('*');
        $result = $this->db->get('user');
        return $result->result();
    }

    public function insert() {

        $data = array(
            'user' => 'My title',
            'password' => '12334',
            'email' => 'hai@yahoo.com'
        );
        $this->db->insert('user', $data);
        echo $this->db->last_query();
    }

    public function update() {
        $data = array(
            'user' => 'giang',
            'password' => 'hdby79',
            'email' => 'giang3@gmail.com'
        );
        $this->db->where('id','19');
        $this->db->update('user', $data);
        echo "thanh cong";
    }

    public function delete() {
        $this->db->delete('user', array('id'=> '18'));
        echo "thanh cong";
    }

}
