<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controler extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('template/header_login');
		$this->load->view('homeLogin/viewLogin');
		$this->load->view('template/footer_login');		
	}
      public function register()
      {
            $this->form_validation->set_rules('username', 'username', array('required', 'max_length[100]'));
            $this->form_validation->set_rules('password', 'password', array('required', 'max_length[100]'));                       

            if ($this->form_validation->run() == FALSE) {
                  
                  $this->load->view('template/header_login');
                  $this->load->view('homeLogin/viewRegister');
                  $this->load->view('template/footer_login');  
            } else {
                  $this->login_model->tambahUser();
                  $this->session->set_flashdata('flash-data', 'ditambah');
                  redirect('Login_controler/index');
                  //echo '<script> alert("berhasil ditambahkan");</script>';
            }            
      }
	public function doLogin()
	{
		$username = htmlspecialchars($this->input->post('username'));
      	$password = htmlspecialchars($this->input->post('password'));

      	$cek = $this->login_model->login($username, $password);

      	if ($cek) {
      		foreach ($cek as $key) {
      			$this->session->set_userdata('user', $key->username);
      			$this->session->set_userdata('level',$key->level);
      			$this->session->set_userdata('status',$key->status);
      		}
      		// ---------------------------------------------------------
      		if ($this->session->userdata('level') == 'superadmin') {

      			redirect('Home_controler');
                        
      		} else if ($this->session->userdata('level') == 'petugas'){

      			if ($this->session->userdata('status') == 'request') {

      				$this->session->set_flashdata('message', 'Hubungi Admin Untuk Izin Login !');
      				redirect('Login_controler');

      			} else if ($this->session->userdata('status') == 'denied') {

      				$this->session->set_flashdata('message', 'Hubungi Admin Untuk Izin Login ! (082142780084)');
      				redirect('Login_controler');

      			} else {

      				redirect('Home_controler');

      			}
      		}
      		// ---------------------------------------------------------
      	} else {
      		$this->session->set_flashdata('message', 'Password salah !');
      		redirect('Login_controler');
      	}
	}
	public function logout()
	{
		session_destroy();
		redirect('Login_controler');
	}
}

/* End of file Login_controler.php */
/* Location: ./application/controllers/Login_controler.php */
?>