  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class m_account extends CI_Model{

       public function insert_data($table, $isi_data){
		$temp = $this->db->insert($table, $isi_data);
		return $temp;
	}	
  }
 