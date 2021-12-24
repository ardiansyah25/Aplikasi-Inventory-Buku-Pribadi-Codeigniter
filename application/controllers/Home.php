<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{   

		if(!isset($_SESSION['id_admin'])){
            redirect('login');
		}else{
			$data = array(
                 'header' => 'Halaman Utama',
                 'css' => '_css',
                 'js' => '_js',
                 'nav' => '_nav',
		        );
		$this->load->view('home',$data);
	}	
  }
}
