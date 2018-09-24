<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerUtama extends CI_Controller {

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('V_HalamanUtama.php');
	}
}
