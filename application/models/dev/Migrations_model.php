<?php

class Migrations_model extends CI_Model {
	
	public function list() {

		$this->db->select("*");
        $this->db->from("migrations");
                
		return $this->db->get()->result();
	}

	/*
	* debug last_query
	*/
	public function last_query()
	{
		return $this->db->last_query();
	}	
	
}