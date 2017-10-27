<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kuesioner extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('kuesioner_model','model');
    }
    
    /* METHOD "READ"
     * berfungsi untuk membaca query dari database dengan system pagination
     */
    function index()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['kuesioner'] = core::getAll("kuesioner","default");
        //$data['kuesioner'] = core::selectWhere('kuesioner','default',array('id_subunit'=>7));
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
        $this->form_validation->set_rules('pertanyaan','Pertanyaan','required|xss_clean|htmlspecialchars|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['unit'] = $this->session->userdata('id_subunit');

            $data['kuesioner'] = core::getAll('kuesioner','default');
            $data['persepsi'] = core::getAll('nilai','default');
            $data['area_proses_spesifik'] = core::getAll('area_proses_spesifik','default');
            $data['sub_unit'] = core::getAll('sub_unit','default'); 
            $data['include']  = $this->load->view('/create/include','',TRUE);
            $data['content']  = $this->load->view('/create/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::insert('kuesioner','default',array(
                'id_area_proses_spesifik'  => $this->input->post('single2'),
                'id_subunit'  => $this->input->post('single'),
                'pertanyaan'  => $this->input->post('pertanyaan'),
                'A'  => "Tidak Ada",
                'B'  => "Ada tetapi tidak diimplementasikan",
                'C'  => "Sebagian diimplementasikan",
                'D'  => "Sebagian besar diimplementasikan",
                'E'  => "Selalu diimplementasikan",
            ));
            
            $this->session->set_flashdata('success','success');
            redirect('kuesioner/create');
        }
    }

    /*
    METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
     function update($id = '')
     {
         $this->load->library('form_validation');
         $this->form_validation->CI =& $this;
         $this->form_validation->set_error_delimiters(' <ul class="help-block"><li class="text-error">', '</li></ul> ');  
         
         $this->form_validation->set_rules('pertanyaan','Pertanyaan','required|xss_clean|htmlspecialchars|trim');
         $this->form_validation->set_rules('single2','Single2','required|xss_clean|htmlspecialchars|trim');
         $this->form_validation->set_rules('single','Single','required|xss_clean|htmlspecialchars|trim');

         if ($this->form_validation->run() == FALSE)
         {
             $data['level'] = $this->session->userdata('level_id');
             $data['email'] = $this->session->userdata('email');
             $data['unit'] = $this->session->userdata('id_subunit');

             $data['sub_unit'] = core::getAll('sub_unit','default');
             $data['area_proses_spesifik'] = core::getAll('area_proses_spesifik','default');
             $data['kuesioner'] = core::getAll('kuesioner','default');
             $data['include']  = $this->load->view('/update/include','',TRUE);
             $data['content']  = $this->load->view('/update/content',$data,TRUE);
             $this->load->view('/admin/main',$data);
         }else{
             core::update('kuesioner','default',array(
                'id_area_proses_spesifik'  => $this->input->post('single'),
                'id_subunit'  => $this->input->post('single2'),
                'pertanyaan'  => $this->input->post('pertanyaan'),
                'A'  => "Tidak Ada",
                'B'  => "Ada tetapi tidak diimplementasikan",
                'C'  => "Sebagian diimplementasikan",
                'D'  => "Sebagian besar diimplementasikan",
                'E'  => "Selalu diimplementasikan",
             ), $id);
             
             core::update_where('admin','default',array(
                 'email'  => $this->input->post('email'),
                 'password' => sha1(md5(111)),
                 'created' => date("Y-m-d h:i:s"),
                 'level_id' => 2,
             ),'email',$email);
             
             $this->session->set_flashdata('success','success');
             redirect('kuesioner/update/'.$id);
         }
     }
    
    /*
    METHOD "DELETE"
     * berfungsi untuk menghapus data dari database*/
     
    function delete($id = '')
    {        
         $data = core::getWhere('kuesioner','default',array(
            'id'=>$id,
        ));
        foreach($data->result() as $key){
            $email = $key->email;
        }
        
        core::delete('admin','default','email',$email);
        core::delete('kuesioner','default','id',$id);
        $this->session->set_flashdata('success','success');
        redirect('kuesioner');
    }

    //untuk jadwal survei kuesioner
    function submited()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $data['jadwal']  = core::getAll("jadwal","default");
        $data['include'] = $this->load->view('/read/include','',TRUE);
        $data['content'] = $this->load->view('/read/submited',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    //mencatat yang melakukan survei
    function insertSurvey()
    {
        if($this->session->userdata('email') != ""){
            $tanggal  = $this->uri->segment(3);
            $email    = $this->session->userdata('email');
            $_username= core::getWhere("responden","default",array("email"=>$email))->result();
            foreach ($_username as $key) {
                $username = $key->nama_responden;
            }
            $_tanggal = core::getWhere("jadwal","default",array("tanggal"=>$tanggal));
            foreach ($_tanggal->result() as $key) {
                $id_jadwal =$key->id; 
            }
            $insert = core::insert("survey","default",array(
                "id_jadwal"=>$id_jadwal,
                "nama_responden"=>$username,
                "email"=>$email,
            ));
            // $this->isiKuesioner();
            redirect("kuesioner/loadKuesioner");
        }else{
            
        }
    }

    //mengambil data soal
    function loadKuesioner()
    {
        $email = $this->session->userdata('email');
        $unit = $this->session->userdata('id_subunit');
        
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');
        
        $data['query'] = core::getMax("survey","default",$email);
        foreach ($data['query']->result() as $key) {
            $data['id_max'] =  $key->id;
        }
        if($this->uri->segment(3) == "loadKuesioner")
        {
           
        }
        else{
            $per_page = 10;
            $segment  = 3;
            $url      = 'kuesioner/loadKuesioner';
        } 
        //$data['kuesioner'] = core::selectWhere('kuesioner','default',array('id_subunit'=>7));  
        $data['kuesioner'] = core::get_all_pagination_where("kuesioner","default",$per_page,$segment,$url,array('id_subunit'=>$unit));
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/loadKuesioner',$data,TRUE);
        $this->load->view("admin/main",$data);                
    }


    function simpanJawaban()
    {
        $data = $_POST['jsonObj'];
        if($data['tipe'] == "A"){
            $skor = 0;
        }
        else if($data['tipe'] == "B"){
            $skor = 1;
        }
        else if($data['tipe'] == "C"){
            $skor = 2;
        }
        else if($data['tipe'] == "D"){
            $skor = 3;
        }
        else{
            $skor = 4;
        }

        $list = core::getWhere("detail_survey","default",array(
            'id_survey'=>$data['id_survey'],
            'nomor_soal'=>$data['nomor_soal']
        ));
        foreach ($list->result() as $key) {
            $id =  $key->id;
         } 
        if($list->num_rows() > 0 )
        {
           // echo "update";
            core::update_where("detail_survey","default", array(
                'id_survey' =>$data['id_survey'],
                'spesific_goal' =>$data['spesific_goal'],
                'nomor_soal'=>$data['nomor_soal'],
                'jawaban'   =>$data['jawaban'],
                'type'      =>$data['tipe'],
                'skor'      =>$skor
                ),  
                'id',$id,
                'nomor_soal',$data['nomor_soal'], 
                'id_survey',$data['id_survey']
                );
        }
        else{
           // echo "insert";
            core::insert("detail_survey","default",array(
                'id_survey' =>$data['id_survey'],
                'spesific_goal' =>$data['spesific_goal'],
                'nomor_soal'=>$data['nomor_soal'],
                'jawaban'   =>$data['jawaban'],
                'type'      =>$data['tipe'],
                'skor'      =>$skor
               ));
        }
    }
    
}