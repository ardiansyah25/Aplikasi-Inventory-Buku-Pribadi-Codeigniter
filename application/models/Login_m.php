<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

    function cari($data){
        $this->db->SELECT('*');
        $this->db->FROM('tb_admin');
        $this->db->WHERE('username',$data['username']);
        $this->db->WHERE('password',md5($data['password']));
        $query = $this->db->get();
        return($query);

    }	

}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */