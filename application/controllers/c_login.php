<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_operator');
    }
    
    function login()
    {
        if(isset($_POST['submit'])){
            
            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil=  $this->model_operator->login($username,$password);
            if($hasil==1)
            {
                // update last login
                $this->db->where('username',$username);
                $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                redirect('c_produk/catalog');
            }
            else{
                redirect('c_login/login');
                
                
            }
        }
        else{
            //$this->load->view('form_login2');
            chek_session_login();
            $this->load->view('v_login');
        }
    }
    
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
