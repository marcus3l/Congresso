<?php
class MY_Controller extends CI_Controller
{

    public function __construct() {
        parent::__construct();  
        $this->validadeSession();
    }

    public function validadeSession()
    {
        if ( $this->session->userdata('usuario_logado') ){
            return true;
        }
       
        $this->session->set_flashdata( getMessageFail('toast', ['text' => "Acesso negado. Entre com seu usuário e senha"]) );
        redirect( 'login' );
    }
}