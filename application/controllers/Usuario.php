<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


	
	public function index()
	{

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar');
		$this->load->view('includes/html_footer');
	}
}
