<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

	public function getTiket($no_penumpang)
	{
		$this->db->select('a.no_penumpang as no_penumpang, b.pemberhentian as pemberhentian, 
			c.stasiun_awal as stasiun_awal, 
			a.no_ktp as no_ktp, a.nama_wali as nama_wali, c.id_kereta as id_kereta1, b.harga as harga,
			c.nama_kereta as nama_kereta, d.id_kursi as id_kursi, a.id_jadwal as id_jadwal, 
			a.tgl_pesan as tgl_pesan');
		$this->db->from('transaksi as a');
		$this->db->join('jadwal as b', 'b.id_jadwal = a.id_jadwal');
		$this->db->join('kereta as c', 'c.id_kereta = b.id_kereta');
		$this->db->join('kursi as d', 'a.no_ktp = d.no_ktp', 'left');
		$this->db->where('no_penumpang', $no_penumpang);
		$q = $this->db->get();
		return $q -> result_array();

		// return $this->db->get('transaksi') -> result_array();
	}		

}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */
?>