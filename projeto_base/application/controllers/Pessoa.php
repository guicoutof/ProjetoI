<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Pessoa_model');
	}

	public function logar(){
		$dados['email'] = $this->input->post('email');
		$dados['senha'] = $this->input->post('senha');

		$this->load->model('Pessoa_model');
		$result = $this->Pessoa_model->logar($dados);

		if(count($result) == 0){
			echo "<script>alert('Usuário ou senha inválido')</script>";
			redirect('home');
		}
		else{

			$this->load->library('session');

			$userdados  =  array( 
        			'id'   =>  $result['id'] , 
        			'email'      =>  $result['email'] , 
        			'nome'  =>  $result['nome'] 
			);

			$this->session->set_userdata($userdados);


			redirect(base_url('Pessoa/area'));
		}

	}

	public function area(){
		$this->load->model('Evento_model');
		$dados['eventos'] = $this->Evento_model->listAll();

		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('pessoa/area',$dados);
		$this->load->view('footer');
		$this->load->view('html-footer');
	}



	public function cadastro(){

		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('cadastrar');
		$this->load->view('footer');
		$this->load->view('html-footer');

	}


	public function cadastrar(){

			$dados['nome'] = $this->input->post('nome');
			$dados['cpf'] = $this->input->post('cpf');
			$dados['email'] = $this->input->post('email');
			$dados['senha'] = $this->input->post('senha');

			$this->load->model('Pessoa_model');
			if($this->Pessoa_model->inserir($dados)){
				$this->cadastro();
			}
			else{ 
				redirect(base_url());
				
			}

	}


	public function logout(){
		session_destroy();

		redirect(base_url());
	}



}
