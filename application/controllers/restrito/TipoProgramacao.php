<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoProgramacao extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "tipo-programacao";

        $this->load->model('Ref_tipo_programacao_model', 'ref_tipo_programacao');
	}

	public function index()
	{
		$this->dados['tipo_programacao'] = $this->ref_tipo_programacao->list(null, null, null, ['column' => 'nome' , 'type_order' =>'ASC']);

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/tipo_programacao', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function formulario($id_tipo_programacao = null) 
	{
		if(!is_null($id_tipo_programacao)){
			$id_tipo_programacao = base64_decode($id_tipo_programacao);
			$this->dados['edit'] = $this->ref_tipo_programacao->list(['id' => $id_tipo_programacao]);
		}
		
		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_tipo_programacao', $this->dados);
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
            
			if (  $this->input->post('id') != "" ){
				$id_tipo_programacao = $this->input->post('id');	
				$this->ref_tipo_programacao->update( $area, $id_tipo_programacao);
			}else{
				$id_tipo_programacao = $this->ref_tipo_programacao->insert($area);
			}

			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/tipo-programacao');
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

		$delete = $this->ref_tipo_programacao->delete( $this->input->post('id') );

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
