<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_Status_M extends CI_Model {
    
    public function rute_awal() {
        $this->db->select('*');
        $this->db->from('rute_berangkat');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function rute_tujuan($id) {
        $this->db->select('*');
        $this->db->from('penerbangan'); 
        $this->db->join('rute_berangkat', 'rute_berangkat.id = penerbangan.id_rute_keberangkatan');
        $this->db->join('rute_datang', 'rute_datang.id = penerbangan.id_rute_kedatangan');
        $this->db->where('penerbangan.id_rute_keberangkatan', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cari_rute($id_awal, $id_akhir) {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('penerbangan', 'penerbangan.id = jadwal.id_nomor_penerbangan');
        $this->db->join('rute_berangkat', 'rute_berangkat.id = penerbangan.id_rute_keberangkatan');
        $this->db->join('rute_datang', 'rute_datang.id = penerbangan.id_rute_kedatangan');
        $this->db->where('penerbangan.id_rute_keberangkatan', $id_awal);
        $this->db->where('penerbangan.id_rute_kedatangan', $id_akhir);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function cari_penerbangan($no) {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('penerbangan', 'penerbangan.id = jadwal.id_nomor_penerbangan');
        $this->db->join('rute_berangkat', 'rute_berangkat.id = penerbangan.id_rute_keberangkatan');
        $this->db->join('rute_datang', 'rute_datang.id = penerbangan.id_rute_kedatangan');
        $this->db->where('penerbangan.nomor_penerbangan', $no);
        $query = $this->db->get();
        return $query->result_array();
    }
	
}