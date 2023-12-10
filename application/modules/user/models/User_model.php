<?php

class User_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    
    public function all() {
        $model = $this->db->from('techics_users')->order_by('id', 'DESC')->get()->result();
        return $model;
    }

    public function create($data) {
        $model = $this->db->insert('techics_users', $data);
        return $model;
    }

    public function first($id) {
        $model = $this->db->from('techics_users')->where('id', $id)->get()->row();
        return $model;
    }

    public function update($data, $id) {
        $model = $this->db->update('techics_users', $data, array('id'=> $id ));
        return $model;
    }

    public function delete($id) {
        $model = $this->db->delete('techics_users', array('id' => $id));
        return $model;
    }

    public function checkUsername($username, $id) {
        $model = $this->db->from('techics_users')->where('username', $username)->where('id !=', $id)->get()->row();
        return $model;
    }
}