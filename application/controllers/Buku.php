<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Buku_m','buku');

	}

	public function index()
	{   
		$sql = $this->buku->get();
		$data = array(
                 'header' => 'Halaman Buku',
                 'css' => '_css',
                 'js' => '_js',
                 'nav' => '_nav',
                 'buku' => $sql->result(),
		        );
		$this->load->view('buku_tampil',$data);
	}

	public function add(){
        $data = array(
                 'header' => 'Tambah Buku',
                 'css' => '_css',
                 'js' => '_js',
                 'nav' => '_nav',
		        );
		$this->load->view('buku_tambah',$data);
	}

	public function edit($id = null){
		 $sql = $this->buku->get($id);
         $data = array(
                 'header' => 'Edit Buku',
                 'css' => '_css',
                 'js' => '_js',
                 'nav' => '_nav',
                 'buku' => $sql->row(),
		        );
         $this->load->view('buku_edit',$data);

	}

	public function proses(){
		if(isset($_POST['tambah'])){
			$inputan = $this->input->post(null, TRUE);
			$this->buku->add($inputan);
			$this->session->set_flashdata('tambah','ada');   
			
		}else if(isset($_POST['edit'])){
			$inputan = $this->input->post(null, TRUE);
			$this->buku->edit($inputan);
			$this->session->set_flashdata('edit','ada'); 
		}

		redirect('buku');
	}

	public function del($id){
          $this->buku->del($id);
          $this->session->set_flashdata('hapus', 'ada');
          redirect('buku');
	}
}
