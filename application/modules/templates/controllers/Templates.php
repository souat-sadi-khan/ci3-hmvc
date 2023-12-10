<?php

class Templates extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Templates_model');
        $this->load->helper('url');
    }

    function login() {
        $this->load->view('login');
    }
    
    function verify() {
        $this->load->view('verify');
    }

    function admin($data) {
        if (!isset($data['view_module'])) {
            $data['view_module'] = $this->uri->segment(1);
        }

        $logged_in = $this->session->userdata('is_logged_in');
        if ($logged_in == 1) {
            $this->load->view('admin', $data);
        } else {
            redirect('administrator');
        }
    }

}
