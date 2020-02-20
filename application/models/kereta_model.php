<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta_model extends CI_Model {

	public function getTabelKereta()
	{
		$this->db->select('*');
		$this->db->from('kereta');
		$this->db->join('stasiun', 'stasiun.nama_stasiun = kereta.stasiun_awal');
		$q = $this->db->get();
		return $q-> result_array();

	}	
	public function getNamaStasiun()
	{
		$this->db->select('nama_stasiun');
		$this->db->from('stasiun');
		$q = $this->db->get();
		return $q-> result_array();
	}
	public function tambahKereta()
	{
		$data = array(
			'nama_kereta' => $this->input->post('nama_kereta', true), 
			'jml_gerbong' => $this->input->post('jml_gerbong', true), 
			'thn_pembuatan' => $this->input->post('thn_pembuatan', true), 
			'tipe_kereta' => $this->input->post('tipe_kereta', true), 
			'stasiun_awal' => $this->input->post('stasiun_awal', true), 
		);
		$this->db->insert('kereta', $data);
	}
	public function hapusKereta($id_kereta)
	{
		$this->db->where('id_kereta', $id_kereta);
		$this->db->delete('kereta');
	}
	public function editKereta($id_kereta)
	{
		$data = array(
			'nama_kereta' => $this->input->post('nama_kereta', true), 
			'jml_gerbong' => $this->input->post('jml_gerbong', true), 
			'thn_pembuatan' => $this->input->post('thn_pembuatan', true), 
			'tipe_kereta' => $this->input->post('tipe_kereta', true), 
			'stasiun_awal' => $this->input->post('stasiun_awal', true), 
		);
		$this->db->where('id_kereta', $id_kereta);
		$this->db->update('kereta', $data);
	}
	public function getKeretaByID($id_kereta)
	{
		return $this->db->get_where('kereta', array('id_kereta' => $id_kereta)) -> row_array();
	}
}

/* End of file kereta_model.php */
/* Location: ./application/models/kereta_model.php */
?>