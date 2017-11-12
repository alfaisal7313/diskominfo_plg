<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_file extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url','download');
        $this->load->database();
        $this->load->library('pagination');
    }

	public function index()
    {
//      configurasi pagination
        $config['base_url'] = base_url('list_file/index');
        $config['total_rows'] = $this->m_data->total_record_document();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

//        menentukan offset record dari uri segment
        $start = $this->uri->segment(3, 0);
//        ubah data menjadi tampilan per limit
        $document = $this->m_data->document_limit($config['per_page'],$start)->result();

        $data = array(
            'document'   => $document,
            'pagination' => $this->pagination->create_links(),
            'start'      => $start,
            'title'      => 'File Document'
        );
        $this->load->view('header',$data);
        $this->load->view('list_file',$data);
    	   $this->load->view('footer');
    }

    public function download_file($id){
      $document = $this->m_data->download_document($id);
      $file = $document->file_document;
      force_download('./files/pdf/'.$file,NULL);
    }
}
