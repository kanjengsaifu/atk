<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_divisi extends CI_Model {

public function get_divisi($where = ""){
		$data = $this->db->query("select * from divisi ".$where);
		return $data->result_array();
	}
	// public function get_nama_supplier(){
	// $data = array();
	// $query = $this->db->get('supplier');
	// if($query->num_rows() > 0){
	// 	foreach($query->result_array() as $row){
	// 		$data[] = $row;
	// 	}
	// }

	// $query->free_result();
	// return $data;

	// }

	

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
