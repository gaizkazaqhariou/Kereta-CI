<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masinis_model extends CI_Model {

	public function getTabelMasinis()
	{
		return $this->db->get('masinis') -> result_array();
	}
	public function tambahMasinis()
	{
		$data = array(
			'nama_masinis' => $this->input->post('nama_masinis', true), 
			'alamat_masinis' => $this->input->post('alamat_masinis', true), 
			'nohp_masinis' => $this->input->post('nohp_masinis', true), 
			'email_masinis' => $this->input->post('email_masinis', true), 
		);
		$this->db->insert('masinis', $data);
	}
	public function hapusMasinis($id_masinis)
	{
		$this->db->where('id_masinis', $id_masinis);
		$this->db->delete('masinis');
	}
	public function editMasinis($id_masinis)
	{
		$data = array(
			'nama_masinis' => $this->input->post('nama_masinis', true), 
			'alamat_masinis' => $this->input->post('alamat_masinis', true), 
			'nohp_masinis' => $this->input->post('nohp_masinis', true), 
			'email_masinis' => $this->input->post('email_masinis', true), 
		);
		$this->db->where('id_masinis', $id_masinis);
		$this->db->update('masinis', $data);
	}
	public function getMasinisByID($id_masinis)
	{
		return $this->db->get_where('masinis', array('id_masinis' => $id_masinis)) -> row_array();
	}
}

/* End of file masinis_model.php */
/* Location: ./application/models/masinis_model.php */
?>