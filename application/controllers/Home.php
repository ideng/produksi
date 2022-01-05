<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('komponen/header');
		$this->load->view('komponen/sidebar');
		$this->load->view('dashboard');
		$this->load->view('komponen/footer');
	}
}
