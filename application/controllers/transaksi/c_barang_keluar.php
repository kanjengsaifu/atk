<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_barang_keluar extends CI_Controller {

	

	public function index()
	{
		$data = $this->m_barang_keluar->get_barang_keluar();
		$this->load->view('backend/transaksi/v_barang_keluar', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->model('m_barang_keluar');
		$data['divisi'] = $this->m_barang_keluar->get_kode_divisi();
		$data['produk'] = $this->m_barang_keluar->get_produk_id();
		$this->load->view('backend/transaksi/v_add_bbk',$data);
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$no_barang_keluar = $_POST['no_barang_keluar'];
		$kd_divisi = $_POST['kd_divisi'];
		$produk_id = $_POST['produk_id'];
		$tgl_keluar = $_POST['tgl_keluar'];
		$unit = $_POST['unit'];
		$jumlah = $_POST['jumlah'];


		//Set ke field dati posting text
		$data_add = array(
			"no_barang_keluar"=>$no_barang_keluar,
			"kd_divisi"=>$kd_divisi,
			"produk_id"=>$produk_id,
			"tgl_keluar"=>date('Y-m-d', strtotime($tgl_keluar)),
			"unit"=>$unit,
			"jumlah"=>$jumlah
			);

		//Eksekusi dari function model
		$temp = $this->m_barang_keluar->insert_data('barang_keluar',$data_add);
		if ($temp>=1) {
			redirect('transaksi/c_barang_keluar/index');
		}else{
			redirect('transaksi/c_barang_keluar/add_data');
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
