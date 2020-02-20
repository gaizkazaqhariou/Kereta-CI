<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') != 'petugas') {
      		redirect('Home_controler');
      	}
		$this->load->model('transaksi_model');
		$this->load->database();
	}

	public function lihat_transaksi()
	{
		$data['transaksi'] = $this->transaksi_model->getTabelTransaksi();

		$this->load->view('template/header_view');
		$this->load->view('homeTransaksi/tabel_transaksi', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahTransaksi()
	{
		$this->load->model('jadwal_model');
		$data['jadwal'] = $this->jadwal_model->getTabelJadwal();

		$this->load->view('template/header_view');
		$this->load->view('homeTransaksi/viewTambahTransaksi', $data);
		$this->load->view('template/footer_view');
	}
	public function tambahDetailTransaksi($id_jadwal, $no_ktp)
	{
		$data['no_ktp'] = $this->transaksi_model->getNoKTPbyID($no_ktp);
		$data['jadwal'] = $this->transaksi_model->getJadwalbyID($id_jadwal);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();		
		$this->form_validation->set_rules('no_ktp', 'no_ktp', array('required', 'max_length[17]'));				
		$this->form_validation->set_rules('nama_wali', 'nama_wali', array('required', 'max_length[100]'));				
		$this->form_validation->set_rules('id_jadwal', 'id_jadwal', array('required', 'max_length[5]'));				
		$this->form_validation->set_rules('tgl_pesan', 'tgl_pesan', 'required');				

		if ($this->form_validation->run() == FALSE) {			
			$this->load->view('template/header_view');
			$this->load->view('homeTransaksi/viewDetailTambahTransaksi', $data);
			$this->load->view('template/footer_view');
		} else {
			$this->transaksi_model->tambahTransaksiBeneran($id_jadwal);
			$this->transaksi_model->updateJadwal($id_jadwal);
			$this->session->set_flashdata('flash-data', 'ditambah');
			redirect('Transaksi_controler/lihat_transaksi');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
	}
	public function pilih_penumpang($id_jadwal)
	{
		$this->load->model('penumpang_model');
		$data['jadwal'] = $this->transaksi_model->getJadwalbyID($id_jadwal);
		$data['penumpang'] = $this->penumpang_model->getTabelPenumpang();

		$this->load->view('template/header_view');
		$this->load->view('homeTransaksi/viewPilihPenumpang', $data);
		$this->load->view('template/footer_view');
	}
	// public function tambahTransaksiBeneran()
	// {	
	// 	$this->form_validation->set_rules('no_ktp', 'no_ktp', array('required', 'max_length[17]'));				
	// 	$this->form_validation->set_rules('nama_wali', 'nama_wali', array('required', 'max_length[100]'));				
	// 	$this->form_validation->set_rules('id_jadwal', 'id_jadwal', array('required', 'max_length[5]'));				
	// 	$this->form_validation->set_rules('tgl_pesan', 'tgl_pesan', 'required');				

	// 	if ($this->form_validation->run() == FALSE) {
			
	// 		$this->load->view('template/header_view');
	// 		$this->load->view('homeTransaksi/tabel_transaksi');
	// 		$this->load->view('template/footer_view');
	// 	} else {
	// 		$this->transaksi_model->tambahTransaksiBeneran();
	// 		$this->session->set_flashdata('flash-data', 'ditambah');
	// 		redirect('Transaksi_controler/lihat_transaksi');
	// 		//echo '<script> alert("berhasil ditambahkan");</script>';
	// 	}
	// }
	// public function tambahPetugas()
	// {
	// 	$this->form_validation->set_rules('nama_petugas', 'nama_petugas', array('required', 'max_length[100]'));
	// 	$this->form_validation->set_rules('alamat_petugas', 'alamat_petugas', array('required', 'max_length[100]'));
	// 	$this->form_validation->set_rules('nohp_petugas', 'nohp_petugas', array('required', 'max_length[15]'));		
	// 	$this->form_validation->set_rules('bagian_tugas', 'bagian_tugas', array('required', 'max_length[50]'));				

	// 	if ($this->form_validation->run() == FALSE) {
			
	// 		$this->load->view('template/header_view');
	// 		$this->load->view('homePetugas/viewTambahPetugas');
	// 		$this->load->view('template/footer_view');
	// 	} else {
	// 		$this->petugas_model->tambahPetugas();
	// 		$this->session->set_flashdata('flash-data', 'ditambah');
	// 		redirect('Petugas_controler/lihat_petugas');
	// 		//echo '<script> alert("berhasil ditambahkan");</script>';
	// 	}
	// }

	public function laporan_pdf($no_penumpang)
    {
        $this->load->library('pdf');
        $this->load->model('cetak_model');
        $data['tiket']= $this->cetak_model->getTiket($no_penumpang);
       

        $this->pdf->setPaper('A4','landscape');
        $this->pdf->filename = "tiket.pdf";
        $this->pdf->load_view('homeTransaksi/laporan', $data);
    }
}

/* End of file Transaksi_controler.php */
/* Location: ./application/controllers/Transaksi_controler.php */
?>