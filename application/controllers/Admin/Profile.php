<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

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
/*Update Profile User*/

	function editProfile($id_user){
		$where = array('id_user' 	 => $id_user);
		$data  = array('user' 		 => $this->m_data->edit_data($where,'user')->result(),
									 "title" 	   => 'Profile',
									 'error' 		 => ' ',
									);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profile',$data);
		$this->load->view('admin/footer');
	}

	function update_profile(){
		$id 						= $this->input->post('id');
		$nama_lengkap 	= $this->input->post('nama_lengkap');
		$username			 	= $this->input->post('username');
		$password 			= $this->input->post('password');

		if ($password !=null) {
			$data = array(
				'nama_lengkap' 		=> $nama_lengkap,
				'username' 				=> $username,
				'password'  			=> md5($password),
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
		$this->session->set_flashdata('success', 'Data berhasil disimpan');
		echo "<script>
				alert('Data berhasil disimpan');
				window.location.href = '" . base_url() . "admin/dashbord';
				</script>";

	}
}
