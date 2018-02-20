<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	
public function index(){
	$cek = $this->session->userdata('status');
		if ($cek == 'user') {
			$this->load->view('p_user');
		}else{
			header('location:'.base_url()."login2");
		}
	}
}
