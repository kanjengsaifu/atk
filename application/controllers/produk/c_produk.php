<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_produk extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_produk->get_produk();
		$this->load->view('backend/produk/v_produk', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->model('m_produk');
		$data['supplier'] = $this->m_produk->get_nama_supplier();
		$this->load->view('backend/produk/v_add_data',$data);
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$produk_id = $_POST['produk_id'];
		$produk_nama = $_POST['produk_nama'];
		$nama_supplier = $_POST['nama_supplier'];
		$unit = $_POST['unit'];
		$jumlah = $_POST['jumlah'];

		//Set ke field dati posting text
		$data_add = array(
			"produk_id"=>$produk_id,
			"produk_nama"=>$produk_nama,
			"nama_supplier"=>$nama_supplier,
			"unit"=>$unit,
			"jumlah"=>$jumlah
			);

		//Eksekusi dari function model
		$temp = $this->m_produk->insert_data('produk',$data_add);
		if ($temp>=1) {
			redirect('produk/c_produk/index');
		}else{
			redirect('produk/c_produk/add_data');
		}

	}


	public function do_delete($produk_id){
		$where = array("produk_id"=>$produk_id);
		$temp = $this->m_produk->delete_data('produk',$where);
		if ($temp>=1) {
			redirect('produk/c_produk/index');
		}else{
			redirect('produk/c_produk/delete_data');
		}
	}

	public function edit_data($produk_id){
		$edit = $this->m_produk->get_produk("where produk_id ='$produk_id'");
		$data = array(
			"produk_id" => $edit[0]['produk_id'],
			"produk_nama" => $edit[0]['produk_nama'],
			"nama_supplier" => $edit[0]['nama_supplier'],
			"unit" => $edit[0]['unit'],
			"jumlah" => $edit[0]['jumlah']
			);
		
		$this->load->view('backend/produk/v_edit_data',$data);
	}

	public function do_edit(){

		$produk_id = $_POST['produk_id'];
		$produk_nama = $_POST['produk_nama'];
		$nama_supplier = $_POST['nama_supplier'];
		$unit = $_POST['unit'];
		$jumlah = $_POST['jumlah'];

		//Set dari data posting
		$data_edit = array(
			"produk_nama"=>$produk_nama,
			"nama_supplier"=>$nama_supplier,
			"unit"=>$unit,
			"jumlah"=>$jumlah
			);

		$where = array(
			"produk_id"=>$produk_id
			);

		$temp = $this->m_produk->update_data('produk',$data_edit, $where);
		if ($temp>=1) {
			redirect('produk/c_produk/index');
		}else{
			redirect('produk/c_produk/edit_data');
		}
	}
}
