<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "inicio";
	}

	public function index()
	{
		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/inicio', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}
}
