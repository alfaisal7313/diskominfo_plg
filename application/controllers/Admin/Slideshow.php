<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends CI_Controller{

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

	/* Slide */

	function list_slide(){
		$data = array("title" => 'List Slide',
			'list_slide'	=> $this->m_data->list_slide(),
		);

		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/list_slide', $data);
		$this->load->view('/admin/footer');
	}

	function tambah_slide(){
		$config['upload_path']          = './img/image_slide';
		$config['allowed_types']        = 'svg|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
		$config['max_size']             = 12000;
		$config['maintain_ratio'] 	= TRUE;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_slide'))
		{
			$data = array('error' => $this->upload->display_errors());

			$this->load->view('/admin/header', $data);
			$this->load->view('/admin/upload_slide', $data);
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
				'judul' 	  		=> $judul,
				'gambar' 	  		=> $foto,
				'keterangan'  	=> $keterangan,
			);

			$insert = $this->db->insert('slideshow', $data);
			if ($insert > 0) {
				echo "<script>
				alert('Slide berhasil ditambah');
				window.location.href = 'upload_slide';
				</script>";
			}else{
				echo "<script>
				alert('Slide gagal ditambah');
				window.location.href = 'upload_slide';
				</script>";
			}

		}
	}

	function edit_slide($d){
		$where = array('id_slide'  => $d);
		$data  = array('slide' 		 => $this->m_data->edit_data($where,'slideshow')->result(),
			"title" 		 => 'Form Edit Slide',
			"error"      => '');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_slide',$data);
		$this->load->view('admin/footer');
	}

	function update_slide(){
		if (!empty($_FILES['file_slide']['name'])) {
			$config['upload_path']          = './img/image_slide';
			$config['allowed_types']        = 'svg|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
			$config['max_size']             = 12000;
			$config['maintain_ratio'] 		  = TRUE;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('file_slide')){
				$this->session->set_flashdata('message', 'Data gagal diedit');
				redirect('admin/slideshow/list_foto');
			}else{
				$foto_data      = $this->upload->data();
				$id 						= $this->input->post('id');
				$judul 					= $this->input->post('judul_slide');
				$keterangan 		= $this->input->post('keterangan');
				$name_foto 			= $foto_data['file_name'];

				$data = array(
					'judul' 			=> $judul,
					'keterangan' 	=> $keterangan,
					'gambar'  		=> $name_foto
				);

				$where = array(
					'id_slide' => $id
				);

				$this->m_data->update_slide($where,$data,'slideshow');
				echo "<script>
				alert('File berhasil diedit');
				window.location.href = '" . base_url() . "admin/slideshow/list_slide';
				</script>";
			}
		}else{
			$id 						= $this->input->post('id');
			$judul 					= $this->input->post('judul_slide');
			$keterangan 		= $this->input->post('keterangan');

			$data = array(
				'judul' 		=> $judul,
				'keterangan' 	=> $keterangan,
			);

			$where = array(
				'id_slide' => $id
			);

			$this->m_data->update_no_file($where,$data,'slideshow');
			echo "<script>
			alert('File berhasil diedit');
			window.location.href = '" . base_url() . "admin/slideshow/list_slide';
			</script>";
		}
	}

	function hapus_slide($d){
		$id = array('id_slide' => $d);
		$this->m_data->hapus_slide($id,'slideshow');
		$this->session->set_flashdata('message', 'Slide berhasil dihapus');
		redirect('admin/slideshow/list_slide');
	}

	function upload_slide(){
		$data = array("title" => 'Form Input Slide',
			'error' => '');

		$this->load->view('/admin/header', $data);
		$this->load->view('/admin/upload_slide', $data);
		$this->load->view('/admin/footer');
	}

	function json_slide() {
		echo $this->m_json->json_slide();
	}
}
