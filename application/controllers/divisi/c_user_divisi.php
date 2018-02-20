<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user_divisi extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_user_divisi->get_divisi();
		$this->load->view('backend/divisi/v_user_divisi', array('daftar' => $data));

		// $data = $this->m_produk->get_produk();
		// $this->load->view('backend/produk/v_produk', array('daftar'=>$data));
	}

}
