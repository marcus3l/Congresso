<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Palestrantes_model');
        $this->load->model('Areas_model');
        $this->load->model('Subareas_model');
        $this->load->model('Salas_model');
        $this->load->model('Ref_tipo_programacao_model');
        $this->load->model('Programacao_model');
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function comissao()
    {
        $this->load->view('comissao');
    }

    public function evento()
    {
        $this->load->view('evento');
    }

    public function trabalhos()
    {
        $this->load->view('trabalhos');
    }

    public function programacao()
    {

        $programacao = $this->Programacao_model->list(['status' => 1], null, null, ['column' => 'data_inicio', 'type_order' => 'ASC']);

        $data['programacao'] = array();
        foreach ($programacao  as $pr) {
            array_push($data['programacao'], getProgramacaoCompleta($pr->id));
        }

        $data['salas']      = $this->Salas_model->list(['status' => 1]);
        $data['areas']      = $this->Areas_model->list(['status' => 1]);
        $data['subareas'] = $this->Subareas_model->list(['status' => 1]);
        $data['tipo_programacao'] = $this->Ref_tipo_programacao_model->list(['status' => 1]);

        $this->load->view('programacao', $data);
    }

    public function palestrantes()
    {
        $data['palestrantes'] = $this->Palestrantes_model->list();
        $this->load->view('palestrantes', $data);
    }

    public function patrocinadores()
    {
        $this->load->view('patrocinadores');
    }
}
