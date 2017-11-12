<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->library(array('session','form_validation'));
		$this->load->library('datatables');
		$this->load->model('m_data');
		$this->load->model('m_json');
		$this->load->helper(array('form', 'url','file','form_helper'));

		if (! $this->session->userdata('logged')) {
			redirect(base_url("login"));
		}
	}

    /*Galeri Video*/
	  function list_video(){
	      $data = array("title" => 'List Video',
	                    'error' => ''	);

	      $this->load->view('/admin/header', $data);
	      $this->load->view('/admin/list_video', $data);
	      $this->load->view('/admin/footer');
	    }

    function upload_video(){
	      $data = array("container" => "admin/video/upload_video",
	                    "title" => 'Form Upload Video',
	                    'error' => ''	);

	      $this->load->view('/admin/header', $data);
	      $this->load->view('/admin/upload_video', $data);
	      $this->load->view('/admin/footer');
	    }

    function tambah_video(){
	      $judul = $this->input->post('judul');
	      $link = $this->input->post('link');
	      $keterangan = $this->input->post('keterangan');

	      $data = array(
	        //'tanggal' => $tanggal,
	        'judul' => $judul,
	        'link_video' => $link,
	        'keterangan' => $keterangan
	        );
	      $this->m_data->input_data($data,'video');
	      echo "<script>
	              alert('Video berhasil diupload');
	              window.location.href = '" . base_url() . "admin/video/upload_video';
	             </script>";
	    }

    function edit_video($d){
      $where = array('id_video' => $d);
      $data = array('video' => $this->m_data->edit_data($where,'video')->result(),
                    "title" => 'Form Edit Video',
                    'error' => ' ');
      $this->load->view('admin/header',$data);
      $this->load->view('admin/edit_video',$data);
      $this->load->view('admin/footer');
    }

    function update_video(){
      $id 			= $this->input->post('id');
      $judul_video 	= $this->input->post('judul_video');
      $keterangan 	= $this->input->post('keterangan');
      $link_video 	= $this->input->post('link_video');

            $data = array(
        'judul' 				=> $judul_video,
        'keterangan' 		=> $keterangan,
        'link_video'  	=> $link_video
        );

        $where = array(
        'id_video' => $id
        );

            $this->m_data->update_file_video($where,$data,'video');
            echo "<script>
                  alert('Video berhasil disimpan');
                  window.location.href = '" . base_url() . "admin/video/list_video';
                 </script>";
    }

    function hapus_video($d){
      $id = array('id_video' => $d);
      $this->m_data->hapus_video($id, 'video');
      $this->session->set_flashdata('message', 'Video berhasil dihapus');
      redirect('admin/video/list_video');
    }

    function json_video() {
        echo $this->m_json->json_video();
  }
}
