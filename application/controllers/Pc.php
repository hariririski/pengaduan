<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   class Pc extends CI_Controller {

     function __construct() {
         parent::__construct();
  			 $this->load->helper('url');
  			 $this->load->library('session');
  			 $this->load->database();

  		}


         public function index()
       	{

       		$this->load->view('pc/home');
       	}
         public function login()
       	{

       		$this->load->view('pc/login');
       	}

   }
?>
