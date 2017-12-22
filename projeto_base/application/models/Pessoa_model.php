<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function logar($dados){
		$this->db->where($dados);
		return $this->db->get('pessoa')->row_array();
	}


	public function inserir($dados){
		return $this->db->insert('pessoa',$dados);
	}
	

	public function listar(){
		return $this->db->get('pessoa')->result();
	}


	public function ver($id){
		$this->db->where("id",$id);
		return $this->db->get('pessoa')->result();
	}


	public function alterar($id,$dados){
		$this->db->where("id",$id);
		return $this->db->update("pessoa",$dados);
	}


	public function apagar($id){
		$this->db->where('id',$id);
		return $this->db->delete('pessoa');
	}
	

}