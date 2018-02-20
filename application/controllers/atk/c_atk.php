<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_atk extends CI_Controller {

	
	public function index()
	{
		$data = $this->m_atk->get_atk();
		$this->load->view('backend/atk/v_atk', array('daftar'=>$data));
	}

	public function add_data()
	{
		$this->load->model('m_atk');
		$data['produk'] = $this->m_atk->get_produk_id();
		$this->load->view('backend/atk/v_add_data',$data);
	}

	public function do_add()
	{
		//Mengambil Posting Name Inputtext
		$atk_id = $_POST['atk_id'];
		$produk_id = $_POST['produk_id'];
		$unit = $_POST['unit'];
		$stock = $_POST['stock'];

		//Set ke field dati posting text
		$data_add = array(
			"atk_id"=>$atk_id,
			"produk_id"=>$produk_id,
			"unit"=>$unit,
			"stock"=>$stock
			);

		//Eksekusi dari function model
		$temp = $this->m_atk->insert_data('atk',$data_add);
		if ($temp>=1) {
			redirect('atk/c_atk/index');
		}else{
			redirect('atk/c_atk/add_data');
		}

	}


	public function do_delete($atk_id){
		$where = array("atk_id"=>$atk_id);
		$temp = $this->m_atk->delete_data('atk',$where);
		if ($temp>=1) {
			redirect('atk/c_atk/index');
		}else{
			redirect('atk/c_atk/delete_data');
		}
	}

	public function edit_data($atk_id){
		$edit = $this->m_atk->get_atk("where atk_id ='$atk_id'");
		$data = array(
			"atk_id" => $edit[0]['atk_id'],
			"produk_id" => $edit[0]['produk_id'],
			"nomor_po" => $edit[0]['nomor_po'],
			"unit" => $edit[0]['unit'],
			"stock" => $edit[0]['stock']
			);
		
		$this->load->view('backend/atk/v_edit_data',$data);
	}

	public function do_edit(){

		$atk_id = $_POST['atk_id'];
		$produk_id = $_POST['produk_id'];
		$nomor_po = $_POST['nomor_po'];
		$unit = $_POST['unit'];
		$stock = $_POST['stock'];

		//Set dari data posting
		$data_edit = array(
			"produk_id"=>$produk_id,
			"nomor_po"=>$nomor_po,
			"unit"=>$unit,
			"stock"=>$stock
			);

		$where = array(
			"atk_id"=>$atk_id
			);

		$temp = $this->m_atk->update_data('atk',$data_edit, $where);
		if ($temp>=1) {
			redirect('atk/c_atk/index');
		}else{
			redirect('atk/c_atk/edit_data');
		}
	}
}
