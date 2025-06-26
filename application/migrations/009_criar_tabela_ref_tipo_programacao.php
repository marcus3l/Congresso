<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Criar_tabela_ref_tipo_programacao extends CI_Migration {

        protected $table;
        protected $primary_key;

	public function __construct()
	{
                parent::__construct();
                
                $this->table       = "ref_tipo_programacao";
                $this->primary_key = "id";

                $this->load->helper('modelos_arquivos');
	}

        public function up()
        {
                $this->dbforge->add_field(array(
                        $this->primary_key => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'auto_increment' => TRUE
                        ),
                        'nome' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 255,
                                'null' => false,
                        ),
                        'sigla' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 255,
                                'null' => true,
                        ),
                        'cor' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 255,
                                'null' => true,
                        ),
                        'status' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'default' => 1,
                                'null' => false,
                        ),
                        'created_at datetime default current_timestamp',
                        'created_login_usuarios' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 255,
                                'null' => true,
                        ),
                ));
                $this->dbforge->add_key($this->primary_key, TRUE);
                $this->dbforge->create_table($this->table); 

                @unlink(APPPATH."models/".ucfirst($this->table)."_model.php");

                $fp = fopen(APPPATH."models/".ucfirst($this->table)."_model.php", "a+");
		if($fp){
                        fwrite($fp, modeloArquivoModel(ucfirst($this->table)."_model", $this->table) );
                        fclose($fp);
		}
        }

        public function down()
        {
                @unlink(APPPATH."models/".ucfirst($this->table)."_model.php");
                $this->dbforge->drop_table($this->table);
        }
}