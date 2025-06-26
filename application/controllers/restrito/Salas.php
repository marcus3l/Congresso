<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salas extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "salas";

        $this->load->model('Salas_model', 'salas_model');
	}

	public function index()
	{
		$this->dados['salas'] = $this->salas_model->list();

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/salas', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function formulario($id_sala = null) 
	{
		if(!is_null($id_sala)){
			$id_sala = base64_decode($id_sala);
			$this->dados['edit'] = $this->salas_model->list(['id' => $id_sala]);
		}
		
		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_salas', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function salvar(){

		$config = array(
            array(
                'field' => 'nome',
                'label' => 'nome',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Campo obrigatório.',
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->formulario();
        }else{

			$sala['nome']      	= $this->input->post('nome');
            $sala['capacidade'] = $this->input->post('capacidade') ?? '';
            
			if (  $this->input->post('id') != "" ){
				$id_sala = $this->input->post('id');	
				$this->salas_model->update( $sala, $id_sala);
			}else{
				$id_sala = $this->salas_model->insert($sala);
			}

			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/salas');
		}
	}

	public function excluir()
    {
		if( ($this->input->method() !== 'post') || (!isset($_POST)) || $this->input->post('id') == "" )
        {
            $retorno['type']    = "error";
            $retorno['title']   = "Acesso Negado!";
            $retorno['message'] = "Não é possível continuar com a requisão.";
            $retorno['debug']   = $this->input->post();

            $this->output
                ->set_status_header(200)
                ->set_content_type('application/json')
                ->set_output( json_encode( $retorno ) )
                ->_display();
            exit();
        }

		$delete = $this->salas_model->delete( $this->input->post('id') );

        if ( ! $delete ) {
            $retorno['type'] 	= "error";
            $retorno['title'] 	= "Erro inesperado";
            $retorno['message'] = "Falha ao tentar excluir!";
        }else{
			$retorno['type'] 	= "success";
            $retorno['title'] 	= "Tudo certo!";
            $retorno['message'] = "Operação realizada com sucesso";
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output( json_encode( $retorno ) )
			->_display();
		exit();
    }

}
