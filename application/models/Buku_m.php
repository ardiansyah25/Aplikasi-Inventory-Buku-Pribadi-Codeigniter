<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  CLass Buku_m extends CI_Model{

      public function get($id = null){
      	$this->db->select('*');
      	$this->db->from('tb_buku');
        if($id != null){
        	$this->db->where('id_buku',$id);
        }
      	$query = $this->db->get();
      	return $query;
      }

      public function add($data){
        $param = array(
              'judul_buku' => $data['judul'],
              'pengarang' => $data['pengarang'],
              'tahun_terbit' => $data['tahun_terbit'],
        );

        $this->db->insert('tb_buku',$param);
      }

      public function edit($data){
        $param = array(
                'judul_buku' => $data['judul'],
                'pengarang' => $data['pengarang'],
                'tahun_terbit' => $data['tahun_terbit'],
        );

        $this->db->set($param);
        $this->db->where('id_buku', $data['id_buku']);
        $this->db->update('tb_buku');

      }

      public function del($id){
        $this->db->where('id_buku', $id);
        $this->db->delete('tb_buku');
      }
  }

?>