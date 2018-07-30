<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
    parent::__construct();
    
   
  }
	 function index()
    {
        
        $this->load->view('template');
        
    	$this->load->view('index');
        
    }
    
	function shop()
	{
		$this->load->view('shop');
	}
}
