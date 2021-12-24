 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Login extends CI_Controller {

  	public function __construct()
  	{
  		parent::__construct();
  	       $this->load->model('Login_m');
  	}	
  
  	public function index(){  

      if(isset($_SESSION['id_admin'])){
         redirect('home');
      }else{
  		$data = array(
                      'header' => 'Halaman Login',
                      'css'    => '_css',
                      'js'     => '_js',
  		);
  		$this->load->view('loginpage',$data);
      }
  	}
    
  	public function proses(){
  		$data = $this->input->post(null,TRUE);
  		$cek = $this->Login_m->cari($data);
  		if($cek->num_rows() > 0){
  			$data = $cek->row_array();
  			$data_session = array(
                                 'id_admin' => $data['id_admin'],
                                 'nama_lengkap' => $data['nama_lengkap'],
  			                   );
  			$this->session->set_userdata($data_session);
  			redirect('home');
  		}else{
  			$this->session->set_flashdata('gagal','login');
  			redirect('login');
  		}
  	}

  	public function logout(){
  		session_destroy();
  		redirect('login');
  	}
  
  }
  
  /* End of file Login.php */
  /* Location: ./application/controllers/Login.php */