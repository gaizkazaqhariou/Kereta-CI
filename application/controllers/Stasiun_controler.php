<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stasiun_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 'superadmin') {
      		redirect('Home_controler');
      	}
		$this->load->model('stasiun_model');
		$this->load->database();
	}

	public function lihat_stasiun()
	{
		$data['stasiun'] = $this->stasiun_model->getTabelStasiun();

		$this->load->view('template/header_view');
		$this->load->view('homeStasiun/tabel_stasiun', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahStasiun()
	{
		$data['provinsi_stasiun'] = 
			array(
				"Banten",
				"Jakarta",
				"Jawa Barat",
				"Jawa Tengah",
				"Jawa Timur",
				"Yogyakarta",
			);

		$this->form_validation->set_rules('nama_stasiun', 'nama_stasiun', array('required', 'max_length[100]'));	
		$this->form_validation->set_rules('kota_stasiun', 'kota_stasiun', array('required', 'max_length[100]'));	
		$this->form_validation->set_rules('jam_buka', 'jam_buka', array('required', 'max_length[10]'));				
		$this->form_validation->set_rules('jam_tutup', 'jam_tutup', array('required', 'max_length[10]'));				

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homeStasiun/viewTambahStasiun', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->stasiun_model->tambahStasiun();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Stasiun_controler/lihat_stasiun');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
	public function hapusStasiun($nama_stasiun)
	{
		$this->stasiun_model->hapusStasiun($nama_stasiun);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('Stasiun_controler/lihat_stasiun');
		//echo '<script> alert("berhasil dihapus");</script>';
	}
	public function editStasiun($kode_stasiun)
	{
		$data['provinsi_stasiun'] = 
			array(
				"Banten",
				"Jakarta",
				"Jawa Barat",
				"Jawa Tengah",
				"Jawa Timur",
				"Yogyakarta",
			);
		$data['stasiun'] = $this->stasiun_model->getStasiunByKode($kode_stasiun);

		$this->form_validation->set_rules('nama_stasiun', 'nama_stasiun', array('required', 'max_length[100]'));	
		$this->form_validation->set_rules('kota_stasiun', 'kota_stasiun', array('required', 'max_length[100]'));	
		$this->form_validation->set_rules('jam_buka', 'jam_buka', array('required', 'max_length[10]'));				
		$this->form_validation->set_rules('jam_tutup', 'jam_tutup', array('required', 'max_length[10]'));					

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homeStasiun/viewEditStasiun', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->stasiun_model->editStasiun($kode_stasiun);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('Stasiun_controler/lihat_stasiun');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
}

/* End of file Stasiun_controler.php */
/* Location: ./application/controllers/Stasiun_controler.php */

?>