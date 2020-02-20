<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

	public function getTabelPetugas()
	{
		return $this->db->get('petugas') -> result_array();	
	}	
	public function tambahPetugas()
	{
		$data = array(
			'nama_petugas' => $this->input->post('nama_petugas', true), 
			'alamat_petugas' => $this->input->post('alamat_petugas', true), 
			'nohp_petugas' => $this->input->post('nohp_petugas', true), 
			'bagian_tugas' => $this->input->post('bagian_tugas', true), 
		);
		$this->db->insert('petugas', $data);
	}
	public function hapusPetugas($no_petugas)
	{
		$this->db->where('no_petugas', $no_petugas);
		$this->db->delete('petugas');
	}
	public function editPetugas($no_petugas)
	{
		$data = array(
			'nama_petugas' => $this->input->post('nama_petugas', true), 
			'alamat_petugas' => $this->input->post('alamat_petugas', true), 
			'nohp_petugas' => $this->input->post('nohp_petugas', true), 
			'bagian_tugas' => $this->input->post('bagian_tugas', true), 
		);
		$this->db->where('no_petugas', $no_petugas);
		$this->db->update('petugas', $data);
	}
	public function getPetugasByID($no_petugas)
	{
		return $this->db->get_where('petugas', array('no_petugas' => $no_petugas)) -> row_array();
	}
}

/* End of file petugas_model.php */
/* Location: ./application/models/petugas_model.php */
?>