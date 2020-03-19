<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Lapor extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();
         $this->load->model('M_lapor');
         $this->load->model('M_bidang');
         $login=$this->session->userdata('login');
  			 }

         public function index()
       	{
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
       		$this->load->view('Lapor',$data);
       	}
         public function update()
       	{
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['bidang'] = $this->M_bidang->lihat();
          $data['data_pengaduan'] = $this->M_lapor->detail_pengaduan($this->uri->segment(3));
       		$this->load->view('Update_lapor',$data);
       	}
         public function data()
       	{
          $data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
       		$this->load->view('Pc/Data_pengaduan',$data);
       	}
         public function detail_pengaduan()
       	{
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['bidang'] = $this->M_bidang->lihat();
          $data['data_pengaduan'] = $this->M_lapor->detail_pengaduan($this->uri->segment(3));
       		$this->load->view('Pc/Detail_pengaduan',$data);
       	}
         public function cetak_lapor()
       	{
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['data_pengaduan'] = $this->M_lapor->detail_pengaduan($this->uri->segment(3));
       		$this->load->view('Cetak_lapor',$data);
       	}
         public function cetak_laporan_pengaduan()
       	{
          $data['jenis_pengaduan'] = $this->M_lapor->lihat();
          $data['data_pengaduan'] = $this->M_lapor->laporan($this->uri->segment(3),$this->uri->segment(4));
          echo ($this->uri->segment(3));
          echo ($this->uri->segment(4));
          $data['data_setting'] = $this->M_lapor->setting();
       		$this->load->view('Cetak_laporan_pengaduan',$data);
       	}


        public function tambah(){
            $cek= $this->M_lapor->tambah();
            if($cek>0){
              redirect('lapor/detail_lapor/'.$cek);
            }else{
            redirect('lapor/');
       	    }
        }

        public function tambah_hp(){
            $cek= $this->M_lapor->tambah_hp();
            if($cek>0){
              redirect('lapor/detail_lapor/'.$cek);
            }else{
            redirect('lapor/');
       	    }
        }

        public function edit(){
            $cek= $this->M_lapor->edit($this->uri->segment(3),$this->uri->segment(4));
            if($cek>0){
              redirect('lapor/detail_lapor/'.$this->uri->segment(3));
            }else{
            redirect('lapor/update/'.$this->uri->segment(3));
       	    }
        }
        public function penyelesaian(){
            $cek= $this->M_lapor->penyelesaian($this->uri->segment(3));
            if($cek>0){
              redirect('lapor/detail_lapor/'.$this->uri->segment(3));
            }else{
            redirect('lapor/detail_lapor/'.$this->uri->segment(3));
       	    }
        }
        public function hapus(){
            $cek= $this->M_lapor->hapus($this->uri->segment(3),$this->uri->segment(4));
            if($cek>0){
              redirect('lapor/data');
            }else{
            redirect('lapor/detail_lapor/'.$this->uri->segment(3));
       	    }
        }

   }
?>
