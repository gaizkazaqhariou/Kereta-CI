<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function getTabelUser()
	{
		$this->db->where('level', 'petugas');
		return $this->db->get('user') -> result_array();
	}	
	public function hapusUser($id_user)
	{
		$this->db->where('id_user', $id_user);
		$this->db->delete('user');
	}
	public function editUser($id_user)
	{

		$data = array(
			'username' => $this->input->post('username', true), 
			'password' => $this->input->post('password', true), 
			'level' => 'petugas',
			'status' => $this->input->post('status', true), 
		);
		$this->db->where('id_user', $id_user);
		$this->db->update('user', $data);
	}
	public function getUserByID($id_user)
	{
		return $this->db->get_where('user', array('id_user' => $id_user)) -> row_array();
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
?>