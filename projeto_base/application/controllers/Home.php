<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}


	public function index(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

	public function login(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

}
