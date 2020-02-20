<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getTotalKereta()
	{
		$q=$this->db->get('kereta');
	    $count=$q->result();
	    return count($count);
	}	
	public function getTotalMasinis()
	{
		$q=$this->db->get('masinis');
	    $count=$q->result();
	    return count($count);
	}
	public function getTotalPetugas()
	{
		$q=$this->db->get('petugas');
	    $count=$q->result();
	    return count($count);
	}
	public function getTotalStasiun()
	{
		$q=$this->db->get('stasiun');
	    $count=$q->result();
	    return count($count);
	}
	public function getTotalJadwal()
	{
		$q=$this->db->get('jadwal');
	    $count=$q->result();
	    return count($count);
	}
}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */
?>