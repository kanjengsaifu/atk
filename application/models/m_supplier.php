<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_supplier extends CI_Model {

	
	public function get_supplier($where = ""){
		$data = $this->db->query("select * from supplier ".$where);
		return $data->result_array();
	}

	public function insert_data($table, $isi_data){
		$temp = $this->db->insert($table, $isi_data);
		return $temp;
	}
	
	public function delete_data($table, $where){
		$temp = $this->db->delete($table, $where);
		return $temp;
	}

	public function update_data($table, $isi_data, $where){
		$temp = $this->db->update($table, $isi_data, $where);
		return $temp;

	}
}
