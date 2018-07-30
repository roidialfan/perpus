<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register extends CI_Controller {

	
	public function index()
	{
		$this->load->view('v_register');
	}
	
	function regis()
    {
        if(isset($_POST['submit'])){
            
            // proses login disini
            $username   =   $this->input->post('username');
            $email  	=   $this->input->post('email');
            $tlp  		=   $this->input->post('tlp');
            $password   =   $this->input->post('password');
            $data       =  array(   'username'=>$username,
                                    'email'=>$email,
                                    'tlp'=>$tlp,
                                    'password'=>$password);
           
                 
            $this->db->insert('operator',$data);
            redirect('c_produk');
            }
            else{
                redirect('c_register/regis');
                
                
            }
        }
        
    
}
