<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
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

    public function CreateAccount()
    {
          $this->load->view('header');
     
        $this->load->view('createaccount_cust');

          $this->load->view('footer');
       
    }


    public function insertCustomerDetails()
    {
        $this->Customer_model->insertCustomerDetails();
    }

    public function Userlist_ad()
    {
        $this->load->view('header_cust');
        $data['users']=$this->Customer_model->getUserList();
        $this->load->view('Userlist_ad',$data);
        $this->load->view('footer');
    }
    public function Update_Userlist_ad($id)
    {
        $this->load->view('header_cust');
        $data['user']=$this->Customer_model->getByIdUserList($id);
        $this->load->view('Update_Userlist_ad',$data);
        $this->load->view('footer');
    }
    
}
?>