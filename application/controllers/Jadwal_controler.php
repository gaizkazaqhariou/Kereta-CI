<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') == '') {
      		redirect('Login_controler');
      	}
		$this->load->model('jadwal_model');
		$this->load->database();
	}

	public function lihat_jadwal()
	{
		$data['jadwal'] = $this->jadwal_model->getTabelJadwal();

		$this->load->view('template/header_view');
		$this->load->view('homeJadwal/tabel_jadwal', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahJadwal()
	{
		$this->load->model('kereta_model');
		$data['kereta'] = $this->jadwal_model->getNamaKereta();
		$data['stasiun'] = $this->kereta_model->getNamaStasiun();

		$this->form_validation->set_rules('id_kereta', 'id_kereta', array('required', 'min_length[1]'));
		$this->form_validation->set_rules('pemberhentian', 'pemberhentian', array('required', 'min_length[1]'));
		$this->form_validation->set_rules('harga', 'harga', array('required', 'max_length[8]', 'numeric'));
		$this->form_validation->set_rules('jam_datang', 'jam_datang', array('required', 'max_length[10]'));
		$this->form_validation->set_rules('jam_berangkat', 'jam_berangkat', array('required', 'max_length[10]'));
		$this->form_validation->set_rules('qty', 'qty', array('required', 'max_length[4]', 'numeric'));

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homeJadwal/viewTambahJadwal', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->jadwal_model->tambahJadwal();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Jadwal_controler/lihat_jadwal');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
		// $this->load->view('template/header_view');
		// $this->load->view('homeKereta/viewTambahKereta');
		// $this->load->view('template/footer_view');
	}
	public function editJadwal($id_jadwal)
	{
		$this->load->model('kereta_model');
		$data['jadwal'] = $this->jadwal_model->getJadwalByID($id_jadwal);		
		$data['kereta'] = $this->jadwal_model->getNamaKereta();
		$data['stasiun'] = $this->kereta_model->getNamaStasiun();

		$this->form_validation->set_rules('id_kereta', 'id_kereta', array('required', 'min_length[1]'));
		$this->form_validation->set_rules('pemberhentian', 'pemberhentian', array('required', 'min_length[1]'));
		$this->form_validation->set_rules('harga', 'harga', array('required', 'max_length[8]', 'numeric'));
		$this->form_validation->set_rules('jam_datang', 'jam_datang', array('required', 'max_length[10]'));
		$this->form_validation->set_rules('jam_berangkat', 'jam_berangkat', array('required', 'max_length[10]'));
		$this->form_validation->set_rules('qty', 'qty', array('required', 'max_length[4]', 'numeric'));
		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homeJadwal/viewEditJadwal', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->jadwal_model->ubahJadwal($id_jadwal);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('Jadwal_controler/lihat_jadwal');
			//echo '<script> alert("berhasil diedit");</script>';
		}
	}
}

/* End of file Jadwal_controler.php */
/* Location: ./application/controllers/Jadwal_controler.php */
?>