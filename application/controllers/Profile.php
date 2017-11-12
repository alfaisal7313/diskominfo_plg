<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('m_data');
    $this->load->helper(array('text','download','form', 'url','file','form_helper'));
  }

    public function sejarah()
    {
	    $data = array('document' => $this->m_data->read_file(),
                    'title'    => 'Sejarah');
	    $this->load->view('header',$data);
      $this->load->view('/profile/sejarah',$data);
    	$this->load->view('footer');

  	}

  	public function visi_misi()
  	{
      $data = array('document' => $this->m_data->read_file(),
                    'title'    => 'Visi Misi');
      $this->load->view('header',$data);
      $this->load->view('/profile/visi_misi',$data);
      $this->load->view('footer');
  	}

	public function st_organisasi()
	{
    $data = array('document' => $this->m_data->read_file(),
                  'title'    => 'Struktur Organisasi');
    $this->load->view('header',$data);
    $this->load->view('/profile/st_organisasi', $data);
    $this->load->view('footer');
	}

	public function tupoksi()
	{
    $data = array('document' => $this->m_data->read_file(),
                  'title'    => 'Tupoksi');
    $this->load->view('header',$data);
    $this->load->view('/profile/tupoksi', $data);
  	$this->load->view('footer');
	}
}
