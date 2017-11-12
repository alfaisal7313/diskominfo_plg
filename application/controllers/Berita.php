<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
    $this->load->helper(array('text','download','form', 'url','file','form_helper','cookie'));
    $this->load->library('pagination');
	}

	public function index()
	{
		//configurasi pagination
        $config['base_url'] = base_url().'berita/index';
        $config['total_rows'] = $this->m_data->total_record_berita();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);

//        menentukan offset record dari uri segment
        $start = $this->uri->segment(3, 0);

//        ubah data menjadi tampilan per limit
        $berita = $this->m_data->berita_limit($config['per_page'],$start);

        $data = array(
            'berita' => $berita,
            'pagination' => $this->pagination->create_links(),
						'list_berita'	=> $this->m_data->read_list_berita(),
            'start' => $start,
            'title' => 'Berita'
        );

        $this->load->view('header',$data);
        $this->load->view('berita',$data);
    		$this->load->view('footer');
	}

	function view($id_berita)
  {
		$data = array('berita' 	 		=> $this->m_data->read($id_berita),
									'list_berita'	=> $this->m_data->read_list_berita(),
								);
    $beritas = $this->m_data->read($id_berita);
		$title  ['title']= $beritas->judul;
		$this->add_count($id_berita);
    $this->load->view('header',$title);
    $this->load->view('berita_view', $data);
    $this->load->view('footer');
  }

	function add_count($id_berita)
	{
	  $check_visitor = $this->input->cookie(urldecode($id_berita), FALSE);
	    $ip = $this->input->ip_address();
	    if ($check_visitor == false) {
	        $cookie = array(
	            "name"   => urldecode($id_berita),
	            "value"  => "$ip",
	            "expire" =>  time() + 7200,
	            "secure" => false
	        );
	        $this->input->set_cookie($cookie);
	        $this->m_data->update_counter(urldecode($id_berita));
	    }
	}
}
