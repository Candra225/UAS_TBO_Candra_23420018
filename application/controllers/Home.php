<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Suplier');
	}

	public function index()
	{
		$queryAllSuplier = $this->Suplier->getDataSuplier();
		$DATA = array('queryAllSup' => $queryAllSuplier);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah');
	}

	public function halaman_edit($id_suplier)
	{
		$querySuplierDetail = $this->Suplier->getDataSuplierDetail($id_suplier);
		$DATA = array('querySupDetail' => $querySuplierDetail);
		$this->load->view('halaman_edit', $DATA);
	}

	public function fungsiTambah()
	{
		$id_suplier = $this->input->post('id_suplier');
		$nama_suplier = $this->input->post('nama_suplier');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$ArrInsert = array(
			'id_suplier' => $id_suplier,
			'nama_suplier' => $nama_suplier,
			'alamat' => $alamat,
			'no_telp' => $no_telp
		);

		$this->Suplier->insertDataSuplier($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		$id_suplier = $this->input->post('id_suplier');
		$nama_suplier = $this->input->post('nama_suplier');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$ArrUpdate = array(
			'nama_suplier' => $nama_suplier,
			'alamat' => $alamat,
			'no_telp' => $no_telp
		);

		$this->Suplier->updateDataSuplier($id_suplier, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($id_suplier)
	{
		$this->Suplier->deleteDataSuplier($id_suplier);
		redirect(base_url(''));
	}
}
