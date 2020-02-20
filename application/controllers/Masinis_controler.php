<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masinis_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 'superadmin') {
      		redirect('Home_controler');
      	}
		$this->load->model('masinis_model');
		$this->load->database();
	}
	public function lihat_masinis()
	{
		$data['masinis'] = $this->masinis_model->getTabelMasinis();

		$this->load->view('template/header_view');
		$this->load->view('homeMasinis/tabel_masinis', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahMasinis()
	{
		$this->form_validation->set_rules('nama_masinis', 'nama_masinis', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('alamat_masinis', 'alamat_masinis', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('nohp_masinis', 'nohp_masinis', array('required', 'max_length[15]'));		
		$this->form_validation->set_rules('email_masinis', 'email_masinis', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homeMasinis/viewTambahMasinis');
			$this->load->view('template/footer_view');
		} else {
			$this->masinis_model->tambahMasinis();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Masinis_controler/lihat_masinis');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
	public function hapusMasinis($id_masinis)
	{
		$this->masinis_model->hapusMasinis($id_masinis);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('Masinis_controler/lihat_masinis');
		//echo '<script> alert("berhasil dihapus");</script>';
	}
	public function editMasinis($id_masinis)
	{
		$data['masinis'] = $this->masinis_model->getMasinisByID($id_masinis);

		$this->form_validation->set_rules('nama_masinis', 'nama_masinis', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('alamat_masinis', 'alamat_masinis', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('nohp_masinis', 'nohp_masinis', array('required', 'max_length[15]'));		
		$this->form_validation->set_rules('email_masinis', 'email_masinis', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {			
			$this->load->view('template/header_view');
			$this->load->view('homeMasinis/viewEditMasinis', $data);
			$this->load->view('template/footer_view');
		} else {
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// die();
			$this->masinis_model->editMasinis($id_masinis);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('Masinis_controler/lihat_masinis');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
		// $this->load->view('template/header_view');
		// $this->load->view('homeKereta/viewTambahKereta');
		// $this->load->view('template/footer_view');
	}
}

/* End of file Masinis_controler.php */
/* Location: ./application/controllers/Masinis_controler.php */
?>