<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user_dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->view('backend/dashboard_user');
	}
}
