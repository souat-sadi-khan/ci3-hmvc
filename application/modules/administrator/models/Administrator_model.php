<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrator_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function check_login($username, $password) {
        $this->db->select('*');
        $this->db->from('techics_users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('status_user', '1');
        $query = $this->db->get();
        $has = $query->num_rows();
        if ($has === 1) {
            $result = $query->row();
            return $result;
        } else {
            return FALSE;
        }
    }

    public function update($data, $id) {
        $model = $this->db->update('techics_users', $data, array('id'=> $id ));
        return $model;
    }

    public function get($id) {
        $model = $this->db->from('techics_users')->where('id', $id)->get()->row();
        return $model;
    }
}
