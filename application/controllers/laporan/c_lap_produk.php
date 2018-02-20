<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_lap_produk extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('m_lap_produk');
  }
  
  public function index(){
    $data['produk'] = $this->m_lap_produk->view_row();
    $this->load->view('backend/laporan/v_lap_produk', $data);
  }
  
  public function cetak(){
    ob_start();
    $data['produk'] = $this->m_lap_produk->view_row();
    $this->load->view('backend/laporan/v_print_produk', $data);
    $html = ob_get_contents();
            ob_end_clean();
        
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Produk.pdf', 'D');
  }
}