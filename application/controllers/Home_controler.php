<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('level') == '') {
      		redirect('Login_controler');
      	}
	}

	public function index()
	{
		$this->load->model('home_model');
		$this->load->database();

		$data['jml_kereta'] = $this->home_model->getTotalKereta();
		$data['jml_masinis'] = $this->home_model->getTotalMasinis();
		$data['jml_petugas'] = $this->home_model->getTotalPetugas();
		$data['jml_stasiun'] = $this->home_model->getTotalStasiun();
		$data['jml_jadwal'] = $this->home_model->getTotalJadwal();

		$this->load->view('template/header_view');
		$this->load->view('homeAdmin/index', $data);
		$this->load->view('template/footer_view');
	}
}

/* End of file Home_controler.php */
/* Location: ./application/controllers/Home_controler.php */