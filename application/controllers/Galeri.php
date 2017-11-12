<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('pagination');
    }

	public function foto()
    {

//      configurasi pagination
        $config['base_url'] = base_url('galeri/foto');
        $config['total_rows'] = $this->m_data->total_record_foto();
        $config['per_page'] = 12;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

//        menentukan offset record dari uri segment
        $start = $this->uri->segment(3, 0);
//        ubah data menjadi tampilan per limit
        $foto = $this->m_data->foto_limit($config['per_page'],$start)->result();

        $data = array(
            'foto' => $foto,
            'pagination' => $this->pagination->create_links(),
            'start' => $start,
            'title' => 'Foto'
        );
        $this->load->view('header',$data);
        $this->load->view('/galeri/foto',$data);
    	  $this->load->view('footer');
    }

    public function video()
    {
        //configurasi pagination
        $config['base_url'] = base_url('galeri/video');
        $config['total_rows'] = $this->m_data->total_record_video();
        $config['per_page'] = 12;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

//        menentukan offset record dari uri segment
        $start = $this->uri->segment(3, 0);
//        ubah data menjadi tampilan per limit
        $link_video = $this->m_data->video_limit($config['per_page'],$start)->result();

        $data = array(
            'link_video' => $link_video,
            'pagination' => $this->pagination->create_links(),
            'start'      => $start,
            'title'      => 'Video'
        );

    	  $this->load->view('header',$data);
        $this->load->view('/galeri/video',$data);
        $this->load->view('footer');
    }

}
