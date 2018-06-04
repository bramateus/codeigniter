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


	public function cadastrar()
	{
		echo "CAIU NO METODO CADASTRAR";
		$data['nome'] = $this->input->post('nome'); 
		$data['senha'] = $this->input->post('senha'); 

	// 	if ($this->db->insert('usuario',$data)) {
	// 		redirect('Dashboard/1');
	// 	}else
	// 		redirect('Dashboard/2')

	// }

	}

	public function remover($id) {
		// echo "caiu no alterar".$id;

		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('id', $id);
		$this->db->delete('usuario');

		redirect ('dashboard');
		// $dados['user'] = $this->db->get('usuario')->result();



		
		

	}

}

