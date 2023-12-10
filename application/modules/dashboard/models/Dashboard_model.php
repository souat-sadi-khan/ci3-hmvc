<?php

class Dashboard_model extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function last_five() {
        $models = $this->db->from('legal_cms_user_controller')->order_by('id', 'DESC')->limit(5)->get()->result();
        return $models;
    }

    public function count_domain() {
        $count = $this->db->from('legal_cms_user_controller')->get()->result();
        return count($count);
    }
    
    public function count_user() {
        $count = $this->db->from('techics_users')->get()->result();
        return count($count);
    }
    
    public function get_user_data($id) {
        $model = $this->db->from('techics_users')->where('id', $id)->get()->row();
        return $model;
    }

    public function update($id, $data) {
        $model = $this->db->update('techics_users', $data, array('id' => $id));
        return $model;
    }
}