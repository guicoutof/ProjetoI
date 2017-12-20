<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function adicionar(){
        //var_dump($this->input->post());die;

        // nome,endereco,cidade,estado,pais,inicio,fim,hr ini, hr fim,n max inscri, descri, imagens

        $data['nome'] = $this->input->post("eventonome");
        $data['endereco'] = $this->input->post("eventoendereco");// pega via post o email que venho do formulario
        $data['cidade'] = $this->input->post("eventocidade"); // pega via post a senha que venho do formulario
        $data['estado'] = $this->input->post("eventoestado");
        $data['pais'] = $this->input->post("eventopais");
        $data['data_Ini'] = $this->input->post("eventoinicio");
        $data['data_Fim'] = $this->input->post("eventofim");
        $data['hora_Ini'] = $this->input->post("eventohini");
        $data['hora_Fim'] = $this->input->post("eventohfim");
        $data['nmax_inscritos'] = $this->input->post("nmax");
        $data['descricao'] = $this->input->post("descricao");
        $data['valor'] = $this->input->post("valor");
        $data['id_criador'] = $this->session->userdata('id');
        //$data['Imagens'] = $this->input->post("pacientepais");
        //$data['Criador_Evento'] = $this->input->post("");


        $this->load->model("Evento_model");// chama o modelo 
        $status = $this->Evento_model->adicionarEvento($data);

        if($status){
            echo "<script>alert('Evento criado')</script>";
            redirect('Participante/area');
        }else{
            echo "<script>alert('Evento não pode ser criado')</script>";
           header("refresh: 5;");
        }
 
 

    }

    public function index(){
        $this->load->view('html-header');
        $this->load->view('header');
        $this->load->view('evento/criarevento');
        $this->load->view('footer');
        $this->load->view('html-footer');
    }

    public function registrarParticipante(){
        // JA APROVADO O PAGAMENTO

        $data['id_participante'] = $this->session->userdata('id');
        $data['nome_participante'] = $this->session->userdata('nome');
        $data['email_participante'] = $this->session->userdata('email');
        $data['id_evento'] = $_SESSION['id_evento'];

        $this->load->model('Evento_model');
        $status = $this->Evento_model->registrarParticipante('data');

        if($status){
            echo 'Participante confirmado';
        }else{
            echo 'Participante nao confirmado';
        }
        
    }


    public function realizarPagamento(){
        $this->load->view('html-header');
        $this->load->view('header');
        $this->load->view('evento/pagamento');
        $this->load->view('footer');
        $this->load->view('html-footer');
    }


    public function pagamentoBoleto(){

        redirect(base_url('Evento/registrarParticipante'));

    }

    public function pagamentoCartao(){

        redirect(base_url('Evento/registrarParticipante'));

    }



}