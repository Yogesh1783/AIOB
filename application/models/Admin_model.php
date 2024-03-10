<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{

   public function insertHomeloanOffer()
        {
            if($this->input->post('HomeLoanOffer'))
                {
                $data=array(
               'HomeLoanOffer'=>$this->input->post('HomeLoanOffer')
        
                );
                $this->db->insert('homeloan',$data);
                redirect('Admin/HomeLoanOfferlist');
            }
        }
         public function getHomeLoanOfferlist(){
     $data=$this->db->get('homeloan')->result();
   return $data;
        
    }
    public function insertGoldloanOffer()
        {
            if($this->input->post('GoldLoanOffer'))
                {
                $data=array(
               'GoldLoanOffer'=>$this->input->post('GoldLoanOffer')
        
                );
                $this->db->insert('goldloan',$data);
                redirect('Admin/GoldLoanOfferlist');
            }
        }
         public function getGoldLoanOfferlist(){
     $data=$this->db->get('goldloan')->result();
   return $data;
        
    }
     public function insertBusinessloanOffer()
        {
            if($this->input->post('BusinessLoanOffer'))
                {
                $data=array(
               'BusinessLoanOffer'=>$this->input->post('BusinessLoanOffer')
        
                );
                $this->db->insert('businessloan',$data);
                redirect('Admin/BusinessLoanOfferlist');
            }
        }
         public function getBusinessLoanOfferlist(){
     $data=$this->db->get('businessloan')->result();
   return $data;
        
    }

public function login($custEmail,$custPassword){
  $data=array(

'custEmail'=>$custEmail,
'custPassword'=>$custPassword);
  $query=$this->db->where($data);
  $login=$this->db->get('user');
  if($login!=NULL){
    return $login->row();
  }
}
public function logout(){
  $this->session->sess_destroy();
  redirect('index.php/Admin/Login','refresh');
}
}
?>