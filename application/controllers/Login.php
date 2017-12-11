<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('Form_validation','session');
        $this->load->helper(array('Form', 'String', 'file','form_helper'));

        // if ($this->session->userdata('logged')) {
        //     redirect(base_url("admin/dashbord"));
        // }
    }

    public function index(){
        $data = array(
            'username' => set_value('username'),
            'password' => set_value('password'),
            'message' => $this->session->flashdata('message'),
        );
        $this->load->view('admin/baselogin', $data);
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $row = $this->Auth_model->login($username, $password)->row();

        if ($row) {
            $this->_daftarkan_session($row);
        } else {
            // login gagal
            $this->session->set_flashdata('message','<b style="color:red; font-size:15">Login Gagal</b>');
            echo "<script>window.location.href = '" . base_url() . "login';</script>";
        }
    }

    public function _daftarkan_session($row) {
        // 1. Daftarkan Session
        $sess = array(
            'logged'   => TRUE,
            'id_user'  => $row->id_user,
            'username' => $row->username,
            'id_kategori_user' => $row->id_kategori_user,
            'nama_lengkap' => $row->nama_lengkap,
        );
        $this->session->set_userdata($sess);

        // 2. Redirect ke home
        redirect('admin/dashbord');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
