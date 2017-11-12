<?php
Class Kategori extends CI_Controller{

  function __construct(){
		parent::__construct();
		$this->load->model('m_data');
    $this->load->helper(array('text','download','form', 'url','file','form_helper'));
    $this->load->library('pagination');
	}

  function umum()
  {
    $data = array("title"           => 'Kategori',
                  'list_berita'	    => $this->m_data->read_list_berita(),
                  'list_kategori'   => $this->m_data->kategori(1),
                );
    $this->load->view('header',$data);
    $this->load->view('list_kategori_berita',$data);
    $this->load->view('footer');
  }

  function infomfasi_publik()
  {
    $data = array("title"           => 'Kategori',
                  'list_berita'	    => $this->m_data->read_list_berita(),
                  'list_kategori'   => $this->m_data->kategori(2),
                );
    $this->load->view('header',$data);
    $this->load->view('list_kategori_berita',$data);
    $this->load->view('footer');
  }

  function pengumuman()
  {
    $data = array("title"           => 'Kategori',
                  'list_berita'	    => $this->m_data->read_list_berita(),
                  'list_kategori'   => $this->m_data->kategori(3),
                );
    $this->load->view('header',$data);
    $this->load->view('list_kategori_berita',$data);
    $this->load->view('footer');
  }


}
