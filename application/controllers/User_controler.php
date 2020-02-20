<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->database();
	}

	public function lihat_user()
	{
		$data['user'] = $this->user_model->getTabelUser();

		$this->load->view('template/header_view');
		$this->load->view('homeUser/tabel_user', $data);
		$this->load->view('template/footer_view');
	}
	public function hapusUser($id_user)
	{
		$this->user_model->hapusUser($id_user);
		$this->session->set_flashdata('flash-data', 'dihapus');
		redirect('User_controler/lihat_user');
		//echo '<script> alert("berhasil dihapus");</script>';
	}
	public function editUser($id_user)
	{
		$data['inistatus'] = array("alow","request","denied");
		$data['user'] = $this->user_model->getUserByID($id_user);

		$this->form_validation->set_rules('username', 'username', array('required', 'max_length[100]'));
        $this->form_validation->set_rules('password', 'password', array('required', 'max_length[100]'));  

		if ($this->form_validation->run() == FALSE) {			
			$this->load->view('template/header_view');
			$this->load->view('homeUser/viewEditUser', $data);
			$this->load->view('template/footer_view');
		} else {
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			// die();
			$this->user_model->editUser($id_user);
			$this->session->set_flashdata('flash-data', 'diedit');
			redirect('User_controler/lihat_user');
			//echo '<script> alert("berhasil ditambahkan");</script>';
		}
		// $this->load->view('template/header_view');
		// $this->load->view('homeKereta/viewTambahKereta');
		// $this->load->view('template/footer_view');
	}
}

/* End of file User_controler.php */
/* Location: ./application/controllers/User_controler.php */
?>