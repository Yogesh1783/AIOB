<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{


	public function admin()
	{
		$this->load->view('header_cust');
		$this->load->view('admin');
		$this->load->view('footer');
		
	}
    public function addHomeLoanOffer()
    {
          $this->load->view('header');
     
        $this->load->view('addHomeLoanOffer');

          $this->load->view('footer');
       
    }
     public function addGoldLoanOffer()
    {
          $this->load->view('header');
     
        $this->load->view('addGoldLoanOffer');

          $this->load->view('footer');
       
    }
    public function addBusinessLoanOffer()
    {
          $this->load->view('header');
     
        $this->load->view('addBusinessLoanOffer');

          $this->load->view('footer');
       
    }

   public function insertHomeloanOffer()
    {
        $this->Admin_model->insertHomeloanOffer();
    }
    public function insertGoldloanOffer()
    {
      $this->Admin_model->insertGoldloanOffer();
    }
    public function insertBusinessloanOffer()
    {
      $this->Admin_model->insertBusinessloanOffer();
    }


   public function HomeLoanOfferlist()
    {
        $this->load->view('header_cust');
        $data['homeloanlists']=$this->Admin_model->getHomeLoanOfferlist();
        $this->load->view('HomeLoanOfferlist',$data);
        $this->load->view('footer');
    }
    public function GoldLoanOfferlist()
    {
        $this->load->view('header_cust');
        $data['goldloanlists']=$this->Admin_model->getGoldLoanOfferlist();
        $this->load->view('GoldLoanOfferlist',$data);
        $this->load->view('footer');
    }
    public function BusinessLoanOfferlist()
    {
        $this->load->view('header_cust');
        $data['businessloanlists']=$this->Admin_model->getBusinessLoanOfferlist();
        $this->load->view('BusinessLoanOfferlist',$data);
        $this->load->view('footer');
    }
     public function Update_homeloanlist($id)
    {
        $this->load->view('header_cust');
        $data['homeloanlist']=$this->Admin_model->getByIdHomeLoanOfferlist($id);
        $this->load->view('Update_homeloanlist',$data);
        $this->load->view('footer');
    }
    public function Update_goldloanlist($id)
    {
        $this->load->view('header_cust');
        $data['goldloanlist']=$this->Admin_model->getByIdGoldLoanOfferlist($id);
        $this->load->view('Update_goldloanlist',$data);
        $this->load->view('footer');
    }
    public function Update_businessloanlist($id)
    {
        $this->load->view('header_cust');
        $data['businessloanlist']=$this->Admin_model->getByIdBusinessLoanOfferlist($id);
        $this->load->view('Update_businessloanlist',$data);
        $this->load->view('footer');
    }
    
	public function login()
 {
  $this->load->view('cust_login');
 }
 public function verifylogin(){
 
  $this->form_validation->set_rules('custEmail','custEmail','required');
  $this->form_validation->set_rules('custPassword','custPassword','required');
  if($this->form_validation->run())
  {
   
    
    $custEmail=$this->input->post('custEmail');
    $custPassword=$this->input->post('custPassword');
    $this->load->model('Admin_model');
		$validate=$this->Admin_model->login($custEmail,$custPassword);
    if($validate)
    {
      
            $_SESSION['custEmail']=$validate->custEmail;
      redirect('/admin/admin');
    }
    else
    {
      $this->session->set_flashdata('error','Invalid Login Details.please try again.');
      redirect('login');
    }
  }else
  {
    $this->load->view('login');
  }

 }
 public function logout(){
  $this->session->sess_destroy();
  redirect('/admin/Login','refresh');
}
}