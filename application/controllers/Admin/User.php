<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

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


		function add_user()
		{
			$data = array('title' => 'Tambah User',
										'action' => site_url('user/create_action'),
										'dd_kategori' => $this->m_data->dd_akses_data(),
										'kategori_selected' => $this->input->post('id_kategori_user') ? $this->input->post('id_kategori_user') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
										);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/add_user');
			$this->load->view('admin/footer');
		}

		function tambah_user(){
		 $nama_lengkap = $this->input->post('nama_lengkap');
		 $username 		 = $this->input->post('username');
		 $id_kategori_user 	 = $this->input->post('id_kategori_user');
		 $password     = $this->input->post('password');

		 $data = array(
			 //'tanggal' => $tanggal,
			 'nama_lengkap' => $nama_lengkap,
			 'username' 		=> $username,
			 'id_kategori_user' 	=> $id_kategori_user,
			 'password' 		=> md5($password)
			 );

		 $this->m_data->input_data($data,'user');
		 echo "<script>
						 alert('User berhasil ditambah');
						 window.location.href = '" . base_url() . "admin/user/add_user';
						</script>";
	 	}

		function edit_user($d){
			$where = array('id_user' => $d);
			$data  = array('user' => $this->m_data->edit_data($where,'user')->result(),
									 	"title" => 'Form Edit User',
										'error' => '',
										'action' => site_url('user/create_action'),
										'dd_kategori' => $this->m_data->dd_akses_data(),
										'kategori_selected' => $this->input->post('id_kategori_user') ? $this->input->post('id_kategori_user') : '', // untuk edit ganti '' menjadi data dari database misalnya $row->provinsi
										);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/edit_user',$data);
			$this->load->view('admin/footer');
		}

		function update_user(){
			$id 						= $this->input->post('id');
			$nama_lengkap 	= $this->input->post('nama_lengkap');
			$username			 	= $this->input->post('username');
			$id_kategori_user 		= $this->input->post('id_kategori_user');
			$password 			= $this->input->post('password');

			if ($password !=null) {
	    $data = array(
				'nama_lengkap' 		=> $nama_lengkap,
				'username' 				=> $username,
				'id_kategori_user'  		=> $id_kategori_user,
				'password'  			=> md5($password),
			);
		}elseif ($id_kategori_user !=null) {
			$data = array(
				'nama_lengkap' 		=> $nama_lengkap,
				'username' 				=> $username,
				'id_kategori_user'  		=> $id_kategori_user,
			);
		}else {
			$data = array(
				'nama_lengkap' 		=> $nama_lengkap,
				'username' 				=> $username,
			);
		}

			$where = array(
				'id_user' => $id
			);

	    $this->m_data->update_no_file($where,$data,'user');
	    redirect('admin/user/list_user');

		}

		function hapus_user($d){
			$id = array('id_user' => $d);
			$this->m_data->hapus_user($id, 'user');
			$this->session->set_flashdata('message', 'Data user berhasil dihapus');
			redirect('admin/user/list_user');
		}

		function list_user()
		{
			$data = array('title' => 'Daftar List User', );
			$this->load->view('admin/header',$data);
			$this->load->view('admin/list_user');
			$this->load->view('admin/footer');
		}

		function json_user() {
				echo $this->m_json->json_user();
		}
}
