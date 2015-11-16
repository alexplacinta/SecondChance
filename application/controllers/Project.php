<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
        $this->load->helper('url');

    }

    function index() {
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
        $this->load->view('projects', $data);
        $this->load->view('footer');
    }

    public function id($id, $type = 'default')
    {

        $this->load->database();
        $project = $this->db->where('projectID', $id)->get('project')->row();
        $project->collected_money = $this->db->query("SELECT sum(value) as value FROM donation where projectID=".$project->projectID)->row()->value;
        $project->assets_value = $this->db->query("SELECT sum(p.price) as value FROM donation d INNER JOIN product p ON p.productID = d.productID where d.buyerID is NULL and projectID=".$project->projectID)->row()->value;
//        var_dump($project->assets_value); die;
        $project->products = $this->db->query("SELECT * FROM product p, donation d WHERE p.productID = d.productID AND d.buyerID is NULL AND d.projectID =".$project->projectID)->result();
        $message = '';
        if ($type == 'success') $message = 'Thanks for donation:)';
        $data = array(
            'project' => $project,
            'message' => $message
        );

        $this->load->view('header');
        $this->load->view('project_description', $data);
        $this->load->view('footer');



    }

    function create() {
        if (isset($this->session->userdata['current_user'])) {
            if ($this->session->userdata['current_user']['role'] == 'user') {
                $this->load->view('header');
                $this->load->view('create_project');
                $this->load->view('footer');
            } else {
                echo 'Permision denied';
            }

        } else {
            echo 'Permision denied';
        }
    }

    function donate($value, $projectID) {
        if (isset($this->session->userdata['current_user'])) {
            if ($this->session->userdata['current_user']['role'] == 'user') {
                $this->load->database();
                $this->db->insert('donation', array(
                    'projectID' => $projectID,
                    'value' => $value
                ));
                redirect('http://startup.dev/project/id/'.$projectID.'/success');
            } else {
                echo 'Permision denied';
            }

        } else {
            echo 'Permision denied';
        }

    }
}
