<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programacao extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Programacao_palestrantes_model'); 
    }

	public function palestrante($id_palestrante)
	{
		if ( $id_palestrante ){
			$programacao = $this->Programacao_palestrantes_model->list(['id_palestrante' => $id_palestrante, 'status' => 1]);
			if(!empty($programacao)){
				foreach ($programacao as $pr) {
					$pr->programacaoCompleta = getProgramacaoCompleta( $pr->id_programacao );
				}
			}

			$data['programacao'] = $programacao;
	
			$this->load->view('programacao_palestrantes', $data);
		}
	}
}
