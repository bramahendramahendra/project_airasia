<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('User');

	}


	public function index()
	{
		$data['title'] = "Homepage";
		$this->load->view('Landing/Header', $data);
		$this->load->view('Landing/Homepage', $data);
		$this->load->view('Landing/Footer');
	}

	public function searching()
	{
		
		$this->load->database();
		$data['support'] = $this->User->getAlldata();
		if ($this->input->post('keyword')) {
			$data['support'] = $this->User->search();
		}
		$this->load->view('Landing/Header', $data);
		$this->load->view('support/searching',$data);
		$this->load->view('Landing/Footer');
	}

	public function support()
	{
		$this->load->view('Landing/Header');
		$this->load->view('support/support');
		$this->load->view('Landing/Footer');
	}

	public function bagasi(){
		$this->load->view('Landing/Header');
		$this->load->view('support_seli/bagasi');

	}
	
}