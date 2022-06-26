<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Model {

	function getDataSuplier() {
		$query = $this->db->get('suplier');
		return $query->result();
	}

	function insertDataSuplier($data) {
		$this->db->insert('suplier', $data);
	}

	function getDataSuplierDetail($id_suplier) {
		$this->db->where('id_suplier', $id_suplier);
		$query = $this->db->get('suplier');
		return $query->row();
	}

	function updateDataSuplier($id_suplier, $data) {
		$this->db->where('id_suplier', $id_suplier);
		$this->db->update('suplier', $data);
	}

	function deleteDataSuplier($id_suplier) {
		$this->db->where('id_suplier', $id_suplier);
		$this->db->delete('suplier');
	}

}