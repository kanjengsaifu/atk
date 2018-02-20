<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_supplier extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_supplier->get_supplier(); //Fucntion yang Kita buat sendiri di Model
		$this->load->view('backend/supplier/v_supplier', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->view('backend/supplier/v_add_data');
	}

	public function edit_data($supplier_id){
		$edit = $this->m_supplier->get_supplier("where supplier_id = '$supplier_id'");

		$data = array(
			"supplier_id" 	=> $edit[0]['supplier_id'],
			"nama_supplier" => $edit[0]['nama_supplier'],
			"alamat" 		=> $edit[0]['alamat'],
			"kota" 			=> $edit[0]['kota'],
			"telepon" 		=> $edit[0]['telepon'],
			"fax" 			=> $edit[0]['fax'],
			"email" 		=> $edit[0]['email']
			);

		$this->load->view('backend/supplier/v_edit_data',$data);
	}


	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$supplier_id = $_POST['supplier_id'];
		$nama_supplier = $_POST['nama_supplier'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$telepon = $_POST['telepon'];
		$fax = $_POST['fax'];
		$email = $_POST['email'];

		//Set ke field dati posting text
		$data_add = array(
			"supplier_id"=>$supplier_id,
			"nama_supplier"=>$nama_supplier,
			"alamat"=>$alamat,
			"kota" =>$kota,
			"telepon"=>$telepon,
			"fax"=>$fax,
			"email"=>$email
			);

		//Eksekusi dari function model
		$temp = $this->m_supplier->insert_data('supplier',$data_add);
		if ($temp>=1) {
			redirect('supplier/c_supplier/index');
		}else{
			redirect('produk/c_supplier/add_data');
		}
	}

	public function do_delete($supplier_id){
		$where = array("supplier_id"=>$supplier_id);
		$temp = $this->m_supplier->delete_data('supplier',$where);
		if ($temp>=1) {
			redirect('supplier/c_supplier/index');
		}else{
			redirect('supplier/c_supplier/delete_data');
		}
	}


		public function do_edit()
		{
			$supplier_id 	= $_POST['supplier_id'];
			$nama_supplier 	= $_POST['nama_supplier'];
			$alamat 		= $_POST['alamat'];
			$kota 			= $_POST['kota'];
			$telepon 		= $_POST['telepon'];
			$fax 			= $_POST['fax'];
			$email 			= $_POST['email'];

			//Set dari data posting
			$data_edit = array(
				"nama_supplier"	=>$nama_supplier,
				"alamat"		=>$alamat,
				"kota"			=>$kota,
				"telepon"		=>$telepon,
				"fax"			=>$fax,
				"email"			=>$email
				);

			$where = array(
				"supplier_id"	=>$supplier_id
				);

			$temp = $this->m_supplier->update_data('supplier',$data_edit, $where);
			if ($temp >= 1) {
				redirect('supplier/c_supplier/index');
			}else{
				redirect('supplier/c_supplier/edit_data');
			}
		}
	}

