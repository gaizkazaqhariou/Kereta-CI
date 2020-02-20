<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	public function getTabelJadwal()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('kereta', 'kereta.id_kereta = jadwal.id_kereta');
		$this->db->join('stasiun', 'stasiun.nama_stasiun = jadwal.pemberhentian');
		$q = $this->db->get();
		return $q -> result_array();
	}	
	public function getNamaKereta()
	{
		$this->db->select('*');
		$this->db->from('kereta');
		$q = $this->db->get();
		return $q-> result_array();
	}
	public function tambahJadwal()
	{
		$data = array(
			'id_kereta' => $this->input->post('id_kereta', true), 
			'pemberhentian' => $this->input->post('pemberhentian', true), 
			'harga' => $this->input->post('harga', true), 
			'jam_datang' => $this->input->post('jam_datang', true), 
			'jam_berangkat' => $this->input->post('jam_berangkat', true), 
			'qty' => $this->input->post('qty', true),
		);
		$this->db->insert('jadwal', $data);
	}
	public function ubahJadwal($id_jadwal)
	{
		$data = array(
			'id_kereta' => $this->input->post('id_kereta', true), 
			'pemberhentian' => $this->input->post('pemberhentian', true), 
			'harga' => $this->input->post('harga', true), 
			'jam_datang' => $this->input->post('jam_datang', true), 
			'jam_berangkat' => $this->input->post('jam_berangkat', true), 
			'qty' => $this->input->post('qty'), 
		);
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->update('jadwal', $data);
	}
	public function getJadwalByID($id_jadwal)
	{
		return $this->db->get_where('jadwal', array('id_jadwal' => $id_jadwal)) -> row_array();
	}
}

/* End of file jadwal_model.php */
/* Location: ./application/models/jadwal_model.php */
?>