<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templates_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_product() {
        $query = "SELECT * FROM `techics_product` LEFT JOIN `techics_supplier` ON techics_supplier.id = techics_product.supplier_id left JOIN `techics_product_category` ON techics_product_category.id = techics_product.category_id WHERE `product_quantity` <= `notify` AND `product_status`= 1";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function notification() {
        $query = "SELECT COUNT(*) as total FROM `techics_product` LEFT JOIN `techics_supplier` ON techics_supplier.id = techics_product.supplier_id left JOIN `techics_product_category` ON techics_product_category.id = techics_product.category_id WHERE `product_quantity` <= `notify` AND `product_status`= 1";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function check_notification() {
        $query = "SELECT * FROM `techics_payment` where `payment_check_pay_order_date`>`payment_notification_date` && `payment_notification_date`!= \"\"";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function get_user_p($id) {
        $this->db->select('*');
        $this->db->from('techics_users');
        $this->db->where('id', $id);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    

    //Tailor


    public function delivery_notification($date) {

        $this->db->select('COUNT(*) as total');
        $this->db->from('techics_order_invoice');
        $this->db->where('delivery_date', $date);
        $this->db->where('delivery_status', NULL);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function notification_details($date) {

        $this->db->select('*');
        $this->db->from('techics_order_invoice');
        $this->db->where('delivery_date', $date);
        $this->db->where('delivery_status', NULL);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    public function get_user_logo($id) {
        $this->db->select('*');
        $this->db->from('techics_users');
        $this->db->join('techics_employee','techics_employee.employee_id = techics_users.employee_id',"LEFT");
        $this->db->where('id', $id);
        $result = $this->db->get();
        return $result->result_array();
    }

    
     public function get_employee_id($id){
        $this->db->select("employee_id");
        $this->db->from('techics_users');
        $this->db->where('id', $id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->employee_id;
    }
    
     public function get_employee_name($employee_id){
        $this->db->select('employee_name');
        $this->db->from('techics_employee');
        $this->db->where('employee_id', $employee_id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->employee_name;
    }
    
    
  
}
