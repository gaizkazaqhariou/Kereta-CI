<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penumpang_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 'petugas') {
      		redirect('Home_controler');
      	}
		$this->load->model('penumpang_model');
		$this->load->database();
	}

	public function lihat_penumpang()
	{
		$data['penumpang'] = $this->penumpang_model->getTabelPenumpang();
		if ($this->input->post('keyword')) {
			$data['penumpang'] = $this->penumpang_model->cariDataPenumpang();
		}
		$this->load->view('template/header_view');
		$this->load->view('homePenumpang/tabel_penumpang', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahPenumpang()
	{
		$this->form_validation->set_rules('nama_penumpang', 'nama_penumpang', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('alamat_penumpang', 'alamat_penumpang', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('nohp_penumpang', 'nohp_penumpang', array('required', 'max_length[15]'));		
		$this->form_validation->set_rules('email_penumpang', 'email_penumpang', 'required|valid_email');				

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homePenumpang/viewTambahPenumpang');
			$this->load->view('template/footer_view');
		} else {
			$this->penumpang_model->tambahPenumpang();
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Penumpang_controler/lihat_penumpang');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
	public function hapusPenumpang($no_ktp)
	{
		$this->penumpang_model->hapusPenumpang($no_ktp);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('Penumpang_controler/lihat_penumpang');
		//echo '<script> alert("berhasil dihapus");</script>';
	}
	public function editPenumpang($no_ktp)
	{
		$data['penumpang'] = $this->penumpang_model->getPenumpangByID($no_ktp);

		$this->form_validation->set_rules('nama_penumpang', 'nama_penumpang', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('alamat_penumpang', 'alamat_penumpang', array('required', 'max_length[100]'));
		$this->form_validation->set_rules('nohp_penumpang', 'nohp_penumpang', array('required', 'max_length[15]'));		
		$this->form_validation->set_rules('email_penumpang', 'email_penumpang', 'required|valid_email');				

		if ($this->form_validation->run() == FALSE) {
			
			$this->load->view('template/header_view');
			$this->load->view('homePenumpang/viewEditPenumpang', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->penumpang_model->editPenumpang($no_ktp);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('Penumpang_controler/lihat_penumpang');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
}

/* End of file Penumpang_controler.php */
/* Location: ./application/controllers/Penumpang_controler.php */
?>