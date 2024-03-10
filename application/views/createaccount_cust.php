<!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">
                    <form action="<?php echo base_url('index.php/Customer/insertCustomerDetails'); ?>" method="POST">

                         
                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <i><b><h1 style="color:white" class="main-content-title tx-30">Fill the your details to create your bank account</h1></b></i>
                                
                            </div>
                            
                        </div>
                        </div>
                        <!-- End Page Header -->

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                      
                                        <div class="row">
           
                                            <div class="col-lg-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                    <label class="mg-b-0">Bank</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                     <select class="form-control mb-3" name="Bank" >
                                                     <option disabled selected>select</option>
                                                      <option value="Saving">Saving Account</option>
                                                     <option value="Current">Current Account</option>
                                                     <option value="Saving">Recurring Deposit Account</option>
                                                     <option value="Current">Fixed Deposite Account</option>
                                                     <option value="Current">NRI Account</option>
                                                </select>
                                                    
                                                </div>
                                            </div>
                                               
                                        </div>
                                           <div class="col-lg-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-3">
                                                    <label class="mg-b-0">Type of Account</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                     <select class="form-control mb-3" name="TypeOfAccount" >
                                                     <option disabled selected>select</option>
                                                      <option value="Saving">Saving Account</option>
                                                     <option value="Current">Current Account</option>
                                                     <option value="Saving">Recurring Deposit Account</option>
                                                     <option value="Current">Fixed Deposite Account</option>
                                                     <option value="Current">NRI Account</option>
                                                </select>
                                                    
                                                </div>
                                            </div>
                                               
                                        </div>
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Name</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                
                                                    <input class="form-control" name="Name" placeholder="" type="text" required pattern="[a-z , A-Z]*" title="Please enter alphabets only">
                                                </div>
                                            </div>
                                          
                                        </div>
                                         <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0">Email Id</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                    <input class="form-control" name="EmailId" placeholder="" type="Textarea" required >
                                                </div>
                                            </div>   
                                        </div>
                                             
                                           

                                          
                                        </div>

                                        <div class="row row-sm mg-t-20">
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0"> Mobile No</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    
                                                    <input class="form-control" name="MobileNo" placeholder="" type="Textarea" required >
                                                </div>
                                            </div>   
                                        </div>
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Address</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" name="Address" placeholder="" type="" required>
                                                </div>
                                            </div>
                                           
                                           </div>
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0"> State</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                     <input class="form-control" type="text" name="State" placeholder="" required>


                                                </div>
                                            </div>
                                           
                                           </div>
                                           <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-3">
                                                    <label class="mg-b-0"> Country</label>
                                                </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                                    <input class="form-control" type="text" name="Country" placeholder="" required>


                                                </div>
                                            </div>
                                           
                                           </div>
                                        </div>
                                            <div class="row row-sm mg-t-20">
                                            <div class="col-lg-3 mb-3">
                                                <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                         <label class="mg-b-0"> Age</label>
                                                     </div>
                                                     <div class="col-md-9 mg-t-5 mg-md-t-0">
                                               
                                                  <input class="form-control" type="text" name="Age" placeholder="" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Date of Birth</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                      <input class="form-control" type="date" name="DOB" placeholder="" required>

                                                </div>
                                            </div>

                                            
                                            </div>

                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Aadhar Card Number</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                      <input class="form-control" type="text" name="AadharCardNumber" placeholder="" required>

                                                </div>
                                            </div>

                                            
                                            </div>
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                    <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-3">
                                                            <label class="mg-b-0">Pan Card Number</label>
                                                        </div>
                                                        <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                            <input class="form-control" type="text" name="PanCardNumber" placeholder="" required>

                                                        </div>
                                                    </div>

                                            
                                            </div>
                                           
                                           </div>

                                             <div class="row row-sm mg-t-20">
                                            <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                    <div class="row row-xs align-items-center mg-b-20">
                                                        <div class="col-md-3">
                                                            <label class="mg-b-0">Account Holder Gender</label>
                                                        </div>
                                                        <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                             <select class="form-control mb-3" name="AccountHolderGender" >
                                                     <option disabled selected>select</option>
                                                      <option value="Male">Male</option>
                                                     <option value="Female">Female</option>
                                                     <option value="Other">Other</option>
                                                </select>

                                                        </div>
                                                    </div>

                                            
                                            </div>

                                             <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Annual Income</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                      <input class="form-control" type="text" name="AnnualIncome" placeholder="" required>

                                                </div>
                                            </div>

                                            
                                            </div>
                                                                                        <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Nominee Name</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                      <input class="form-control" type="text" name="NomineeName" placeholder="" required>

                                                </div>
                                            </div>



                                            
                                            </div>

                                           <div class="col-lg-3 mg-t-10 mg-lg-t-0 mb-3">
                                                  <div class="row row-xs align-items-center mg-b-20">
                                                    <div class="col-md-3">
                                                    <label class="mg-b-0">Nominee Account Number</label>
                                                    </div>
                                                <div class="col-md-9 mg-t-5 mg-md-t-0">

                                                      <input class="form-control" type="text" name="NomineeAccountNumber" placeholder="" required>

                                                </div>
                                            </div>

                                           
                                           
                                           </div>

                                           <div class=" mg-t-2" >
                                            <div align="right">
                                            <button class="btn ripple btn-success">Register</button>
                                        </div>
                                         </div>


                                             
                                           
                                           </div>

                                            
                                        
                                       
                                        
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                 

                   

                      
                    </form>
                </div>
            </div>
            <!-- End Main Content-->