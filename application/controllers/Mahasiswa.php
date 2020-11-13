<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "Khaliqul Wafiq";
		$data['nim'] = 1810330069;
		$Mahasiswa[0] = array(
			'nim' => 1810330069,
			'nama' => "Aliq"
		);
		$data['mahasiswa'] = $Mahasiswa;
		$this->load->views('mahasiswa_index', $data);
	}

	public function tambah_data()
	{
		$this->load->views('mahasiswa_tambah');

	}
		
		// public function proses_tambah()
		// {
		// 	$nim = $this-> input ->post('nim');
		// 	$nama_lengkap = $this-> input ->post('nama_lengkap');

		// 	$data = array(
		// 	'Nim' => $nim,
		// 	'nama_lengkap' => $nama_lengkap
		// );
		
