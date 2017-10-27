<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sub_unit extends Admincore
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

        $data['sub_unit'] = core::getAll("sub_unit","default");
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
        //$this->form_validation->set_rules('alamat','Alamat','required|xss_clean|htmlspecialchars|trim');
        //$this->form_validation->set_rules('phone','Phone','required|xss_clean|htmlspecialchars|trim');
        //$this->form_validation->set_rules('koordinator','Koordinator','required|xss_clean|htmlspecialchars|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['level'] = $this->session->userdata('level_id');
            $data['email'] = $this->session->userdata('email');
            $data['unit'] = $this->session->userdata('id_subunit');

            $data['sub_unit'] = core::getAll('sub_unit','default'); 
            $data['include']  = $this->load->view('/create/include','',TRUE);
            $data['content']  = $this->load->view('/create/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::insert('sub_unit','default',array(
                'sub_unit'  => $this->input->post('nama'),
                //'alamat' => $this->input->post('alamat'),
                //'telepon' => $this->input->post('phone'),
                //'koordinator' => $this->input->post('koordinator'),
                //'mesin_peralatan' => $this->input->post('mesin_peralatan'),
                //'potensi_ikm' => $this->input->post('potensi_ikm'),
                //'email' => $this->input->post('email'),
            ));
            
            $this->session->set_flashdata('success','success');
            redirect('sub_unit/create');
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
            $data['unit'] = $this->session->userdata('id_subunit');

            $data['sub_unit'] = core::getAll('sub_unit','default'); 
            $data['include']  = $this->load->view('/update/include','',TRUE);
            $data['content']  = $this->load->view('/update/content',$data,TRUE);
            $this->load->view('/admin/main',$data);
        }else{
            core::update('sub_unit','default',array(
                'sub_unit'  => $this->input->post('nama'),
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
            redirect('sub_unit/update/'.$id);
        }
    }
    
     // ACTIONS METHOD
    // method-method yang berfungsi hanya untuk sebuah actions/tidak ada view
    
    /* METHOD "DELETE"
     * berfungsi untuk menghapus data dari database
     */
    function delete($id = '')
    {        
         $data = core::getWhere('sub_unit','default',array(
            'id'=>$id,
        ));
        
        /*foreach($data->result() as $key){
            $email = $key->email;
        }*/
        
        //core::delete('admin','default','email',$email);
        core::delete('sub_unit','default','id',$id);
        $this->session->set_flashdata('success','success');
        redirect('sub_unit');
    }
    
}