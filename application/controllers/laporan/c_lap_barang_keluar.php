<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_lap_barang_keluar extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('m_lap_barang_keluar');
  }
  
  public function index(){
    $data['barang_keluar'] = $this->m_lap_barang_keluar->view_row();
    $this->load->view('backend/laporan/v_lap_barang_keluar', $data);
  }
  
  public function cetak(){
    ob_start();
    $data['barang_keluar'] = $this->m_lap_barang_keluar->view_row();
    $this->load->view('backend/laporan/v_print_barang_keluar', $data);
    $html = ob_get_contents();
            ob_end_clean();
        
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Barang Keluar.pdf', 'D');
  }
}