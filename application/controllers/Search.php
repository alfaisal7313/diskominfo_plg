<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	function index()
    {
        $keyword = $this->input->get('keyword');
       	if ($keyword == "") {
       		$data 	 = array( 'results' => "",
														'list_berita'	=> $this->m_data->read_list_berita(),
	    					  					'title'   => "Search");
       		$this->load->view('header',$data);
	        $this->load->view('search',$data);
	    		$this->load->view('footer');
       	}else{
	        $data 	 = array( 'results' => $this->m_data->search($keyword),
														'list_berita'	=> $this->m_data->read_list_berita(),
	    					  					'title'   => "Search");

	        $this->load->view('header',$data);
	        $this->load->view('search',$data);
	    		$this->load->view('footer');
       	}
    }
}
