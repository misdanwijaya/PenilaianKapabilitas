<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_model
{
     function __construct()
    {
        parent::__construct();
    }

     // BUAT METHOD MODEL DI SINI
    function getCount($tbl)
    {
    	$db = $this->load->database('default',TRUE);
    	$query = $this->db->count($tbl);
        return $query;    
    }
}