<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
//            $this->load->view('user_main');
//            $this->load->view('footer');
//        } else {

            $this->load->database();
            $products = $this->db->limit(8)->get('product')->result();

//            $collected_money = $this->db->query("SELECT sum(value) as value FROM donation where value!='' and projectID=1")->row()->value;
//            foreach($products as $key => $product) {
//                $products[$key]->collected_money = $this->db->query("SELECT * as value FROM donation where projectID=".$product->projectID)->row()->value;
//
//                $products[$key]->assets_value = $this->db->query("SELECT sum(p.price) as value FROM donation d INNER JOIN product p ON p.productID = d.productID where d.buyerID is NULL and projectID=".$project->projectID)->row()->value;
//            }
            $data = array(
                'products' => $products

            );

            $this->load->view('header');
            $this->load->view('products', $data);
            $this->load->view('footer');
//        }


    }

    public function id($id, $type = 'default')
    {

        $this->load->database();
        $product = $this->db->where('productID', $id)->get('product')->row();
        $message = '';
        $data = array(
            'product' => $product,
            'message' => $message
        );

        $this->load->view('header');
        $this->load->view('product', $data);
        $this->load->view('footer');



    }
}
