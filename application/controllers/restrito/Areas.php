<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Areas extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "area";

        $this->load->model('Areas_model', 'areas_model');
	}

	public function index()
	{
		$this->dados['areas'] = $this->areas_model->list(null, null, null, ['column' => 'nome' , 'type_order' =>'ASC']);

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/areas', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function formulario($id_area = null) 
	{
		if(!is_null($id_area)){
			$id_area = base64_decode($id_area);
			$this->dados['edit'] = $this->areas_model->list(['id' => $id_area]);
		}
		
		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_areas', $this->dados);
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

			$area['nome']      = $this->input->post('nome');
            $area['sigla']     = $this->input->post('sigla') ?? '';
            $area['cor'] 	   = $this->input->post('cor') ?? '';
            $area['descricao'] = $this->input->post('descricao') ?? '';
            
			if (  $this->input->post('id') != "" ){
				$id_area = $this->input->post('id');	
				$this->areas_model->update( $area, $id_area);
			}else{
				$id_area = $this->areas_model->insert($area);
			}

			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/areas');
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


		$delete = $this->areas_model->delete( $this->input->post('id') );

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
