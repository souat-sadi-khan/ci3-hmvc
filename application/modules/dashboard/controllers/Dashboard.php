<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Dashboard_model');
    }

    public function index() 
    {
        $data['domain_count'] = $this->Dashboard_model->count_domain();
        $data['user_count'] = $this->Dashboard_model->count_user();
        $data['domains'] = $this->Dashboard_model->last_five();
        
        $data['view_file'] = "dashboard";
        $this->templates->admin($data);
    }

    public function profile() 
    {
        $user_id = $this->session->userdata("id");
        $user = $this->Dashboard_model->get_user_data($user_id);
        
        $data['user'] = $user;
        $data['view_module'] = 'dashboard';
        $data['view_file'] = 'profile';
        $this->templates->admin($data);
    }

    public function update_profile() 
    {
        $data = [
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'dob'   => date('Y-m-d', strtotime($this->input->post('fname')))
        ];

        if(isset($_FILES['photo']) && $_FILES['photo']['name'] != '') {
            $file_name = $_FILES['photo']['name']; 
            $exp_file_name = explode('.',$file_name);
            $file_ext = $exp_file_name[1];
            $photo = rand(1000, 1000000). '.' . $file_ext;
            $photo_path = "uploads/profiles/". $photo;
            move_uploaded_file($_FILES["photo"]["tmp_name"], $photo_path);

            $user = $this->Dashboard_model->get_user_data($this->session->userdata('id'));
            if($user): 
                if($user->photo != ''): 
                    if(file_exists($user->photo)): 
                        unlink($user->photo);
                    endif;
                endif;
            endif;

            $data['photo'] = $photo_path;
        }

        $result = $this->Dashboard_model->update($this->session->userdata['id'], $data);
        if($result) {
            echo json_encode(['status' => 1, 'message' => 'Data Updated', 'load' => 1]);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Something is wrong. Contact to the developer']);
        }
        exit();
    }

    public function tiny_upload()
    {
        reset($_FILES);
        $temp = current($_FILES);

        if (is_uploaded_file($temp['tmp_name'])) {
            if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
                header("HTTP/1.1 400 Invalid file name,Bad request");
                return;
            }
            
            // Validating File extensions
            if (! in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array(
                "gif",
                "jpg",
                "png"
            ))) {
                header("HTTP/1.1 400 Not an Image");
                return;
            }
            
            $fileName = "uploads/editor-image/" . $temp['name'];
            move_uploaded_file($temp['tmp_name'], $fileName);
            
            // Return JSON response with the uploaded file path.
            echo json_encode(array(
                'file_path' => $fileName
            ));
        }
    }
}