<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Area_proses extends Admincore
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('area_proses','model');
        $this->load->library('csvimport');
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
        $this->form_validation->set_rules('nama','Nama','required|xss_clean|htmlspecialchars|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['area_proses'] = core::getAll('area_proses','default'); 
            $data['include']  = $this->load->view('/create/include','',TRUE);
            $data['content']  = $this->load->view('/create/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::insert('area_proses','default',array(
                'area_proses'  => $this->input->post('nama'),
            ));
            
            $this->session->set_flashdata('success','success');
            redirect('area_proses/create');
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
        
        $this->form_validation->set_rules('nama','Nama','required|xss_clean|htmlspecialchars|trim');
        //$this->form_validation->set_rules('alamat','Alamat','required|xss_clean|htmlspecialchars|trim');
        //$this->form_validation->set_rules('phone','Phone','required|xss_clean|htmlspecialchars|trim');
        //$this->form_validation->set_rules('koordinator','Koordinator','required|xss_clean|htmlspecialchars|trim');
        
        if ($this->form_validation->run() == FALSE)
        {
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['area_proses'] = core::getAll('area_proses','default'); 
            $data['include']  = $this->load->view('/update/include','',TRUE);
            $data['content']  = $this->load->view('/update/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::update('area_proses','default',array(
                'area_proses'  => $this->input->post('nama'),
                //'alamat' => $this->input->post('alamat'),
                //'telepon' => $this->input->post('phone'),
                //'koordinator' => $this->input->post('koordinator'),
                //'mesin_peralatan' => $this->input->post('mesin_peralatan'),
                //'potensi_ikm' => $this->input->post('potensi_ikm'),
                //'email' => $this->input->post('email'),
            ), $id);
            
            /*core::update_where('admin','default',array(
                'email'  => $this->input->post('email'),
                'password' => sha1(md5(111)),
                'created' => date("Y-m-d h:i:s"),
                'level_id' => 2,
            ),'email',$email);*/
            
            $this->session->set_flashdata('success','success');
            redirect('area_proses/update/'.$id);
        }
    }
    
     // ACTIONS METHOD
    // method-method yang berfungsi hanya untuk sebuah actions/tidak ada view
    
    /* METHOD "DELETE"
     * berfungsi untuk menghapus data dari database
     */
    function delete($id = '')
    {        
         $data = core::getWhere('area_proses','default',array(
            'id'=>$id,
        ));
        /*
        foreach($data->result() as $key){
            $email = $key->email;
        }
        
        core::delete('admin','default','email',$email);*/
        core::delete('area_proses','default','id',$id);
        $this->session->set_flashdata('success','success');
        redirect('area_proses');
    }

    //untuk hitung avg kapabilitas Process Area
    function hitung($id = '')
    {   
        $hitung = core::Average('area_proses_spesifik','default','rataan',array('id_area_proses'=>$id));
        //echo $hitung;

        core::update('area_proses','default',array(
            'avg'  => $hitung,
        ), $id);

        $this->session->set_flashdata('success','success');
        redirect('area_proses');
    }

    function download(){
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "download.csv";
        $query = "SELECT * FROM area_proses"; //USE HERE YOUR QUERY
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);

    }

    function upload() {
        
        $this->db->empty_table('area_proses'); 
                
        $data['error'] = '';    //initialize image upload error array to empty
        
        $config['upload_path'] = './coba_upload/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';
        
        $this->load->library('upload', $config);

        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/upload',$data,TRUE);
        $this->load->view("admin/main",$data);
        
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
            //$this->load->view('/read/upload', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './coba_upload/'.$file_data['file_name'];

            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'id'=>$row['id'],
                        'area_proses'=>$row['area_proses'],
                        'sg1'=>$row['sg1'],
                        'sg2'=>$row['sg2'],
                        'sg3'=>$row['sg3'],
                        'avg'=>$row['avg'],
                        'fuzzy'=>$row['fuzzy'],
                    );
                        $this->model->insert_csv($insert_data);
                    }
                    $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                    redirect(base_url().'area_proses');
                        //echo "<pre>"; print_r($insert_data);
            } else
                $data['include'] =   $this->load->view('/read/include','',TRUE);
                $data['content'] =   $this->load->view('/read/upload',$data,TRUE);
                $this->load->view("admin/main",$data);
        }
        
                    
    } 
                
}