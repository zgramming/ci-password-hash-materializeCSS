<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users/Home_M');
		if ($this->session->userdata('username')!=null) {
			
		}else{
			redirect('Auth');
		}
	}
	public function index()
	{
		$this->load->view('users/Home');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/users/Home.php */ ?>