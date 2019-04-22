<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	public function Register() {
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			"Nama" => $this->input->post('nama'),
			"Email" => $this->input->post('email'),
			"Password" => md5($this->input->post('password')),
			"RegisTime" => Date("d-m-Y, H:i:s"),
			"JK" => $this->input->post('JK')
		);

		if($this->isExist($data['Email']))
		{
			return false;
		} 

		else
		{
			$this->db->insert('register', $data);
			$this->db->insert('login',
				array(
					"Email" => $data['Email'],
					"Password" => $data['Password']
				));
			return true;
		}
	}

	public function isExist($email) {
		$this->db->where("Email",$email);
		$result = $this->db->get('login')->result_array();
		if(isset($result[0])) {
			return true;
		} else {
			return false;
		}
	}

	public function findUser() {
		$data = array(
			"Email" => $this->input->post('your_email'),
			"Password" => md5($this->input->post('your_pass'))
		);

		$this->db->where($data);
		$result = $this->db->get('login');
		return $result->result_array();
	}

	public function getAlldata(){
		
		return $this->db->get('support')->result_array();
	}

	public function search(){
		$keyword  = $this->input->post('keyword');
		$this->db->like('judul', $keyword);
		$this->db->or_like('url',$keyword);
		$this->db->or_like('created_at',$keyword);
		$this->db->or_like('deskripsi',$keyword);
		return $this->db->get('support')->result_array();
	}
	
}