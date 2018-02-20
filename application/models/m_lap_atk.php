<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_lap_atk extends CI_Model {
  public function view(){
    return $this->db->get('atk')->result();
  }
  
  public function view_row(){
    return $this->db->get('atk')->result();
  }
}