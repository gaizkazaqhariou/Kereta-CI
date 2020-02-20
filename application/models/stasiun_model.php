<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stasiun_model extends CI_Model {

	public function getTabelStasiun()
	{
		return $this->db->get('stasiun') -> result_array();
	}	
	public function tambahStasiun()
	{
		$data = array(
			'nama_stasiun' => $this->input->post('nama_stasiun', true), 
			'kota_stasiun' => $this->input->post('kota_stasiun', true), 
			'provinsi_stasiun' => $this->input->post('provinsi_stasiun', true), 
			'jam_buka' => $this->input->post('jam_buka', true), 
			'jam_tutup' => $this->input->post('jam_tutup', true), 
		);
		$this->db->insert('stasiun', $data);
	}
	public function hapusStasiun($kode_stasiun)
	{
		$this->db->where('kode_stasiun', $kode_stasiun);
		$this->db->delete('stasiun');
	}
	public function editStasiun($kode_stasiun)
	{
		$data = array(
			'nama_stasiun' => $this->input->post('nama_stasiun', true), 
			'kota_stasiun' => $this->input->post('kota_stasiun', true), 
			'provinsi_stasiun' => $this->input->post('provinsi_stasiun', true), 
			'jam_buka' => $this->input->post('jam_buka', true), 
			'jam_tutup' => $this->input->post('jam_tutup', true), 
		);
		$this->db->where('kode_stasiun', $kode_stasiun);
		$this->db->update('stasiun', $data);
	}
	public function getStasiunByKode($kode_stasiun)
	{
		return $this->db->get_where('stasiun', array('kode_stasiun' => $kode_stasiun)) -> row_array();
	}
}

/* End of file stasiun_model.php */
/* Location: ./application/models/stasiun_model.php */

?>