<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function getTabelTransaksi()
	{
		$this->db->select('a.no_penumpang as no_penumpang, b.pemberhentian as pemberhentian, 
			c.stasiun_awal as stasiun_awal, 
			a.no_ktp as no_ktp, a.nama_wali as nama_wali, c.id_kereta as id_kereta1, 
			c.nama_kereta as nama_kereta, d.id_kursi as id_kursi, a.id_jadwal as id_jadwal, 
			a.tgl_pesan as tgl_pesan');
		$this->db->from('transaksi as a');
		$this->db->join('jadwal as b', 'b.id_jadwal = a.id_jadwal');
		$this->db->join('kereta as c', 'c.id_kereta = b.id_kereta');
		$this->db->join('kursi as d', 'a.no_ktp = d.no_ktp', 'left');
		$q = $this->db->get();
		return $q -> result_array();

		// return $this->db->get('transaksi') -> result_array();
	}	

	public function getNoKTPbyID($no_ktp)
	{
		$this->db->select('no_ktp, nama_penumpang');
		$this->db->from('penumpang');
		$this->db->where('no_ktp', $no_ktp);
		$q = $this->db->get();
		return $q -> result_array();
	}
	public function getJadwalbyID($id_jadwal)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('kereta', 'kereta.id_kereta = jadwal.id_kereta');
		$this->db->join('stasiun', 'stasiun.nama_stasiun = jadwal.pemberhentian');
		$this->db->where('id_jadwal', $id_jadwal);
		$q = $this->db->get();
		return $q -> row_array();
		// return $this->db->get_where('jadwal', array('id_jadwal' => $id_jadwal)) -> row_array(); 
		// update jadwal set qty = (select qty where id_jadwal = $id_jadwal)-1 where id_jadwal = $id_jadwal
	}
	public function tambahTransaksiBeneran($id_jadwal)
	{
		$data = array(
			'no_ktp' => $this->input->post('no_ktp', true), 
			'nama_wali' => $this->input->post('nama_wali', true), 
			'id_jadwal' => $this->input->post('id_jadwal', true), 
			'tgl_pesan' => $this->input->post('tgl_pesan', true), 
		);
		$this->db->insert('transaksi', $data);

		$data1 = array(
			'no_ktp' => $this->input->post('no_ktp', true), 
			'id_jadwal' => $this->input->post('id_jadwal', true),
		);
		$this->db->insert('kursi', $data1);
	}
	public function updateJadwal($id_jadwal)
	{
		$this->db->query("update id_jadwal");
	}
}

/* End of file transaksi_model.php */
/* Location: ./application/models/transaksi_model.php */
?>