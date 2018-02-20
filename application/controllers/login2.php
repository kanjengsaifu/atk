<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login2 extends CI_Controller {
	public function _construct(){
		session_start();
	}
	
	public function index(){
		$cek = $this->session->userdata("status");
		if (empty($cek)){
			$this->load->view('p_login');
		}else{
			$status = $this->session->userdata('status');
			if ($status == 'admin' ) {
				header('location:'.base_url().'c_dashboard');
			}else{
				header('location:'.base_url().'user');
			}
		}
	}
	public function add_data()
	{
		$this->load->view('p_register');
	}
	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$nama_lengkap = $_POST['nama_lengkap'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$status = $_POST['status'];

		//Set ke field dati posting text
		$data_add = array(
			"nama_lengkap"=>$nama_lengkap,
			"email"=>$email,
			"username"=>$username,
			"password"=>$password,
			"status"=>$status
			);

		//Eksekusi dari function model
		$temp = $this->m_account->insert_data('user',$data_add);
		if ($temp>=1) {
			redirect('c_dashboard');
		}else{
			redirect('login2/add_data');
		}

	}
}
