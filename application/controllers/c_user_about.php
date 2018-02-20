<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user_about extends CI_Controller {

	
	public function index()
	{
		$this->load->view('backend/about_user');
	}
}
