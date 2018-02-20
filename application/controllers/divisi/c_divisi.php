<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_divisi extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_divisi->get_divisi();
		$this->load->view('backend/divisi/v_divisi', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->view('backend/divisi/v_add_data');
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$kd_divisi = $_POST['kd_divisi'];
		$nama_divisi = $_POST['nama_divisi'];

		//Set ke field dati posting text
		$data_add = array(
			"kd_divisi"=>$kd_divisi,
			"nama_divisi"=>$nama_divisi
			);

		//Eksekusi dari function model
		$temp = $this->m_divisi->insert_data('divisi',$data_add);
		if ($temp>=1) {
			redirect('divisi/c_divisi/index');
		}else{
			redirect('divisi/c_divisi/add_data');
		}

	}


	public function do_delete($kd_divisi){
		$where = array("kd_divisi"=>$kd_divisi);
		$temp = $this->m_divisi->delete_data('divisi',$where);
		if ($temp>=1) {
			redirect('divisi/c_divisi/index');
		}else{
			redirect('divisi/c_divisi/delete_data');
		}
	}

	public function edit_data($kd_divisi){
		$edit = $this->m_divisi->get_divisi("where kd_divisi ='$kd_divisi'");
		$data = array(
			"kd_divisi" => $edit[0]['kd_divisi'],
			"nama_divisi" => $edit[0]['nama_divisi']
			);

		$this->load->view('backend/divisi/v_edit_data',$data);
	}

	public function do_edit(){

		$kd_divisi = $_POST['kd_divisi'];
		$nama_divisi = $_POST['nama_divisi'];

		//Set dari data posting
		$data_edit = array(
			"nama_divisi"=>$nama_divisi
			);

		$where = array(
			"kd_divisi"=>$kd_divisi
			);

		$temp = $this->m_divisi->update_data('divisi',$data_edit, $where);
		if ($temp>=1) {
			redirect('divisi/c_divisi/index');
		}else{
			redirect('divisi/c_divisi/edit_data');
		}
	}
}
