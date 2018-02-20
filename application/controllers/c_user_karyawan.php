<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user_karyawan extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_user_karyawan->get_karyawan();
		$this->load->view('backend/karyawan/v_user_karyawan');
	}

}
