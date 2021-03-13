<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();   
		$this->load->model('m_pin','pin'); 
		 
	}

	public function index()
	{  
		$this->load->view('login');
	}

	public function cek_pin(){
		$pass1 = $this->input->post('pass1');
		$pass2 = $this->input->post('pass2');
		$pass3 = $this->input->post('pass3');
		$pass4 = $this->input->post('pass4');
		$pass5 = $this->input->post('pass5');
		$pass6 = $this->input->post('pass6');
		$password = $pass1.$pass2.$pass3.$pass4.$pass5.$pass6;
		$cek = $this->pin->get(['pin'=>$password]);

		echo json_encode($cek);
	}
 
}
