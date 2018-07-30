<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_produk extends CI_Controller {
	

	public function catalog()
	{
		$this->load->view('template2');
		$this->load->view('v_produk');		
	}
	function agama()
	{
		$this->load->view('template2');
		$this->load->view('v_agama');
	}
	function pendidikan()
	{
		$this->load->view('template2');
		$this->load->view('v_pendidikan');
	}
	function tekno()
	{
		$this->load->view('template2');
		$this->load->view('v_tekno');
	}
	function cerpen()
	{
		$this->load->view('template2');
		$this->load->view('v_cerpen');
	}

}

/* End of file c_produk.php */
/* Location: ./application/controllers/c_produk.php */