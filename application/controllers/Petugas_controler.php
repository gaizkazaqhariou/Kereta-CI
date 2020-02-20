<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') == '') {
      		redirect('Login_controler');
      	}
		$this->load->model('petugas_model');
		$this->load->database();
	}

	public function lihat_petugas()
	{
		$data['petugas'] = $this->petugas_model->getTabelPetugas();

		$this->load->view('template/header_view');
		$this->load->view('homePetugas/tabel_petugas', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahPetugas()
	{
		$this->form_validation->set_rules('nama_petugas', 'nama_petugas', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('alamat_petugas', 'alamat_petugas', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('nohp_petugas', 'nohp_petugas', array('required', 'max_length[15]'));		
		$this->form_validation->set_rules('bagian_tugas', 'bagian_tugas', array('required', 'max_length[50]'));				

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homePetugas/viewTambahPetugas');
			$this->load->view('template/footer_view');
		} else {
			$this->petugas_model->tambahPetugas();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Petugas_controler/lihat_petugas');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
	public function hapusPetugas($no_petugas)
	{
		$this->petugas_model->hapusPetugas($no_petugas);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('Petugas_controler/lihat_petugas');
		//echo '<script> alert("berhasil dihapus");</script>';
	}
	public function editPetugas($no_petugas)
	{
		$data['petugas'] = $this->petugas_model->getPetugasByID($no_petugas);

		$this->form_validation->set_rules('nama_petugas', 'nama_petugas', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('alamat_petugas', 'alamat_petugas', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('nohp_petugas', 'nohp_petugas', array('required', 'max_length[15]'));		
		$this->form_validation->set_rules('bagian_tugas', 'bagian_tugas', array('required', 'max_length[50]'));					

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homePetugas/viewEditPetugas', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->petugas_model->editPetugas($no_petugas);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('Petugas_controler/lihat_petugas');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
}

/* End of file Petugas_controler.php */
/* Location: ./application/controllers/Petugas_controler.php */

?>