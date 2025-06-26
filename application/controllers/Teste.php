<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teste extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Palestrantes_model'); // Carregar o modelo corretamente aqui
        $this->load->model('Areas_model'); // Carregar o modelo corretamente aqui
        $this->load->model('Subareas_model'); // Carregar o modelo corretamente aqui
        $this->load->model('Salas_model'); // Carregar o modelo corretamente aqui
        $this->load->model('Ref_tipo_programacao_model'); // Carregar o modelo corretamente aqui
        $this->load->model('Programacao_model'); // Carregar o modelo corretamente aqui
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function inicio()
    {
       var_dump('as');

		$delete = $this->Areas_model->delete( 2 );
    }
}
