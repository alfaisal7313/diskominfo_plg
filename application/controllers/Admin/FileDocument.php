<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileDocument extends CI_Controller{

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
  /*File Document*/
	function list_file_document(){
	    $data = array("title" => 'List File',
	                  'error' => ' ');

	    $this->load->view('/admin/header', $data);
	    $this->load->view('/admin/list_file_document', $data);
	    $this->load->view('/admin/footer', $data);
	  }

  function upload_file_document(){
	    $data = array("title" => 'Form Upload File',
	                  'error' => ' ');

	    $this->load->view('/admin/header', $data);
	    $this->load->view('/admin/upload_file_document', $data);
	    $this->load->view('/admin/footer');
	  }

  function tambah_file_document(){
    $config['upload_path']          = './files/pdf';
    $config['allowed_types']        = 'pdf|doc|docx|PDF|DOC|XML|DOCX|xls|xlsx';
    $config['max_size']         = 50000;

        $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file_document'))
            {
        $data = array('error' => $this->upload->display_errors());

        $this->load->view('/admin/header', $data);
        $this->load->view('/admin/upload_file_document', $data);
        $this->load->view('/admin/footer');
            }
            else
            {
      $file      	 	= $this->upload->data();
      $judul 			= $this->input->post('judul_document', true);
      $keterangan 	= $this->input->post('keterangan', true);
      $name_document 	= $file['file_name'];

      $data = array(
              'judul_document' 	=> $judul,
              'keterangan' 		=> $keterangan,
              'file_document'  	=> $name_document
              );

      $insert = $this->db->insert('document', $data);
      if ($insert > 0) {
        echo "<script>
            alert('File Document berhasil diupload');
            window.location.href = 'upload_file_document';
           </script>";
                  }else{
                    echo "<script>
            alert('File document gagal diupload');
            window.location.href = 'upload_file_document';
           </script>";
                }
            }
  }

  function edit_file_document($d){
    $where = array('id_document' => $d);
    $data = array('document' => $this->m_data->edit_data($where,'document')->result(),
                  "title" => 'Form Edit File',
                  'error' => ' ');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/edit_file_document',$data);
    $this->load->view('admin/footer');
  }

  function update_file_document(){
    if (!empty($_FILES['file_document']['name'])) {
    $config['upload_path']          = './files/pdf';
    $config['allowed_types']        = 'pdf|doc|docx|PDF|DOC|XML|DOCX|xls|xlsx';
    $config['max_size']         		= 50000000;

	  $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file_document')){
	    $this->session->set_flashdata('message', 'Data gagal disimpan');
	    redirect('admin/filedocument/list_file_document');
    }else{

	        $file      	 		= $this->upload->data();
	        $id 						= $this->input->post('id');
	        $judul 					= $this->input->post('judul_document', true);
	        $keterangan 		= $this->input->post('keterangan', true);
	        $name_document 	= $file['file_name'];

	        $data = array(
	                'judul_document' 	=> $judul,
	                'keterangan' 		=> $keterangan,
	                'file_document'  	=> $name_document
	                );


	        $where = array(
	          'id_document' => $id
	        );
		      $this->m_data->update_document($where,$data,'document');
		      echo "<script>
		            alert('File document berhasil disimpan');
		            window.location.href = '" . base_url() . "admin/filedocument/list_file_document';
		           </script>";}
	    }else {
	      $id 						= $this->input->post('id');
	      $judul 					= $this->input->post('judul_document', true);
	      $keterangan 		= $this->input->post('keterangan', true);

	      $data = array(
	              'judul_document' 	=> $judul,
	              'keterangan' 		=> $keterangan
	              );


	      $where = array(
	        'id_document' => $id
	      );
	      $this->m_data->update_no_file($where,$data,'document');
	      echo "<script>
	            alert('File document berhasil disimpan');
	            window.location.href = '" . base_url() . "admin/filedocument/list_file_document';
	           </script>";
	       }
    }

	function hapus_file_document($d){
		$id = array('id_document' => $d);
		$this->m_data->hapus_file($id, 'document');
		$this->session->set_flashdata('message', 'File document berhasil dihapus');
		redirect('admin/filedocument/list_file_document');
	}

	function json_file_document() {
			echo $this->m_json->json_file_document();
	}
}
