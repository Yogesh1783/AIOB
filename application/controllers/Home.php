<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function login()
    {
     
        $this->load->view('cust_login');
       
    }

    public function home()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
        
    }
     public function About()
    {
        $this->load->view('header');
        $this->load->view('About');
        $this->load->view('footer');
        
    }
     public function register()
    {
        $this->load->view('header');
        $this->load->view('register_cust');
        $this->load->view('footer');
        
    }
    public function insertCustomer()
    {
        $this->Customer_model->insertCustomer();
    }
}
?>