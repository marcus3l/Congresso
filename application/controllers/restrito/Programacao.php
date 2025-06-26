<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacao extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "programacao";

		$this->load->model('Palestrantes_model', 'palestrantes_model');
        $this->load->model('Areas_model', 'areas_model');
        $this->load->model('Subareas_model', 'subareas_model');
        $this->load->model('Salas_model', 'salas_model');
        
		$this->load->model('Programacao_model', 'programacao_model');
		$this->load->model('Programacao_palestrantes_model', 'programacao_palestrantes_model');
        $this->load->model('Programacao_areas_model', 'programacao_areas_model');
        $this->load->model('Programacao_subareas_model', 'programacao_subareas_model');
        $this->load->model('Ref_tipo_programacao_model', 'ref_tipo_programacao');

	}

	public function index()
	{
		$joins = array();
        $joins[0]['table']          = "salas";
        $joins[0]['relationship']   = "salas.id = programacao.id_sala";
        $joins[0]['type']           = "left";

		$joins[1]['table']          = "ref_tipo_programacao";
        $joins[1]['relationship']   = "ref_tipo_programacao.id = programacao.id_tipo_programacao";
        $joins[1]['type']           = "left";

		$select = 	<<<SELECT
				programacao.*
				,salas.nome AS "sala"
				,ref_tipo_programacao.nome AS "tipo_programacao"
				,(SELECT group_concat(a.nome) as "areas" FROM programacao_areas pa LEFT JOIN areas a ON (pa.id_area=a.id) WHERE pa.id_programacao=programacao.id AND pa.status=1 ) AS "areas"
				,(SELECT group_concat(a.nome) as "subareas" FROM programacao_subareas pa LEFT JOIN subareas a ON (pa.id_subarea=a.id) WHERE pa.id_programacao=programacao.id AND pa.status=1) AS "subareas"
				,(SELECT COUNT(DISTINCT pa.id) as "qtd" FROM programacao_palestrantes pa WHERE pa.id_programacao=programacao.id AND pa.status=1) AS "qtdPalestrantes"
		SELECT;

		$this->dados['programacao'] = $this->programacao_model->list(null, $joins, $select, ['column' => 'data_inicio' , 'type_order' =>'ASC']);
		$this->dados['salas'] = $this->salas_model->list();


		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/programacao', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function formulario($id_programacao = null) 
	{
		if(!is_null($id_programacao)){
			$id_programacao = base64_decode($id_programacao);
			$this->dados['edit'] = $this->programacao_model->list(['id' => $id_programacao]);
			$this->dados['programacao_areas'] 	 = $this->programacao_areas_model->list(['id_programacao' => $id_programacao, 'status' => 1]);
			$this->dados['programacao_subareas'] = $this->programacao_subareas_model->list(['id_programacao' => $id_programacao, 'status' => 1]);
		}

		$this->dados['salas'] 	 		 = $this->salas_model->list();
		$this->dados['tipo_programacao'] = $this->ref_tipo_programacao->list();
		$this->dados['areas'] 	 		 = $this->areas_model->list();
		$this->dados['subareas'] 		 = $this->subareas_model->list();

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_programacao', $this->dados);
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
                'field' => 'data_inicio',
                'label' => 'Data Inicio',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Campo obrigatório.',
                ),
            ),
			array(
                'field' => 'data_fim',
                'label' => 'Data Fim',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Campo obrigatório.',
                ),
            ),
			array(
                'field' => 'id_sala',
                'label' => 'Sala',
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

			$programacao['nome']     	 		= $this->input->post('nome');
            $programacao['data_inicio']  		= $this->input->post('data_inicio') ?? '';
            $programacao['data_fim'] 	 		= $this->input->post('data_fim') ?? '';
            $programacao['id_sala'] 	 		= $this->input->post('id_sala') ?? '';
            $programacao['descricao'] 	 		= $this->input->post('descricao') ?? '';
            $programacao['id_tipo_programacao'] = $this->input->post('id_tipo_programacao') ?? '';
            
			if (  $this->input->post('id') != "" ){
				$id_programacao = $this->input->post('id');	
				$this->programacao_model->update( $programacao, $id_programacao);
			}else{
				$id_programacao = $this->programacao_model->insert($programacao);
			}

			$programacao_areas = $this->programacao_areas_model->list(['id_programacao' => $id_programacao]);
			if (!empty($programacao_areas)){
				foreach ($programacao_areas as $pa) {
					$this->programacao_areas_model->update(['status' => 0], $pa->id);
				}
			}
			if ($this->input->post('id_areas')){
				if( is_array($this->input->post('id_areas')) ){
					foreach ($this->input->post('id_areas') as $id_area) {
						$programacao_area = array();
						$programacao_area['id_programacao'] = $id_programacao;
						$programacao_area['id_area'] = $id_area;
						$this->programacao_areas_model->insert($programacao_area);
					}
				}
			}

			$programacao_subareas = $this->programacao_subareas_model->list(['id_programacao' => $id_programacao]);
			if (!empty($programacao_subareas)){
				foreach ($programacao_subareas as $pa) {
					$this->programacao_subareas_model->update(['status' => 0], $pa->id);
				}
			}
			if ($this->input->post('id_subareas')){
				if( is_array($this->input->post('id_subareas')) ){
					foreach ($this->input->post('id_subareas') as $id_subarea) {
						$programacao_subarea = array();
						$programacao_subarea['id_programacao'] = $id_programacao;
						$programacao_subarea['id_subarea'] = $id_subarea;
						$this->programacao_subareas_model->insert($programacao_subarea);
					}
				}
			}

			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/programacao');
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

		$delete = $this->programacao_model->delete( $this->input->post('id') );

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

	public function formularioPalestrantes($id_programacao = null) 
	{
		if(is_null($id_programacao)){
			$this->session->set_flashdata( getMessageFail() );
			redirect('restrito/programacao');
		}

		$id_programacao = base64_decode($id_programacao);
		
		$this->dados['id_programacao'] = $id_programacao;
		$this->dados['programacao']    = $this->programacao_model->list(['id' => $id_programacao])[0];
		$this->dados['palestrantes']   = $this->palestrantes_model->list();

		$joins = array();
        $joins[0]['table']          = "palestrantes";
        $joins[0]['relationship']   = "palestrantes.id = programacao_palestrantes.id_palestrante";
        $joins[0]['type']           = "left";

		$select = 	<<<SELECT
				programacao_palestrantes.*
				,palestrantes.nome AS "nome"
				,palestrantes.foto AS "foto"
		SELECT;

		$this->dados['programacao_palestrantes'] = $this->programacao_palestrantes_model->list(['id_programacao' => $id_programacao, 'programacao_palestrantes.status' => 1], $joins, $select, ['column' => 'palestrantes.nome', 'type_order' => 'ASC']);

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_programacao_palestrante', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function salvarPalestrante()
	{
		$id_programacao = $this->input->post('id_programacao');
		$config = array(
            array(
                'field' => 'id_palestrante',
                'label' => 'Palestrante',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'Campo obrigatório.',
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $this->formularioPalestrantes( base64_encode($id_programacao) );
        }else{

			$sala['id_programacao'] = $id_programacao;
            $sala['id_palestrante'] = $this->input->post('id_palestrante') ?? '';
            
			$this->programacao_palestrantes_model->insert($sala);

			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/programacao/'.base64_encode($id_programacao).'/palestrantes');

		}
	}

	public function excluirPalestrante()
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

		$delete = $this->programacao_palestrantes_model->delete( $this->input->post('id') );

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
