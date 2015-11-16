<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        // Load database
        $this->load->model('login_database');

        $this->load->helper('url');


    }

    public function index()
    {
        $data = array(
            'message' => ''
        );

        if ($this->input->post()) {

            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            $result = $this->login_database->read_user_information($data);
            if ($result != false) {
                $session_data = array(
                    'username' => $result->username,
                    'role' => $result->role,
                    'id' => $result->id
                );

                $this->session->set_userdata('current_user', $session_data);
                redirect('/home');
            } else {
                $data['message'] = 'Invalid Username or Password';

            }

        }

        $this->load->view('header');
        $this->load->view('login', $data);
        $this->load->view('footer');
    }

    public function logout() {

        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('current_user', $sess_array);

        redirect('/home');
    }
}
