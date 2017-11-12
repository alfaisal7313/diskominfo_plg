<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$berita = array('berita' => $this->m_data->berita_terbaru(),
					'slideshow' => $this->m_data->list_slide(),
					'title'  => 'Beranda');
		$this->load->view('header',$berita);
      	$this->load->view('beranda', $berita);
    	$this->load->view('footer');
	}
}
