<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_karyawan extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_karyawan->get_karyawan();
		$this->load->view('backend/karyawan/v_karyawan', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->model('m_karyawan');	
		$data['divisi'] = $this->m_karyawan->get_kode_divisi();
		$this->load->view('backend/karyawan/v_add_data',$data);
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$karyawan_id = $_POST['karyawan_id'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$kd_divisi = $_POST['kd_divisi'];
		$telepon = $_POST['telepon'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		//Set ke field dati posting text
		$data_add = array(
			"karyawan_id"=>$karyawan_id,
			"nama_karyawan"=>$nama_karyawan,
			"kd_divisi"=>$kd_divisi,
			"telepon"=>$telepon,
			"alamat"=>$alamat,
			"email"=>$email
			);

		//Eksekusi dari function model
		$temp = $this->m_karyawan->insert_data('karyawan',$data_add);
		if ($temp>=1) {
			redirect('karyawan/c_karyawan/index');
		}else{
			redirect('karyawan/c_karyawan/add_data');
		}

	}


	public function do_delete($karyawan_id){
		$where = array("karyawan_id"=>$karyawan_id);
		$temp = $this->m_produk->delete_data('karyawan',$where);
		if ($temp>=1) {
			redirect('karyawan/c_karyawan/index');
		}else{
			redirect('karyawan/c_karyawan/delete_data');
		}
	}

	public function edit_data($karyawan_id){
		$edit = $this->m_karyawan->get_karyawan("where karyawan_id ='$karyawan_id'");
		$data = array(
			"karyawan_id" => $edit[0]['karyawan_id'],
			"nama_karyawan" => $edit[0]['nama_karyawan'],
			"kd_divisi" => $edit[0]['kd_divisi'],
			"telepon" => $edit[0]['telepon'],
			"alamat" => $edit[0]['alamat'],
			"email" => $edit[0]['email']
			);

		$this->load->view('backend/karyawan/v_edit_data',$data);
	}

	public function do_edit(){

		$karyawan_id = $_POST['karyawan_id'];
		$nama_karyawan = $_POST['nama_karyawan'];
		$kd_divisi = $_POST['kd_divisi'];
		$telepon = $_POST['telepon'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];

		//Set dari data posting
		$data_edit = array(
			"nama_karyawan"=>$nama_karyawan,
			"kd_divisi"=>$kd_divisi,
			"telepon"=>$telepon,
			"alamat"=>$alamat,
			"email"=>$email
			);

		$where = array(
			"karyawan_id"=>$karyawan_id
			);

		$temp = $this->m_karyawan->update_data('karyawan',$data_edit, $where);
		if ($temp>=1) {
			redirect('karyawan/c_karyawan/index');
		}else{
			redirect('karyawan/c_karyawan/edit_data');
		}
	}
}
