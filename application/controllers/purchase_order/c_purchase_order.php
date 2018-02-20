<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_purchase_order extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_purchase_order->get_purchase_order();
		$this->load->view('backend/purchase_order/v_purchase_order', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->model('m_purchase_order');
		$data['supplier'] = $this->m_purchase_order->get_supplier_id();
		$data['produk'] = $this->m_purchase_order->get_produk_id();
		$this->load->view('backend/purchase_order/v_add_data',$data);
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$nomor_po = $_POST['nomor_po'];
		$supplier_id = $_POST['supplier_id'];
		$produk_id = $_POST['produk_id'];
		$harga = $_POST['harga'];
		$jumlah_order = $_POST['jumlah_order'];
		$total = $_POST['total'];

		//Set ke field dati posting text
		$data_add = array(
			"nomor_po"=>$nomor_po,
			"supplier_id"=>$supplier_id,
			"produk_id"=>$produk_id,
			"harga"=>$harga,
			"jumlah_order"=>$jumlah_order,
			"total"=>$total
			);

		//Eksekusi dari function model
		$temp = $this->m_purchase_order->insert_data('purchase_order',$data_add);
		if ($temp>=1) {
			redirect('purchase_order/c_purchase_order/index');
		}else{
			redirect('purchase_order/c_purchase_order/add_data');
		}

	}


	public function do_delete($nomor_po){
		$where = array("nomor_po"=>$nomor_po);
		$temp = $this->m_purchase_order->delete_data('purchase_order',$where);
		if ($temp>=1) {
			redirect('purchase_order/c_purchase_order/index');
		}else{
			redirect('purchase_order/c_purchase_order/delete_data');
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
