<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model','model');
    }
  
    public function index()
    {        
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-danger text-center">*', '</p>');
        $this->form_validation->set_rules('username_email', 'Username', 'required|xss_clean|trim|htmlspecialchars');
        $this->form_validation->set_rules('passwords', 'Password', 'required|xss_clean|trim|htmlspecialchars');
            
        if ($this->form_validation->run() == FALSE)
	    {
            $data['sub_unit'] = $this->model->get_sub_unit("sub_unit");  
            $this->load->view('content',$data);
	    }
        else{   
        
            if($this->check_login() == TRUE){
                // echo "<script>alert('login berhasil')</script>";
                $this->home();
            }
            else{
              $this->session->set_flashdata('login_error','error message');
              redirect('login');
            }
        }    
    }

    public function home()
    {
        $data['level'] = $this->session->userdata('level_id');
        $data['email'] = $this->session->userdata('email');
        $data['unit'] = $this->session->userdata('id_subunit');
        
        if($data['level'] == 1){
            redirect('admin');
        }
        else if($data['level'] == 2){
            redirect('kuesioner/submited'); 
        }
        /*else{
             redirect('sub_unit/home');
        }*/
    }
    
    public function daftar()
    {
        // echo "string";
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->form_validation->set_error_delimiters('<p class="text-alert">', '</p> ');
        $email = $this->model->getData("responden",array(
                'email'=>$this->input->post('email')
        ));
        if($email->num_rows() == 0){
            // echo "insert";
            $pekerjaan = $this->input->post('hobbies');
            for($a=0;$a<count($pekerjaan);$a++)
            {
                $this->model->insertData('responden',array(
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
                $this->model->insertData('admin',array(
                    // 'username' => $this->input->post('nama'),
                    'email'    => $this->input->post('email'),
                    'password' => sha1(md5($this->input->post('password'))),
                    'created'  => date("Y-m-d h:i:s"),
                    'level_id' => 2,
                    'id_subunit' => $this->input->post("single2"),
                ));

                $this->session->set_flashdata('success','success');
                redirect('login'); 
        }else{
                $this->session->set_flashdata('error','error');
                redirect('login'); 

        }
    }

    public function check_login()
    {
		$email    = $this->input->post('username_email');
        $password = $this->input->post('passwords');
		$password_encrypt = sha1(md5($password));
        
        $query = $this->model->check_login($email,$password_encrypt);
        if( $query->num_rows() > 0 )
        {
		    $row = $query->row(1);
		    $data = array(
		      'email'           => $row->email,
              'level_id'        => $row->level_id,
              'id_subunit'      => $row->id_subunit,
		    );
            $this->session->set_userdata($data);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function logout()
    {
	if($this->session->userdata('email') != '')
	{
	    $this->session->sess_destroy();
	    redirect('login');
	}
	else
	    redirect('login');
    }
}