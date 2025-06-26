<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends MY_Controller {

	protected $dados;

	public function __construct()
	{
		parent::__construct();
		die('sem permissão');

		if (   $this->session->userdata('usuario_logado')['usuario'] != 'lucas.pereira' 
			&& $this->session->userdata('usuario_logado')['usuario'] != 'rafael.fontes'
			&& $this->session->userdata('usuario_logado')['usuario'] != 'marcos.prado'
		){
			die('sem permissão');
		}

		$this->dados = array();
		//$this->dados['permissoes']	    = $this->checkPermission( get_called_class(), debug_backtrace()[0]['object']->router->method );   
		$this->dados['menu_ativo'] 		= "";
		$this->dados['sub_menu_ativo'] 	= "";
		$this->dados['breadcrumb']		= "";
		$this->dados['nome_pagina']		= "Migrations";
		
        $this->load->library('migration');
		$this->load->model('dev/migrations_model', 'migrations_model');
	}

	public function index()
    {
		$this->dados['botao_cabecalho']	 = ['cor' => 'bg-info-700' ,'label' => "Criar Migration" ];

        $this->dados['migrations_arquivos'] 	=  $this->migration->find_migrations();
        $this->dados['migrations_versao_atual'] =  $this->migrations_model->list() !== null ? $this->migrations_model->list()[0]->version : 'não encontrado';

		$this->load->view('dev/migrations/index', 	$this->dados);

	}
	
	public function teste()
    {
		$this->dados['botao_cabecalho']	 = ['cor' => 'bg-info-700' ,'label' => "Criar Migration" ];

        $this->dados['migrations_arquivos'] 	=  $this->migration->find_migrations();
        $this->dados['migrations_versao_atual'] =  $this->migrations_model->list() !== null ? $this->migrations_model->list()[0]->version : 'não encontrado';

		$this->load->view('dev/migrations/index', 	$this->dados);

    }

    public function execute($migration = null)
    {
        if ($this->migration->version( $migration ) === FALSE)
        {
            show_error($this->migration->error_string());
            exit();
        }
        redirect('dev/migrate');
	}
	

}