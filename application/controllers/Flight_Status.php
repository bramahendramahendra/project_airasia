<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_Status extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Flight_Status_M');
	}


	public function index()
	{
		$data['id'] = 0;
		$data['id_awal'] = 0;
		$data['rute_awal'] = $this->Flight_Status_M->rute_awal();
		$data['no_penerbangan'] = 'kosong';
		
		$this->load->view('Flight_Status/Header');
		$this->load->view('Flight_Status/Content',$data);
		$this->load->view('Flight_Status/Footer');

	}

	public function index2() {
		$data['id'] = 0;
		$data['id_awal'] = $_POST['rute_awal'];
		$data['id_tujuan'] = 0;
		// echo $data['id'];die;
		$data['rute_awal'] = $this->Flight_Status_M->rute_awal();
		$data['rute_tujuan'] = $this->Flight_Status_M->rute_tujuan($data['id_awal']);
		
		$this->load->view('Flight_Status/Header');
		$this->load->view('Flight_Status/Content',$data);
		$this->load->view('Flight_Status/Footer');

	}

	public function index3() {
		$data['id'] = 1;
		$data['id_awal'] = $_POST['rute_awal'];
		$data['id_tujuan'] = $_POST['rute_tujuan'];
		
		$data['rute_awal'] = $this->Flight_Status_M->rute_awal();
		$data['rute_tujuan'] = $this->Flight_Status_M->rute_tujuan($data['id_awal']);
		$data['rute'] = $this->Flight_Status_M->cari_rute($data['id_awal'],$data['id_tujuan']);
		
		$this->load->view('Flight_Status/Header');
		$this->load->view('Flight_Status/Content',$data);
		$this->load->view('Flight_Status/Footer');

	}

	public function index4() {
		$data['id'] = 2;
		$data['id_awal'] = 0;
		$data['no_penerbangan'] = $_POST['cari_penerbangan'];
		
		$data['penerbangan'] = $this->Flight_Status_M->cari_penerbangan($data['no_penerbangan']);
		
		
		$this->load->view('Flight_Status/Header');
		$this->load->view('Flight_Status/Content',$data);
		$this->load->view('Flight_Status/Footer');

	}

}