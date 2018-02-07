<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wrss extends CI_Model{



function get_pekerja(){
    $query=$this->db->get('pekerja');
    return $query->result();
}



function add_pekerja($val){
  $query=$this->db->insert('pekerja',$val);
  return $query;
}



function del_pekerja($nik){
  $this->db->where('nik',$nik);
  $query=$this->db->delete('pekerja');
  return $query;
}

function getdet_pekerja($nik){
$this->db->where('nik',$nik);
  $query=$this->db->get('pekerja');
  return $query;
}

function up_pekerja($val,$nik){
  $this->db->where('nik',$nik);
  $query=$this->db->update('pekerja',$val);
  return $query;
}

function get_cuti(){
    $query=$this->db->get('cuti_kerja');
    return $query->result();
}

function add_cuti($val){
  $query=$this->db->insert('cuti_kerja',$val);
  return $query;
}

function del_cuti($id){
  $this->db->where('id',$id);
  $query=$this->db->delete('cuti_kerja');
  return $query;
}


function getdet_cuti($id){
$this->db->where('id',$id);
  $query=$this->db->get('cuti_kerja');
  return $query;
}

function up_cuti($val,$id){
  $this->db->where('id',$id);
  $query=$this->db->update('cuti_kerja',$val);
  return $query;
}

}
