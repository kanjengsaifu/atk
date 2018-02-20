<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_model extends CI_Model {

	public function getloginData($user, $password){
		$u = $user;
		$p = md5($password);
		$cek_login = $this->db->get_where('user', array('username' => $u, 'password' => $p ));

		if ($cek_login->num_rows() > 0) {
			$qad = $cek_login->row();
			if ($u == $qad->username && $p == $qad->password){
				$sess=array(
					'username' => $qad->username,
					'status' => $qad->status,
					);
				$this->session->set_userdata($sess);

				if ($qad->status == 'admin') {
					header('location:'.base_url().'c_dashboard');
				}else{
					header('location:'.base_url().'c_user_dashboard');
				}
			}
		}else{
					echo "<script>alert('username/password salah !');";
					echo "windows.location.href = '".base_url()."'; ";
					echo "</script>";
		}
	}
}
