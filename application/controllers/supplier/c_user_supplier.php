<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user_supplier extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_user_supplier->get_supplier();
		$this->load->view('backend/supplier/v_user_supplier', array('daftar' => $data));

		// $data = $this->m_produk->get_produk();
		// $this->load->view('backend/produk/v_produk', array('daftar'=>$data));
	}

}
