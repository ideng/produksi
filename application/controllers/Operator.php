<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	
	public function index()
	{
		$this->load->view('komponen/header');
		$this->load->view('komponen/sidebar');
        $this->load->view('v_operator');
		$this->load->view('komponen/footer');
	}
}
