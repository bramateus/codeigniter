<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


	
	public function index($indice=null)
	{

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar');
		$this->load->view('includes/html_footer');

		if($indice==1) {
			$data['msg'] = "Usuario cadastrado com sucesso.";
			$this->load->view('includes/msg_sucesso',$data);

		}else if($indice==2){

			$data['msg'] = "Usuario cadastrado sem sucesso.";
			$this->load->view('includes/msg_erro',$data); 
		}
	}


	public function cadastrar()
	{
		echo "CAIU NO METODO CADASTRAR";
		$data['nome'] = $this->input->post('nome'); 
		$data['senha'] = $this->input->post('senha'); 

		if ($this->db->insert('usu',$data)) {
			redirect('Dashboard/1');
		}else
			redirect('Dashboard/2');

	}

	}

	public function remover($id) {
		// echo "caiu no alterar".$id;

		$this->db->select('*');
		$this->db->from('usu');
		$this->db->where('id_usu', $id);
		$this->db->delete('usu');

		redirect ('dashboard');
		// $dados['user'] = $this->db->get('usuario')->result();



		
		

	}

}

