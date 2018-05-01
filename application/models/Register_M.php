<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_M extends CI_Model {

	function simpanData($email){
		$this->db->select('email');
		$this->db->where('email', $email);
		$query 		=	$this->db->get('tb_user');
		if ($query->num_rows() > 0) {
			$this->session->set_flashdata('error', 'Email Sudah Ada');
 			redirect('register');
		}else{
		$data 		=	array(	'username'	=>$this->input->post('usr'),
								'email'		=>$this->input->post('eml'),
								'password'	=>password_hash($this->input->post('psd'),PASSWORD_DEFAULT));
		$this->db->insert('tb_user', $data);	
		$this->session->set_flashdata('success', 'Berhasil Registrasi');
		redirect('register');
		}
	}
}

/* End of file Register_M.php */
/* Location: ./application/models/Register_M.php */ ?>