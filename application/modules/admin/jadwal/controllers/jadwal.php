<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model','model');
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['jadwal'] = core::getAll("jadwal","default");
        $data['survey'] = core::getAll("survey","default");
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
    function lihatJadwal()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['jadwal'] = core::getAll("jadwal","default");
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/lihatJadwal',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    function pemberitahuan($id)
    {
        core::update("jadwal","default", array(
            'status'=>1
            ),$id);
        redirect("jadwal/lihatJadwal");
    }
    
        
     /* METHOD "SEARCH"*/
    function search()
    {
        $data['include'] =   $this->load->view('/search/include','',TRUE);
        $data['content'] =   $this->load->view('/search/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }   
    
    function create()
    {
        $this->load->library('session');
       if(isset($_REQUEST['jsonObj']))
       {
            $data = $this->input->post('jsonObj');
            foreach ($data as $key) {
            // print_r($key);
            // variable untuk menampung data Pengguna
            core::insert('jadwal','default',array(
                'tanggal' => date("Y-m-d",strtotime($key['tanggal'])),
                'start_time' => $key['start_time'],
                'doe_time' => $key['doe_time'],
                'durasi' => $key['durasi'],
                'status' => 0,
            ));
            }
       }
       else{
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['unit'] = $this->session->userdata('id_subunit');

            $data['include']  = $this->load->view('/create/include','',TRUE);
            $data['content']  = $this->load->view('/create/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
       }
    }

    /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function update($id = '')
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
        
        if(isset($_REQUEST['send']))
        {
            core::update('jadwal','default',array(
                'tanggal' => date("Y-m-d",strtotime($_REQUEST['tanggal'])),
                'start_time' => $_REQUEST['start_time'],
                'doe_time' => $_REQUEST['doe_time'],
                'durasi' => $_REQUEST['durasi'],
                'status' => 0,
            ),$id);
            $this->session->set_flashdata('success','success');
            redirect('jadwal/update/'.$id);
        }
       else{
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['unit'] = $this->session->userdata('id_subunit');

            $data['kuesioner'] = core::getAll('kuesioner','default'); 
            $data['include'] =   $this->load->view('/update/include','',TRUE);
            $data['content'] =   $this->load->view('/update/content',$data,TRUE);
            $this->load->view("admin/main",$data);
       }
    }
    
    function detail($id = '')
    {
        $data['include'] =   $this->load->view('/detail/include','',TRUE);
        $data['content'] =   $this->load->view('/detail/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    // ACTIONS METHOD
    // method-method yang berfungsi hanya untuk sebuah actions/tidak ada view
    
    /* METHOD "DELETE"
     * berfungsi untuk menghapus data dari database
     */
    function delete($id = '')
    {
        core::delete('jadwal','default','id',$id);     
        $this->session->set_flashdata('success','success');
        redirect('jadwal');
    }

    function viewCalendar()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');
        
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/calender',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    function log_responden()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['survey'] = core::getAll("log_responden","default");
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/log_responden',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
}