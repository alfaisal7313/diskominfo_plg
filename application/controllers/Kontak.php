<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

  public function index()
  {
  		$this->load->helper(array('form', 'url'));
   		$this->load->library('email');
      $data = array('title' => 'Kontak', );
      $this->load->view('header', $data);
      $this->load->view('kontak');
      $this->load->view('footer');
  }

	function sendMail() {
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "palembang.diskominfo@gmail.com";
        $config['smtp_pass'] = "diskominfo";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $email = $this->input->post('email');
        $name_user = $this->input->post('name_user');
        $ci->email->initialize($config);
        $ci->email->from($email, $name_user);
        $list = array('palembang.diskominfo@gmail.com');
        $ci->email->to($list);
        $ci->email->subject($this->input->post('prihal'));
        $ci->email->message($this->input->post('pesan'));
         if ($this->email->send())
            {
            echo "<script>
				alert('Pesan berhasil dikirim');
				window.location.href='" . base_url() ."kontak';
				</script>";
            }
            else
            {
            echo "<script>
				alert('Pesan gagal dikirim');
				window.location.href='" . base_url() ."kontak';
				</script>";
            }
    }

 }
