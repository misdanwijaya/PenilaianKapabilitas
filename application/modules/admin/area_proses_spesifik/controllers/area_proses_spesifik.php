<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Area_proses_spesifik extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('responden_model','model');
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['area_proses'] = core::getAll("area_proses","default");
        $data['area_proses_spesifik'] = core::getAll("area_proses_spesifik","default");
        $data['spesific_goal'] = core::getAll("spesific_goal","default");

        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    function home()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');
        
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/home',$data,TRUE);
        $this->load->view("admin/main",$data);
    }
    
    function create()
    {
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-alert">', '</p> ');

        $this->form_validation->set_rules('single2','Single2','required|xss_clean|htmlspecialchars|trim');
        $this->form_validation->set_rules('single','Single','required|xss_clean|htmlspecialchars|trim');
        $this->form_validation->set_rules('nama','Nama','required|xss_clean|htmlspecialchars|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['area_proses'] = core::getAll("area_proses","default");
            $data['area_proses_spesifik'] = core::getAll("area_proses_spesifik","default");
            $data['spesific_goal'] = core::getAll("spesific_goal","default");
            $data['include']  = $this->load->view('/create/include','',TRUE);
            $data['content']  = $this->load->view('/create/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::insert('area_proses_spesifik','default',array(
                'id_area_proses'  => $this->input->post('single2'),
                'id_spesific_goal'  => $this->input->post('single'),
                'nama'  => $this->input->post('nama'),
            ));
            
            $this->session->set_flashdata('success','success');
            redirect('area_proses_spesifik/create');
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
        
        $this->form_validation->set_rules('single2','Single2','required|xss_clean|htmlspecialchars|trim');
        $this->form_validation->set_rules('single','Single','required|xss_clean|htmlspecialchars|trim');
        $this->form_validation->set_rules('nama','Nama','required|xss_clean|htmlspecialchars|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['area_proses'] = core::getAll("area_proses","default");
            $data['area_proses_spesifik'] = core::getAll("area_proses_spesifik","default");
            $data['spesific_goal'] = core::getAll("spesific_goal","default");
            $data['include']  = $this->load->view('/update/include','',TRUE);
            $data['content']  = $this->load->view('/update/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::update('area_proses_spesifik','default',array(
                'id_area_proses'  => $this->input->post('single2'),
                'id_spesific_goal'  => $this->input->post('single'),
                'nama'  => $this->input->post('nama'),
            ), $id);
            
            core::update_where('admin','default',array(
                'email'  => $this->input->post('email'),
                'password' => sha1(md5(111)),
                'created' => date("Y-m-d h:i:s"),
                'level_id' => 2,
            ),'email',$email);
            
            $this->session->set_flashdata('success','success');
            redirect('area_proses_spesifik/update/'.$id);
        }
    }
    
     // ACTIONS METHOD
    // method-method yang berfungsi hanya untuk sebuah actions/tidak ada view
    
    /* METHOD "DELETE"
     * berfungsi untuk menghapus data dari database
     */
    function delete($id = '')
    {        
         $data = core::getWhere('area_proses_spesifik','default',array(
            'id'=>$id,
        ));
        foreach($data->result() as $key){
            $email = $key->email;
        }
        
        core::delete('admin','default','email',$email);
        core::delete('area_proses_spesifik','default','id',$id);
        $this->session->set_flashdata('success','success');
        redirect('area_proses_spesifik');
    }

    //untuk hitung detail
    function hitung($id = '')
    {   
        
        $hitung = core::Average('detail_survey','default','skor',array('spesific_goal'=>$id));
        //echo $hitung;

        core::update('area_proses_spesifik','default',array(
            'rataan'  => $hitung,
        ), $id);

        $data1 = core::selectWhereCollums('area_proses_spesifik','default','id_spesific_goal',array('id'=>$id));
        $data2 = core::selectWhereCollums('area_proses_spesifik','default','id_area_proses',array('id'=>$id));

        if($data1 == 35){
            core::update_where('area_proses','default',array(
                'sg1'  => $hitung
            ),'id',$data2);
        } elseif($data1 == 36){
            core::update_where('area_proses','default',array(
                'sg2'  => $hitung
            ),'id',$data2);
        }elseif($data1 == 37){
            core::update_where('area_proses','default',array(
                'sg3'  => $hitung
            ),'id',$data2);
        }

        $this->session->set_flashdata('success','success');
        redirect('area_proses_spesifik');
    }

    function cari($id = '')
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['area_proses'] = core::getAll("area_proses","default");
        $data['area_proses_spesifik'] = core::getWhere("area_proses_spesifik","default",array("id_area_proses"=>$id));
        $data['spesific_goal'] = core::getAll("spesific_goal","default");

        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    function detail($id = '')
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['area_proses'] = core::getAll("area_proses","default");
        $data['detail_sp'] = core::getWhere("detail_sp","default",array("spesific_goal"=>$id));
        $data['spesific_goal'] = core::getAll("spesific_goal","default");

        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/detail',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    
}