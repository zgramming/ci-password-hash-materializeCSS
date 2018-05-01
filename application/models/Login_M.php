<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {

	function login(){
		$email 		=	$this->input->post('eml');
		$password 	=	$this->input->post('psd');
		$this->db->where('email', $email);
		$query 		=	$this->db->get('tb_user')->row();
		if ($query!=null ) {
			if (password_verify($password,$query->password)) {
				$data 		=	array(	'username'	=>$query->username,
										'email'  	=>$query->email);
				$this->session->set_userdata($data);
				return $query;
			}else{
				return false;
			}
		}else{
		$this->session->set_flashdata('error', 'Email/Password Tidak Valid');
		redirect('Auth');
		}
	}
}
/* End of file Login_M.php */
/* Location: ./application/models/Login_M.php */
?>