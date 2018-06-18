<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function view($page = 'home')	{

		if (!file_exists(APPPATH. 'views/pages/'.$page.'.php')) {
			show_404();
		}

		else {

		$data['title'] = ucfirst($page);
		

		$this->load->view('templates/html_header', $data);

		$this->load->view('pages/'.$page, $data);

		$this->load->view('templates/html_footer', $data); }

	}
}

