<?php
if (! defined('BASEPATH')) exit('No direct script access');

class Login_database extends CI_Model
{


    function __construct()
    {
        parent::__construct();
//        $this->load->driver('cache', array('adapter' => 'memcached'));
        $this->load->database();
    }

    function registration_insert($data) {
        $check = $this->db->where('username', $data['username'])->get('users')->result();
        $data['role'] = 'user';
        if (!count($check)) {
            $this->db->insert('users', $data);
            return true;
        } else {
            return false;
        }
    }

    function read_user_information($data) {
        $check = $this->db->where(array('username' => $data['username'], 'password' => $data['password']))->get('users')->result();

        if (count($check)) {
            return $check[0];
        } else {
            return false;
        }
    }

}
?>