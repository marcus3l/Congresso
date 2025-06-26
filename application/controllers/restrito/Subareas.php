<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subareas extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "subarea";

        $this->load->model('Subareas_model', 'subareas_model');
        $this->load->model('Areas_model', 'areas_model');
	}

	public function index()
	{

		$joins = array();
        $joins[0]['table']          = "areas";
        $joins[0]['relationship']   = "areas.id = subareas.id_area";
        $joins[0]['type']           = "left";

		$select = 	<<<SELECT
				subareas.*
				,areas.nome AS "area"
				,areas.cor AS "area_cor"
		SELECT;

		$this->dados['subareas'] = $this->subareas_model->list(null, $joins, $select, ['column' => 'nome' , 'type_order' =>'ASC']);

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/subareas', 		 $this->dados);
		$this->load->view('restrito/fixo/rodape',	 $this->dados);
	}

	public function formulario($id_subarea = null) 
	{
		if(!is_null($id_subarea)){
			$id_subarea = base64_decode($id_subarea);
			$this->dados['edit'] = $this->subareas_model->list(['id' => $id_subarea]);
		}

		$this->dados['areas'] = $this->areas_model->list();

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_subareas', $this->dados);
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
			array(
                'field' => 'id_area',
                'label' => 'Area',
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

			$subarea['id_area']   = $this->input->post('id_area');
			$subarea['nome']      = $this->input->post('nome');
            $subarea['sigla']     = $this->input->post('sigla') ?? '';
            $subarea['cor'] 	  = $this->input->post('cor') ?? '';
            $subarea['descricao'] = $this->input->post('descricao') ?? '';
            
			if (  $this->input->post('id') != "" ){
				$id_subarea = $this->input->post('id');	
				$this->subareas_model->update( $subarea, $id_subarea);
			}else{
				$id_subarea = $this->subareas_model->insert($subarea);
			}

			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/subareas');
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

		$delete = $this->subareas_model->delete( $this->input->post('id') );

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
