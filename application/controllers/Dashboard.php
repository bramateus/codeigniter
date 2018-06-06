<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{

		$this->db->select('*');
		$dados['user'] = $this->db->get('usu')->result();
	
		// echo "<div>";
		// var_dump($dados['usuarios']);
		// echo "</div>";
		

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('dashboard',$dados);
		$this->load->view('includes/html_footer');
	}


	public function index2()
	{
		$this->load->view('includes/html_header');

	}
}

