<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->database();
    }

	public function index()
    {
      $data = array('title' => 'Agenda',
                    );
        $this->load->view('header',$data);
        $this->load->view('agenda');
    	  $this->load->view('footer');
    }

}
