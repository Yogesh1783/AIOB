 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Admin Panel</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white;" class="breadcrumb-item active" aria-current="page">user List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                            
                                 <a href="<?php echo base_url('index.php/Admin/adduser_ad')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add user</button></a>
                            </div>
                        </div>
                         <div class="page-header">
                            <div class="page-header-1">
                                <div class="page-header-1">
                                        <button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print</button>

                            </div>
                            </div>
                        </div> -->
                        <!-- End Page Header -->

                      

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                     
                                        <div class="table-responsive">
                                            <table style="wIDth:100%" ID="example3" class="table table-striped table-bordered text-nowrap" >
                                                <thead>
                                                    <tr>
                                                        <th style="wIDth:2%">Sl No</th>
                                                         <th style="wIDth:2%">Bank</th>
                                                        <th style="wIDth:2%">Type Of Account</th>
                                                        <th style="wIDth:2%">Name No</th>
                                                        <th style="wIDth:2%">Email ID </th>
                                                        <th style="wIDth:2%">Mobile No</th>
                                                        <th style="wIDth:2%">Address</th>
                                                        <th style="wIDth:2%">State</th>
                                                        <th style="wIDth:2%">Country</th>
                                                        <th style="wIDth:2%">Age</th>
                                                        <th style="wIDth:2%">DOB</th>
                                                        <th style="wIDth:2%">AadharCard Number</th>
                                                        <th style="wIDth:2%">PanCard Number</th>
                                                        <th style="wIDth:2%">AccountHolder Gender</th>
                                                        <th style="wIDth:2%">Annual Income</th>
                                                        <th style="wIDth:2%">Nominee Name</th>
                                                        <th style="wIDth:2%">Nominee Account Number</th>
                                                        


                                                        <th style="wIDth:2%">Action</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $index=1; 
                                                    foreach($users as $user){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                        <td><?php echo $user->Bank?></td>
                                                        <td><?php echo $user->TypeOfAccount?></td>
                                                        <td><?php echo $user->Name?></td>
                                                        <td><?php echo $user->EmailId?></td>
                                                        <td><?php echo $user->MobileNo?></td>
                                                        <td><?php echo $user->Address?></td>
                                                        <td><?php echo $user->State?></td>
                                                        <td><?php echo $user->Country?></td>
                                                        <td><?php echo $user->Age?></td>
                                                        <td><?php echo $user->DOB?></td>
                                                        <td><?php echo $user->AadharCardNumber?></td>
                                                        <td><?php echo $user->PanCardNumber?></td>
                                                        <td><?php echo $user->AccountHolderGender?></td>
                                                        <td><?php echo $user->AnnualIncome?></td>
                                                        <td><?php echo $user->NomineeName?></td>
                                                        <td><?php echo $user->NomineeAccountNumber?></td>
                                                        

                                                         

                                                        <td><button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print</button></td>
                                                        
                                                        
                                                       
                                                        <!-- Small modal -->
            <div class="modal" ID="modaldemo2<?php echo $user->ID;?>">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete user</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hIDden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this row?</p>
                            <?php echo $user->ID;?>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <a href=<?php echo base_url('index.php/Admin/deleteuser/'.$user->ID)?>"><button 
                                class="btn ripple btn-primary" type="button">Delete</button></a>
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Small Modal -->
                                                    </tr>
                                                   <?php $index++;}?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->


                 
                </div>
            </div>
            <!-- End Main Content-->

           