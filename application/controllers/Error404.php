<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

  function __construct(){
    parent::__construct();
  }

	function index()
    {
      $data = array('title'   => "404");

      $this->load->view('header',$data);
      $this->load->view('error404');
  	  $this->load->view('footer');
   	}
}
