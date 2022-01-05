<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bbm extends CI_Controller {

	
	public function index()
	{
		$this->load->view('komponen/header');
		$this->load->view('komponen/sidebar');
        $this->load->view('v_bbm');
		$this->load->view('komponen/footer');
	}
}
