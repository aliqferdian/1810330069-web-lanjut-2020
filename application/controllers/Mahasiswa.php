<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		
		//load adri folder view
		$this->load->view("mahasiswa_index");


	}
	
}

