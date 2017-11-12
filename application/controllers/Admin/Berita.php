<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller{

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
	/* Berita */
	function list_berita(){
		 $data = array("title" => 'List Berita',
									 'list_berita'	=> $this->m_data->list_berita(),
								 );

		 $this->load->view('/admin/header', $data);
		 $this->load->view('/admin/list_berita', $data);
		 $this->load->view('/admin/footer');
	 }

	 function form_berita(){
			$data = array("title" => 'Form Input Berita',
						  			'error' => '');

			$this->load->view('/admin/header', $data);
			$this->load->view('/admin/form_berita', $data);
			$this->load->view('/admin/footer');
		}

	function tambah_berita(){
		$config['upload_path']          = './img/image_berita';
		$config['allowed_types']        = 'svg|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
    $config['max_size']             = 12000;
    $config['maintain_ratio'] 			= TRUE;

      	$this->load->library('upload', $config);

        	if ( ! $this->upload->do_upload('foto_berita'))
            {
				$data = array('error' => $this->upload->display_errors());

				$this->load->view('/admin/header', $data);
				$this->load->view('/admin/form_berita', $data);
				$this->load->view('/admin/footer');
            }
            else
            {
        $img      	 = $this->upload->data();
    		$tanggal 	 = $this->input->post('tanggal', true);
    		$jam 		 = $this->input->post('jam', true);
				$judul 		 = $this->input->post('judul', true);
				$isi_berita  = $this->input->post('isi_berita', true);
				$id_kategori_berita = $this->input->post('id_kategori_berita', true);
				$img_berita  = $img['file_name'];

				//$data=array('select_option'=> $this->m_data->get_option());
				$data = array(  'tanggal'	  			=> $tanggal,
								'jam' 	  	  			=> $jam,
								'judul' 	  			=> $judul,
								'isi_berita'  			=> $isi_berita,
								'img_berita'  			=> $img_berita,
								'id_kategori_berita'	=> $id_kategori_berita,
								);
				if ($isi_berita != null) {
					$insert = $this->db->insert('berita', $data);

					echo "<script>
							alert('Berita berhasil ditambah');
							window.location.href = 'form_berita';
						  </script>";
        }else{
        echo "<script>
				alert('Berita gagal ditambah, silahkan isi berita');
				window.location.href = 'form_berita';
			  </script>";
          }
      }
	}

	function edit_berita($d){
		$where = array('id_berita' => $d);
		$data = array('berita' 		 => $this->m_data->edit_data($where,'berita')->result(),
									"title" 		 => 'Form Edit Berita',
									"error"      => '');
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_berita',$data);
		$this->load->view('admin/footer');
	}

	function update_berita(){
			if (!empty($_FILES['foto_berita']['name'])) {
				$config['upload_path']          = './img/image_berita';
				$config['allowed_types']        = 'svg|gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
				$config['max_size']             = 12000;
				$config['maintain_ratio'] = TRUE;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto_berita')){
						$this->session->set_flashdata('message', 'Data gagal disimpan');
						redirect('admin/berita/list_berita');
				}else{
						$foto_berita    	= $this->upload->data();
						$id = $this->input->post('id');
						$judul = $this->input->post('judul');
						$isi_berita = $this->input->post('isi_berita');
						$id_kategori_berita = $this->input->post('id_kategori_berita');
						$name_foto_berita = $foto_berita['file_name'];

						$data = array(
						'judul' => $judul,
						'isi_berita' => $isi_berita,
						'id_kategori_berita' => $id_kategori_berita,
						'img_berita'  	=> $name_foto_berita
						);

						$where = array(
						'id_berita' => $id
						);

						$this->m_data->update_berita($where,$data,'berita');
						echo "<script>
									alert('Berita berhasil disimpan');
									window.location.href = '" . base_url() . "admin/berita/list_berita';
									</script>";
		    }
			}else{
				$id = $this->input->post('id');
				$judul = $this->input->post('judul');
				$isi_berita = $this->input->post('isi_berita');
				$id_kategori_berita = $this->input->post('id_kategori_berita');

				$data = array(
				'judul' => $judul,
				'isi_berita' => $isi_berita,
				'id_kategori_berita' => $id_kategori_berita,
				);

				$where = array(
				'id_berita' => $id
				);

				$this->m_data->update_no_file($where,$data,'berita');
				echo "<script>
							alert('Berita berhasil disimpan');
							window.location.href = '" . base_url() . "admin/berita/list_berita';
								</script>";
			}
		}

	function hapus_berita($d){
		$id = array('id_berita' => $d);
		$this->m_data->hapus_berita($id,'berita');
		$this->session->set_flashdata('message', 'Berita berhasil dihapus');
		redirect('admin/berita/list_berita');
	}

	function json_berita() {
			echo $this->m_json->json_berita();
	}
}
