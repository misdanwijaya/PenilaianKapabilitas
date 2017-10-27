<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_model
{
    function __construct()
    {
         date_default_timezone_set("Asia/Jakarta");
         parent::__construct();
    }
    
    function check_login($email,$password_encrypt)
    {
        $db = $this->load->database('default',TRUE);
        $where_email = array('email' => $email, 'password' => $password_encrypt);
        
        $db->where($where_email);
        $query = $db->get('admin',1);
        
        return $query;
    }

    function get_Sub_unit($tbl)
    {
        $db = $this->load->database('default',TRUE);
        $query = $this->db->get($tbl);
        return $query;
    }

    function insertData($table,$arr)
    {       
        $query = $this->db->insert($table,$arr);
        return $query;
    }

    function getData($table,$arr)
    {       
        $query = $this->db->get_where($table,$arr);
        return $query;
    }
}