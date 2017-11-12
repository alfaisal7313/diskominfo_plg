<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller{

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

  	/*Galeri Foto*/
		function list_foto(){
				$data = array("title" => 'List Foto',
											'error' => '');

				$this->load->view('/admin/header', $data);
				$this->load->view('/admin/list_foto', $data);
				$this->load->view('/admin/footer');
			}

  	function tambah_foto(){
  		$config['upload_path']          = './img/image_galeri';
  		$config['allowed_types']        = 'svg|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
      $config['max_size']             = 12000;
      $config['maintain_ratio'] 	= TRUE;

        	$this->load->library('upload', $config);

  		if ( ! $this->upload->do_upload('foto_galeri'))
              {
  				$data = array('error' => $this->upload->display_errors());

  				$this->load->view('/admin/header', $data);
  				$this->load->view('/admin/upload_foto', $data);
  				$this->load->view('/admin/footer');
              }
              else
              {
    			$img        = $this->upload->data();
    			$tanggal 	= $this->input->post('tanggal', true);
  			$judul 	= $this->input->post('judul', true);
  			$keterangan 	= $this->input->post('keterangan', true);
  			$foto 	 = $img['file_name'];

  			$data = array(  'tanggal'	  => $tanggal,
  							'judul' 	  => $judul,
  							'foto' 	  		=> $foto,
  							'keterangan'  => $keterangan,
  							);

  			$insert = $this->db->insert('foto', $data);
  			if ($insert > 0) {
  				echo "<script>
  						alert('Foto berhasil ditambah');
  						window.location.href = 'upload_foto';
  					 </script>";
                    }else{
                      echo "<script>
  						alert('Foto gagal ditambah');
  						window.location.href = 'upload_foto';
  					 </script>";
                  }

              }
  	}

		function upload_foto(){
				$data = array("title"     => 'Form Upload Foto',
											'error'     => '');

				$this->load->view('/admin/header', $data);
				$this->load->view('/admin/upload_foto', $data);
				$this->load->view('/admin/footer');
			}

  	function edit_foto($d){
  		$where = array('id_foto' => $d);
  		$data = array('foto' => $this->m_data->edit_data($where,'foto')->result(),
  									"title" => 'Form Edit Foto',
  									'error' => '');
  		$this->load->view('admin/header',$data);
  		$this->load->view('admin/edit_foto',$data);
  		$this->load->view('admin/footer');
  	}

  	function update_foto(){
  		if (!empty($_FILES['file_foto']['name'])) {
  				$config['upload_path']          = './img/image_galeri';
  				$config['allowed_types']        = 'svg|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
  		    $config['max_size']             = 12000;
  		    $config['maintain_ratio'] 		  = TRUE;

  		  	$this->load->library('upload', $config);

  		  	if ( ! $this->upload->do_upload('file_foto')){
  				$this->session->set_flashdata('message', 'Data gagal disimpan');
  				redirect('admin/foto/list_foto');
  		    }else{
  					$foto_data      = $this->upload->data();
  					$id 						= $this->input->post('id');
  					$judul 					= $this->input->post('judul_foto');
  					$keterangan 		= $this->input->post('keterangan');
  					$name_foto 			= $foto_data['file_name'];

  					$data = array(
  									'judul' 		=> $judul,
  									'keterangan' 	=> $keterangan,
  									'foto'  		=> $name_foto
  									);

  					$where = array(
  					'id_foto' => $id
  					);

  					$this->m_data->update_foto($where,$data,'foto');
  					echo "<script>
  								alert('Foto berhasil disimpan');
  								window.location.href = '" . base_url() . "admin/foto/list_foto';
  							 </script>";
  					}
  				}else{
  					$id 						= $this->input->post('id');
  					$judul 					= $this->input->post('judul_foto');
  					$keterangan 		= $this->input->post('keterangan');

  					$data = array(
  									'judul' 		=> $judul,
  									'keterangan' 	=> $keterangan,
  									);

  					$where = array(
  					'id_foto' => $id
  					);

  					$this->m_data->update_no_file($where,$data,'foto');
  					echo "<script>
  								alert('Foto berhasil disimpan');
  								window.location.href = '" . base_url() . "admin/foto/list_foto';
  							 </script>";
  		}
  	}

  	function hapus_foto($d){
  		$id = array('id_foto' => $d);
  		$this->m_data->hapus_foto($id, 'foto');
  		$this->session->set_flashdata('message', 'Foto berhasil dihapus');
  		redirect('admin/foto/list_foto');
  	}

  	function json_foto() {
  			echo $this->m_json->json_foto();
  	}
}
