<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 'superadmin') {
      		redirect('Home_controler');
      	}
		$this->load->model('kereta_model');
		$this->load->database();
	}
	public function lihat_kereta()
	{
		$data['kereta'] = $this->kereta_model->getTabelKereta();

		$this->load->view('template/header_view');
		$this->load->view('homeKereta/tabel_kereta', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahKereta()
	{
		$data['stasiun'] = $this->kereta_model->getNamaStasiun();
		$data['tipe_kereta'] = array("Eksekutif","Bisnis","Ekonomi");

		$this->form_validation->set_rules('nama_kereta', 'nama_kereta', array('required', 'min_length[4]'));
		$this->form_validation->set_rules('jml_gerbong', 'jml_gerbong', array('required', 'max_length[2]', 'numeric'));
		$this->form_validation->set_rules('thn_pembuatan', 'thn_pembuatan', array('required', 'max_length[4]', 'numeric'));

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homeKereta/viewTambahKereta', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->kereta_model->tambahKereta();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Kereta_controler/lihat_kereta');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
		// $this->load->view('template/header_view');
		// $this->load->view('homeKereta/viewTambahKereta');
		// $this->load->view('template/footer_view');
	}
	public function hapusKereta($id_kereta)
	{
		$this->kereta_model->hapusKereta($id_kereta);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('Kereta_controler/lihat_kereta');
		//echo '<script> alert("berhasil dihapus");</script>';
	}
	public function editKereta($id_kereta)
	{
		$data['kereta'] = $this->kereta_model->getKeretaByID($id_kereta);
		$data['stasiun'] = $this->kereta_model->getNamaStasiun();
		$data['tipe_kereta'] = array("Eksekutif","Bisnis","Ekonomi");

		$this->form_validation->set_rules('nama_kereta', 'nama_kereta', array('required', 'min_length[4]'));
		$this->form_validation->set_rules('jml_gerbong', 'jml_gerbong', array('required', 'max_length[2]', 'numeric'));
		$this->form_validation->set_rules('tipe_kereta', 'tipe_kereta', array('required', 'min_length[2]'));
		$this->form_validation->set_rules('thn_pembuatan', 'thn_pembuatan', array('required', 'max_length[4]', 'numeric'));
		$this->form_validation->set_rules('stasiun_awal', 'stasiun_awal', array('required', 'min_length[1]'));

		if ($this->form_validation->run() == FALSE) {			
			$this->load->view('template/header_view');
			$this->load->view('homeKereta/viewEditKereta', $data);
			$this->load->view('template/footer_view');
		} else {
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// die();
			$this->kereta_model->editKereta($id_kereta);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('Kereta_controler/lihat_kereta');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
		// $this->load->view('template/header_view');
		// $this->load->view('homeKereta/viewTambahKereta');
		// $this->load->view('template/footer_view');
	}
}

/* End of file Kereta_controler.php */
/* Location: ./application/controllers/Kereta_controler.php */
?>