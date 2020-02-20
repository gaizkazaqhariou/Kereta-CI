<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penumpang_model extends CI_Model {

	public function getTabelPenumpang()
	{
		return $this->db->get('penumpang') -> result_array();
	}	
	public function tambahPenumpang()
	{
		$data = array(
			'no_ktp' => $this->input->post('no_ktp', true), 
			'nama_penumpang' => $this->input->post('nama_penumpang', true), 
			'alamat_penumpang' => $this->input->post('alamat_penumpang', true), 
			'nohp_penumpang' => $this->input->post('nohp_penumpang', true), 
			'email_penumpang' => $this->input->post('email_penumpang', true), 
		);
		$this->db->insert('penumpang', $data);
	}
	public function hapusPenumpang($no_ktp)
	{
		$this->db->where('no_ktp', $no_ktp);
		$this->db->delete('penumpang');
	}
	public function editPenumpang($no_ktp)
	{
		$data = array(
			'no_ktp' => $this->input->post('no_ktp', true), 
			'nama_penumpang' => $this->input->post('nama_penumpang', true), 
			'alamat_penumpang' => $this->input->post('alamat_penumpang', true), 
			'nohp_penumpang' => $this->input->post('nohp_penumpang', true), 
			'email_penumpang' => $this->input->post('email_penumpang', true), 
		);
		$this->db->where('no_ktp', $no_ktp);
		$this->db->update('penumpang', $data);
	}
	public function getPenumpangByID($no_ktp)
	{
		return $this->db->get_where('penumpang', array('no_ktp' => $no_ktp)) -> row_array();
	}
	public function cariDataPenumpang()
	{
        $keyword = $this->input->post("keyword");
        $this->db->like('no_ktp', $keyword);
        $this->db->or_like('nama_penumpang', $keyword);
        return $this->db->get('penumpang') -> result_array();
    }
}

/* End of file penumpang_model.php */
/* Location: ./application/models/penumpang_model.php */
?>