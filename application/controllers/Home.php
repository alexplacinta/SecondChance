<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

//        $this->load->model('project_model');


    }

    public function index()
    {
//        if (isset($this->session->userdata['current_user'])) {
//            $this->load->view('header');
//            if ($this->session->userdata['current_user']['role'] == 'admin') {
//                $this->load->view('admin_main');
//            } else {
//                $this->load->view('user_main');
//            }
//            $this->load->view('footer');
//        } else {

            $this->load->database();
            $projects = $this->db->limit(8)->get('project')->result();

//            $collected_money = $this->db->query("SELECT sum(value) as value FROM donation where value!='' and projectID=1")->row()->value;
            foreach($projects as $key => $project) {
                $projects[$key]->collected_money = $this->db->query("SELECT sum(value) as value FROM donation where projectID=".$project->projectID)->row()->value;
//                var_dump($projects[$key]); die;
                $projects[$key]->assets_value = $this->db->query("SELECT sum(p.price) as value FROM donation d INNER JOIN product p ON p.productID = d.productID where d.buyerID is NULL and projectID=".$project->projectID)->row()->value;
            }
            $data = array(
                'projects' => $projects

            );

            $this->load->view('header');
            $this->load->view('main_page', $data);
            $this->load->view('footer');
//        }


    }
}
