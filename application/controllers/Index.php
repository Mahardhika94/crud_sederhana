<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper('date');
    $this->load->library('session');
    $this->load->library('pagination');
    $this->load->model('Model_wrss');
    header('Access-Control-Allow-Origin: *');

  }

  function index()
  {
     
      $this->load->view('index');
  }

  
  // pekerja
  function pekerja(){
    $data['data']=$this->Model_wrss->get_pekerja();
    $this->load->view('pekerja',$data);

  }

  function del_pekerja($nik){
		$this->Model_wrss->del_pekerja($nik);
		redirect('Index/pekerja');
  }
  
    function add_pekerja(){
		$nik =$this->input->post('nik');
		$nama =$this->input->post('nama');
		$alamat =$this->input->post('alamat');
		$t_lahir =$this->input->post('t_lahir');
		$t_masuk =$this->input->post('t_masuk');
		$val=array('nik'=>$nik,'nama'=>$nama, 'alamat'=>$alamat,'tgl_lahir'=>$t_lahir,'tgl_msk'=>$t_masuk);
		$this->Model_wrss->add_pekerja($val);
		redirect('Index/pekerja');
	}
   function up_pekerja(){
       $nik =$this->input->post('nik');
	   $nik2 =$this->input->post('nik2');
		$nama =$this->input->post('nama');
		$alamat =$this->input->post('alamat');
		$t_lahir =$this->input->post('t_lahir');
		$t_masuk =$this->input->post('t_masuk');
		$val=array('nik'=>$nik,'nama'=>$nama, 'alamat'=>$alamat,'tgl_lahir'=>$t_lahir,'tgl_msk'=>$t_masuk);
		$this->Model_wrss->up_pekerja($val,$nik2);
		redirect('Index/pekerja');
	
   }

function getdet_pekerja($nik){
$dt=$this->Model_wrss->getdet_pekerja($nik);
$row=$dt->row_array();
$data['nik']=$row['nik'];
$data['nama']=$row['nama'];
$data['alamat']=$row['alamat'];
$data['tgl_lahir']=$row['tgl_lahir'];
$data['tgl_msk']=$row['tgl_msk'];
 $this->load->view('up_pekerja',$data);
}

 function cuti(){
    $data['data']=$this->Model_wrss->get_cuti();
    $this->load->view('cuti',$data);

  }
function add_cuti(){
		$id =$this->input->post('id');
		$nik =$this->input->post('nik');
		$t_mulai =$this->input->post('t_mulai');
		$l_cuti =$this->input->post('l_cuti');
		$note =$this->input->post('note');
		$val=array('id'=>$id,'nik'=>$nik, 'tgl_mulai'=>$t_mulai,'lama_cuti'=>$l_cuti,'catatan'=>$note);
		$this->Model_wrss->add_cuti($val);
		redirect('Index/cuti');
	}
	
	function del_cuti($id){
	$this->Model_wrss->del_cuti($id);
		redirect('Index/cuti');
	
	}

	function getdet_cuti($id){
		$dt=$this->Model_wrss->getdet_cuti($id);
		$row=$dt->row_array();
		$data['id']=$row['id'];
		$data['nik']=$row['nik'];
		$data['tgl_cuti']=$row['tgl_mulai'];
		$data['lama_cuti']=$row['lama_cuti'];
		$data['catatan']=$row['catatan'];
		 $this->load->view('up_cuti',$data);
}

function up_cuti(){
       $id =$this->input->post('id');
	   $id2 =$this->input->post('id2');
		$nik =$this->input->post('nik');
		$t_mulai =$this->input->post('t_mulai');
		$lama_cuti =$this->input->post('lama_cuti');
		$note =$this->input->post('note');
		$val=array('id'=>$id,'nik'=>$nik, 'tgl_mulai'=>$t_mulai,'lama_cuti'=>$lama_cuti,'catatan'=>$note);
		$this->Model_wrss->up_cuti($val,$id2);
		redirect('Index/cuti');
	
   }
   
   
	}
