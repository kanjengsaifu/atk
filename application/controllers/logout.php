<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {
	
	 public function index(){
		$cek = $this->session->userdata("username");
		if (empty($cek)) {
			header("location:".base_url()."login2");
		}else{
			$this->session->sess_destroy();
			header("location:".base_url()."login2");
		}
	}
}
