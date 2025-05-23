<?php

class Home extends Ci_Controller{
	

	public function index(){
		$this->load->view('Template/header');
		$this->load->view('Template/home');
		$this->load->view('Template/somos');
		$this->load->view('Template/sucediendo');
		$this->load->view('Template/cafes');
		$this->load->view('Template/contactos');
		$this->load->view('Template/footer');
	}
}

?>