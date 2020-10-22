<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		
		//load dari folder view
		//ini hasil update
		$this->load->view("mahasiswa_index");


	}
	
}

