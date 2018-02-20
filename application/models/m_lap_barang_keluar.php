<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_lap_barang_keluar extends CI_Model {
  public function view(){
    return $this->db->get('barang_keluar')->result();
  }
  
  public function view_row(){
    return $this->db->get('barang_keluar')->result();
  }
}