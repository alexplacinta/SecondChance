<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

    }

    public function index()
    {
        $data = array(
            'message' => ''
        );
        if ($this->input->post()) {

                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name')
                );
                $result = $this->login_database->registration_insert($data);
                if ($result == TRUE) {
                    $data['message'] = 'Registration Successfully !';
                } else {
                    $data['message'] = 'Username already exist!';
                }

        }

        $this->load->view('header');
        $this->load->view('register', $data);
        $this->load->view('footer');
    }

}
