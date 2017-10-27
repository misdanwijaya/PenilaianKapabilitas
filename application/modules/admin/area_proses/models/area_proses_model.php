<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Area_proses_model extends CI_model
{
     function __construct()
    {
        parent::__construct();
    }
    
    function insert_csv($data) {
        $this->db->insert('area_proses', $data);
    }
     // BUAT METHOD MODEL DI SINI
}