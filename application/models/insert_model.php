<?php
	class insert_model extends CI_Model{
		function __construct() {
			parent::__construct();
		}
		function form_insert($data){
			$this->load->database();
			$this->db->insert('test', $data);
		}
	}
?>