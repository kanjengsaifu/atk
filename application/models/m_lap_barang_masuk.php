<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_lap_barang_masuk extends CI_Model {
  public function view(){
    return $this->db->get('barang_masuk')->result();
  }
  
  public function view_row(){
    return $this->db->get('barang_masuk')->result();
  }
}