<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$q = $this->db->get();
		if ($q->num_rows() == 0) {
			return false;
		} else {
			return $q->result();
		}
	}	
	public function tambahUser()
	{
		$data = array(
			'username' => $this->input->post('username', true), 
			'password' => $this->input->post('password', true), 
			'status' => 'request', 
			'level' => 'petugas', 
		);
		$this->db->insert('user', $data);
	}
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
?>