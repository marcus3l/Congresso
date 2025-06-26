<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palestrantes extends MY_Controller {

	private $dados;

	public function __construct(){
        parent::__construct();
		
		$this->dados = array();
		$this->dados['menu_ativo'] = "palestrantes";

        $this->load->model('Palestrantes_model', 'palestrantes_model');
	}

	public function index()
	{
		$this->dados['palestrantes'] = $this->palestrantes_model->list(null, null, null, ['column' => 'nome' , 'type_order' =>'ASC']);

		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/palestrantes', $this->dados);
		$this->load->view('restrito/fixo/rodape', $this->dados);
	}

	public function formulario($id_palestrante = null) 
	{
		if(!is_null($id_palestrante)){
			$id_palestrante = base64_decode($id_palestrante);
			$this->dados['edit'] = $this->palestrantes_model->list(['id' => $id_palestrante]);
		}
		
		$this->load->view('restrito/fixo/cabecalho', $this->dados);
		$this->load->view('restrito/form_palestrantes', $this->dados);
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
                'field' => 'curriculo',
                'label' => 'curriculo',
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

			$palestrante['nome']   	  = $this->input->post('nome');
            $palestrante['curriculo'] = $this->input->post('curriculo');
            $palestrante['linkedin']  = $this->input->post('linkedin');
            $palestrante['lates'] 	  = $this->input->post('lates');
            $palestrante['instagram'] = $this->input->post('instagram');
            
			if (  $this->input->post('id') != "" ){
				$id_palestrante = $this->input->post('id');	
				$this->palestrantes_model->update( $palestrante, $id_palestrante);
			}else{
				$id_palestrante = $this->palestrantes_model->insert($palestrante);
			}

			if( !empty($_FILES['foto']['tmp_name']) ){
				// Inserir FOTO
				$config['upload_path']     = './uploads/palestrantes';
				$config['allowed_types']   = 'gif|jpg|png';
				$config['encrypt_name']    = true;
				#$config['max_size']             = 100;
				#$config['max_width']            = 1024;
				#$config['max_height']           = 768;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('foto') )
				{
					$error = array('error' => $this->upload->display_errors());
					var_dump($error);die;
				}
				
				$upload = array('upload_data' => $this->upload->data());
				$this->palestrantes_model->update( ['foto' => base_url().'uploads/palestrantes/'.$upload['upload_data']['file_name'] ], $id_palestrante);
			}


			$this->session->set_flashdata( getMessageSucess() );
			redirect('restrito/palestrantes');
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

		$delete = $this->palestrantes_model->delete( $this->input->post('id') );

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
