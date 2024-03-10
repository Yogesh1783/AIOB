<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model 
{
    public function insertCustomer()
        {
            if($this->input->post('custMobile'))
                {
                $data=array(
               'custMobile'=>$this->input->post('custMobile'),
               'custEmail'=>$this->input->post('custEmail'),
               'custPassword'=>$this->input->post('custPassword')
                );
                $this->db->insert('user',$data);
                redirect('home/home');
            }
        }
        public function insertCustomerDetails(){

            if($this->input->post('Bank'))
                {
                $data=array(
                    'Bank'=>$this->input->post('Bank'),
               'TypeOfAccount'=>$this->input->post('TypeOfAccount'),
               'Name'=>$this->input->post('Name'),
               'EmailId'=>$this->input->post('EmailId'),
                'MobileNo'=>$this->input->post('MobileNo'),
               'Address'=>$this->input->post('Address'),
               'State'=>$this->input->post('State'),
                'Country'=>$this->input->post('Country'),
               'Age'=>$this->input->post('Age'),
               'DOB'=>$this->input->post('DOB'),
                'AadharCardNumber'=>$this->input->post('AadharCardNumber'),
               'PanCardNumber'=>$this->input->post('PanCardNumber'),
               'AccountHolderGender'=>$this->input->post('AccountHolderGender'),
                'AnnualIncome'=>$this->input->post('AnnualIncome'),
               'NomineeName'=>$this->input->post('NomineeName'),
               'NomineeAccountNumber'=>$this->input->post('NomineeAccountNumber')
                );
                $this->db->insert('customerdetails',$data);
                redirect('home/home');
            }

        }
        public function getUserList(){
     $data=$this->db->get('customerdetails ')->result();
   return $data;
        
    }
  public function getByIdUserList($id){
   $data=$this->db->where('ID',$id)->get('customerdetails ')->row();
   return $data;
 }

}

?>