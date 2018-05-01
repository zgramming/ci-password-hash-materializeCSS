<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_M');
	}
	public function index()
	{
		$this->load->view('Login');	
	}

	function proses_login(){
		$cek 		=	$this->Login_M->login();
		if (!$cek) {
			$this->session->set_flashdata('error', 'Email/Password Tidak Valid');
			$this->load->view('Login');
		}
		else{
			redirect('users/home','refresh');
		}

	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */ ?>