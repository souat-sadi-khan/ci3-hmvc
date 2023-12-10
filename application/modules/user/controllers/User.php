<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('User_model');
    }

    public function index() 
    {
        $data['models'] = $this->User_model->all();
        $data['view_module'] = "user";
        $data['view_file'] = "index";
        $data['modal_dialog'] = "modal-lg";
        $this->templates->admin($data);
    }

    public function create() 
    {
        $this->load->view('create');
    } 

    public function store() 
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[5]|max_length[12]'); 
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[5]|max_length[12]'); 
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 
        $this->form_validation->set_rules(
            'username', 'Username',
            'required|min_length[5]|max_length[12]|is_unique[techics_users.username]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[12]'); 
        $this->form_validation->set_rules('retype_password', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) { 
            echo json_encode(['status' => 0, 'message' => validation_errors()]);
            exit();
        } else {

            $data = [
                'fname'     => $this->input->post('fname'),
                'lname'     => $this->input->post('lname'),
                'email'     => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'dob'       => date('Y-m-d', strtotime($this->input->post('dob'))),
                'password'  => $this->encrypt($this->input->post('password'))
            ];
    
            $result = $this->User_model->create($data);

            if($result) {
                echo json_encode(['status' => 1, 'message' => 'User Created Successfully', 'load' => 1]);
            } else {
                echo json_encode(['status' => 0, 'message' => 'Something is wrong. Please contact to the developer']);
            }
            exit();

        }
    }

    public function edit($id) 
    {
        $data['model'] = $this->User_model->first($id);
        $this->load->view('edit', $data);
    }
    
    public function editUsername($id) 
    {
        $data['model'] = $this->User_model->first($id);
        $this->load->view('edit_username', $data);
    }
    
    public function editPassword($id) 
    {
        $data['model'] = $this->User_model->first($id);
        $this->load->view('edit_password', $data);
    }

    public function update($id) 
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[5]|max_length[12]'); 
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[5]|max_length[12]'); 
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email'); 

        if ($this->form_validation->run() == FALSE) { 
            echo json_encode(['status' => 0, 'message' => validation_errors()]);
            exit();
        } else {
            $data = [
                'fname'     => $this->input->post('fname'),
                'lname'     => $this->input->post('lname'),
                'email'     => $this->input->post('email'),
                'dob'       => $this->input->post('dob')
            ];
    
            $result = $this->User_model->update($data, $id);
            if($result) {
                echo json_encode(['status' => 1, 'message' => 'User Information Updated', 'load' => true]);
            } else {
                echo json_encode(['status' => 0, 'message' => 'Something is wrong. Please contact to the developer']);
            }
            exit();
        }
    }
    
    public function updateUsername($id) 
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules(
            'old_username', 'Old Username',
            'required|min_length[5]|max_length[12]|trim',
            array(
                'required'      => 'You have not provided %s.',
            )
        );

        $this->form_validation->set_rules(
            'new_username', 'New Username',
            'required|min_length[5]|max_length[12]|trim',
            array(
                'required'      => 'You have not provided %s.',
            )
        );

        if ($this->form_validation->run() == FALSE) { 
            echo json_encode(['status' => 0, 'message' => validation_errors()]);
            exit();
        } else {
            
            $oldUsername = $this->input->post('old_username');
            $newUsername = $this->input->post('new_username');

            # get user model if not show error
            $model = $this->User_model->first($id);
            if(!$model) {
                echo json_encode(['status' => 0, 'message' => 'Something is wrong. Please contact to the developer']);
                exit();
            }
    
            # check old username is correct
            if($model->username != $oldUsername) {
                echo json_encode(['status' => 0, 'message' => 'Sorry. Old username is not matched.']);
                exit();
            }

            # check new username is already exist in database
            $usernameExists = $this->User_model->checkUsername($newUsername, $id);
            if($usernameExists) {
                echo json_encode(['status' => 0, 'message' => 'Sorry. Username already exist. Try another one.']);
                exit();
            }

            # save new username
            $data = [
                'username' => $newUsername
            ];
            $result = $this->User_model->update($data, $id);
            if($result) {
                echo json_encode(['status' => 1, 'message' => 'User Information Updated', 'load' => true]);
            } else {
                echo json_encode(['status' => 0, 'message' => 'Something is wrong. Please contact to the developer']);
            }
            exit();
        }
    }
    
    public function updatePassword($id) 
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required'); 
        $this->form_validation->set_rules('new_password', 'Password', 'trim|required|min_length[8]|max_length[12]'); 
        $this->form_validation->set_rules('retype_password', 'Password Confirmation', 'required|matches[new_password]');

        if ($this->form_validation->run() == FALSE) { 
            echo json_encode(['status' => 0, 'message' => validation_errors()]);
            exit();
        } else {
            
            # get the user model
            $model = $this->User_model->first($id);
            if(!$model) {
                echo json_encode(['status' => 0, 'message' => 'Sorry. User not found']);
                exit();
            }

            $oldPassword = $this->input->post('old_password');
            $newPassword = $this->input->post('new_password');
            $retypePassword = $this->input->post('retype_password');
            
            # check old password is right
            if($oldPassword != $this->decrypt($model->password)) {
                echo json_encode(['status' => 0, 'message' => 'Sorry. Old Password didn\'t match']);
                exit();
            }

            # save new username
            $data = [
                'password' => $this->encrypt($newPassword)
            ];
            $result = $this->User_model->update($data, $id);
            
            if($result) {
                echo json_encode(['status' => 1, 'message' => 'Password changed successfully', 'load' => true]);
            } else {
                echo json_encode(['status' => 0, 'message' => 'Something is wrong. Please contact to the developer']);
            }
            exit();
        }
    }

    public function delete($id) 
    {
        $result = $this->User_model->delete($id);
        if($result) {
            echo json_encode(['status' => 1, 'message' => 'User information deleted', 'load' => 1]);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Something is wrong. Please contact to the developer']);
        }
    }

    public function trial_access_demo() 
    {
        $data['models'] = $this->User_model->all();
        $data['view_module'] = "user";
        $data['view_file'] = "trial_access_demo";
        $this->templates->admin($data);
    }

    private function randomPassword() 
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890$%';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 12; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    private function encrypt($string, $key=5) 
    {
        $result = '';
        for($i=0, $k= strlen($string); $i<$k; $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)+ord($keychar));
            $result .= $char;
        }
        return base64_encode($result);
    }
    
    private function decrypt($string, $key=5) 
    {
        $result = '';
        $string = base64_decode($string);
        for($i=0,$k=strlen($string); $i< $k ; $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)-ord($keychar));
            $result.=$char;
        }
        return $result;
    }
}