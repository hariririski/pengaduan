<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Lapor extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor');
  			 }


         public function index()
       	{
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();

       		$this->load->view('Lapor',$data);
       	}
         public function data()
       	{
          $data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
       		$this->load->view('Data_lapor',$data);
       	}
         public function detail_lapor()
       	{

          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['data_pengaduan'] = $this->M_lapor->detail_pengaduan($this->uri->segment(3));
       		$this->load->view('Detail_lapor',$data);
       	}
         public function cetak_lapor()
       	{

          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['data_pengaduan'] = $this->M_lapor->detail_pengaduan($this->uri->segment(3));
       		$this->load->view('Cetak_lapor',$data);
       	}
         public function hapus()
       	{
       		$this->load->view('Lapor');
       	}

        public function tambah(){
            $cek= $this->M_lapor->tambah();
            if($cek>0){
              redirect('lapor/detail_lapor/'.$cek);
            }else{
            redirect('lapor/');
       	    }
        }

   }
?>
