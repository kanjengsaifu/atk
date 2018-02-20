<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_barang_masuk extends CI_Controller {

	public function index()
	{
		$data = $this->m_barang_masuk->get_barang_masuk();
		$this->load->view('backend/transaksi/v_barang_masuk', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->model('m_atk');
		$this->load->model('m_barang_masuk');
		$data['produk_id'] = $this->m_barang_masuk->get_produk_id();
		$this->load->view('backend/transaksi/v_add_bbm',$data);
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$kode_masuk = $_POST['kode_masuk'];
		$produk_id = $_POST['produk_id'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$unit = $_POST['unit'];
		$jumlah = $_POST['jumlah'];

		//Set ke field dati posting text
		$data_add = array(
			"kode_masuk"=>$kode_masuk,
			"produk_id"=>$produk_id,
			"tgl_masuk"=>date('Y-m-d', strtotime($tgl_masuk)),
			"unit"=>$unit,
			"jumlah"=>$jumlah
			);
		// $where =array(
		// 		"produk_id"=>$produk_id,
		// 		"stock"=> "stock" + "jumlah"
		// 	);

		//Eksekusi dari function model
		$temp = $this->m_barang_masuk->insert_data('barang_masuk',$data_add, $xdata);
		if ($temp>=1) {
			redirect('transaksi/c_barang_masuk/index');
		}else{
			redirect('transaksi/c_barang_masuk/add_data');
		}

	}


	public function do_delete($kode_masuk){
		$where = array("kode_masuk"=>$kode_masuk);
		$temp = $this->m_barang_masuk->delete_data('barang_masuk',$where);
		if ($temp>=1) {
			redirect('transaksi/c_barang_masuk/index');
		}else{
			redirect('transaksi/c_barang_masuk/delete_data');
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

}
