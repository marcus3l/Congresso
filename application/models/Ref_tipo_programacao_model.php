<?php
    class Ref_tipo_programacao_model extends CI_Model {
        
        protected $table 	= 'ref_tipo_programacao';
        protected $id 		= 'id';

        private $updated_at = true;
        private $deleted_at = false;
        
        public function insert($form_data)
        {
            if(!isset($form_data) || empty($form_data) ){
                return false;
            }

            $this->db->insert($this->table, $form_data);
            return $this->db->insert_id();
        }
        
        public function update($form_data, $id)
        {
            if(!isset($form_data) || empty($form_data) ){
                return false;
            }

            if(!isset($id) || empty($id)){
                return false;
            }
            
            $this->db->where($this->id, $id);
            return $this->db->update($this->table, $form_data);
        }
        
        public function delete($id = null)
        {
            
            if(! $id ){
                return false;
            }

            $result = $this->db->where($this->id, $id)->get($this->table)->result();
            
            if(empty($result)){
                return false;
            }

            foreach ($result as $row);

            if($this->deleted_at && ( is_null($row->deleted_at) || empty($row->deleted_at) )){
                return $this->update( array('deleted_at' => date('Y-m-d H:i:s'), 'deleted_id_usuario' => $this->session->userdata('ID') ), $row->{$this->id} );
            }else{
                return $this->db->delete($this->table, array($this->id => $id));
            }
        }

        public function restore( $id = null )
        {
            if(! $id ){
                return false;
            }

            if($this->updated_at){
                $this->db->set('updated_at', date('Y-m-d H:i:s'));
            }

            if($this->deleted_at){
                $this->db->set('deleted_at', NULL);
                $this->db->set('deleted_id_usuario', NULL);
            }

            $this->db->where($this->id, $id);

            return $this->db->update($this->table);
        }

        public function list($rules = null, $joins = null, $select = null, $order_by = ['column' => 'created_at' , 'type_order' =>'ASC'] ) {
            
            if (!is_null($select)){
                $select = ",".$select;
            }
            
            $this->db->select("{$this->table}.* {$select}");
            $this->db->from($this->table);
          
            if(!empty($joins)){
                foreach ($joins as $join) {
                    $this->db->join($join['table'], $join['relationship'], $join['type']);
                }
            }

            if(!empty($rules)){
                foreach ($rules as $column => $rule) {
                    $this->db->where_in($column, $rule);
                }
            }

            if($this->deleted_at){
                $this->db->where("{$this->table}.deleted_at", NULL);
            }

            $this->db->order_by($order_by['column'], $order_by['type_order']);

            $query = $this->db->get();
            
            return $query->result();
        }

        public function query($query)
        {
            return $this->db->query($query)->result();
        }

        /*
        * debug last_query
        */
        public function last_query()
        {
            return $this->db->last_query();
        }	
        
    }
