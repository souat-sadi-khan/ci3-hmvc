<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Auto_logout {
    function __construct()  
    {
        $this->CI =& get_instance();
        $this->CI->load->database();
        $this->CI->load->library('session');

        if(isset($_SESSION['id']) && $_SESSION['id'] != '' && $this->CI->uri->segment(1) != 'verify') {
            $userId = $_SESSION['id'];
            $user = $this->CI->db->from('users')->where('id', $userId)->get()->row();
            if(!$user) {
                $this->CI->session->unset_userdata('username');
                $this->CI->session->unset_userdata('usertype');
                $this->CI->session->unset_userdata('id');
                $this->CI->session->unset_userdata('is_logged_in');

                redirect('/administrator', 'refresh');
            }

            if(time() - $user->last_activity > 7200) { 
                echo"<script>alert('120 Minutes over!');</script>";

                $userId = $_SESSION['id'];

                $updateData = [
                    'last_activity' => null,
                    'is_online' => 0
                ];

                $this->CI->db->update('users',$updateData,array('id' => $userId));
                
                $this->CI->session->unset_userdata('username');
                $this->CI->session->unset_userdata('usertype');
                $this->CI->session->unset_userdata('id');
                $this->CI->session->unset_userdata('is_logged_in');

                redirect('/administrator', 'refresh');
            } else {

                $updateData = [
                    'last_activity' => time(),
                    'is_online' => 1
                ];
    
                $this->CI->db->update('users',$updateData,array('id' => $userId));
            }
        }
    }
}