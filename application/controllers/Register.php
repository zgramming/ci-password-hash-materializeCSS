<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_M');
	}
	public function index()
	{
		$this->load->view('Register');
	}
	function simpan(){
		$email 	=	$this->input->post('eml');
		$cek 	=	$this->Register_M->simpanData($email);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */ ?>