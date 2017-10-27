<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Responden extends Admincore
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

        $data['responden'] = core::getAll("responden","default");
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/content',$data,TRUE);
        $this->load->view("admin/main",$data);
    }

    function listResponden()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');

        $query = core::getWhere("sub_unit","default",array('email'=>$data['email']));
        foreach ($query->result() as $key) {
            $id_subunit = $key->id;
        }
        $data['responden'] = core::getWhere("responden","default", array('id_subunit'=> $id_subunit));
        $data['include'] =   $this->load->view('/read/include','',TRUE);
        $data['content'] =   $this->load->view('/read/listResponden',$data,TRUE);
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
        
        $this->form_validation->set_rules('tempat_lahir','Tempat_lahir','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('birthday','Birthday','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('usia','Usia','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('alamat','Alamat','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('jenis_kelamin','Jenis_kelamin','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('single1','Single1','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('single2','Single2','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('email','Email','required|xss_clean|htmlspecialchars|trim');
        
        $this->form_validation->set_rules('password','Password','required|xss_clean|htmlspecialchars|trim');
        
        //$this->form_validation->set_rules('phone','Phone','required|xss_clean|htmlspecialchars|trim');
        
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
            $email = core::getWhere("responden","default",array(
                'email'=>$this->input->post('email'),
            ));
            if($email->num_rows() == 0){
                $pekerjaan = $this->input->post('hobbies');
                for($a=0;$a<count($pekerjaan);$a++)
                {
                    core::insert('responden','default',array(
                        'nama_responden'  => $this->input->post('nama'),
                        'tempat_lahir'    => $this->input->post('tempat_lahir'),
                        'tanggal_lahir'   => date("Y-m-d", strtotime($this->input->post('birthday'))),
                        'usia' => $this->input->post('usia'),
                        'alamat' => $this->input->post('alamat'),
                        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                        'pendidikan_terakhir' => $this->input->post('single1'),
                        'id_subunit' => $this->input->post("single2"),
                        'email' => $this->input->post("email"),
                        
                    ));
                }
                    // variable untuk menampung data Pengguna
                    core::insert('admin','default',array(
                        'email'    => $this->input->post('email'),
                        'password' => sha1(md5($this->input->post('password'))),
                        'created'  => date("Y-m-d h:i:s"),
                        'level_id' => 2,
                        'id_subunit' => $this->input->post("single2"),
                    ));

                    $this->session->set_flashdata('success','success');
                    redirect('responden/create'); 
            }else{
                    $this->session->set_flashdata('error','error');
                    redirect('responden/create');
            }
        }    
    }


    /* METHOD "UPDATE"
     * berfungsi untuk mengupdate data dari database
     */
    function update($id = '')
    {
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-alert">', '</p> ');
        $this->form_validation->set_rules('nama','Nama','required|xss_clean|htmlspecialchars|trim');
        $this->form_validation->set_rules('tempat_lahir','Tempat_lahir','required|xss_clean|htmlspecialchars|trim');
        
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
            // echo "string";
            $pekerjaan = $this->input->post('hobbies');
            for($a=0;$a<count($id);$a++){
                core::update_where('responden','default',array(
                    'nama_responden'  => $this->input->post('nama'),
                    'tempat_lahir'    => $this->input->post('tempat_lahir'),
                    'tanggal_lahir'   => date("Y-m-d", strtotime($this->input->post('birthday'))),
                    'usia' => $this->input->post('usia'),
                    'alamat' => $this->input->post('alamat'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'pendidikan_terakhir' => $this->input->post('single1'),
                    'id_subunit' => $this->input->post("single2"),
                    'email' => $this->input->post("email"),
            ), 'email',$this->input->post("email"));

            // // variable untuk menampung data Pengguna
                $id_r = $id+1;
                core::update_where('admin','default',array(
                    'email' => $this->input->post("email"),
                    'password' => sha1(md5($this->input->post("password"))),
                    'created' => date("Y-m-d h:i:s"),
                    'level_id' => 2,
                    'id_subunit' => $this->input->post("single2"),
                ), 'email',$this->input->post("email"));
            }    
            $this->session->set_flashdata('success','success');
            redirect('responden/update/'.$id); 
        }
    }

    // ACTIONS METHOD
    // method-method yang berfungsi hanya untuk sebuah actions/tidak ada view
    
    /* METHOD "DELETE"
     * berfungsi untuk menghapus data dari database
     */
    function delete($id = '')
    {
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-alert">', '</p> ');
        $data = core::getWhere('responden','default',array(
            'id'=>$id,
        ));
        foreach($data->result() as $key){
            $email = $key->email;
        }
        
        core::delete('admin','default','email',$email);
        core::delete('responden','default','id',$id);
     
        $this->session->set_flashdata('success','success');
        redirect('responden');
    }
    
}