<?php
class News extends CI_Controller {


	public function __construct() {
		parent::__construct(); {
			$this->load->model('news_model');
			// $this->load->helper('url_helper');
		}
	}





	public function index() {
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'Todas as noticias';

		$this->load->view('templates/html_header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/html_footer', $data);
	}


	public function view($uri) {
		$data['news_item'] = $this->news_model->get_news($uri);

		if (empty($data['news_item'])) {
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('templates/html_header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/html_footer', $data);
	}

}