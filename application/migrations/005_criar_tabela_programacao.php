<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Criar_tabela_programacao extends CI_Migration {

        protected $table;
        protected $primary_key;

	public function __construct()
	{
                parent::__construct();
                
                $this->table       = "programacao";
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
                        'data_inicio' => array(
                                'type' => 'DATETIME',
                                'null' => false,
                        ),
                        'data_fim' => array(
                                'type' => 'DATETIME',
                                'null' => false,
                        ),
                        'descricao' => array(
                                'type' => 'TEXT',
                                'null' => true,
                        ),
                        'id_sala' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => false,
                        ),
                        'id_tipo_programacao' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'null' => false,
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

                #$this->db->query("ALTER TABLE {$this->table} ADD CONSTRAINT fk_{$this->table}_id_sala FOREIGN KEY(id_sala) REFERENCES salas(id);");
                
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