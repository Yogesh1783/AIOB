 
 <!-- Main Content-->
            <div class="main-content pt-0">
                <div class="container">

                        <!-- Page Header -->
                        <div class="page-header">
                            <div class="page-header-1">
                                <h1 style="color:white" class="main-content-title tx-30">Admin Panel</h1>
                                <ol class="breadcrumb">
                                    <li style="color:white;" class="breadcrumb-item active" aria-current="page">Business Loan Offer List</li>
                                </ol>
                            </div>
                             <div class="page-header-1">
                            
                                 <a href="<?php echo base_url('index.php/Admin/addBusinessLoanOffer')?>"><button class="btn ripple btn-main-primary" style="background-color: blue;">Add Business Loan Offer</button></a>
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
                                                         <th style="wIDth:2%">Offer</th>
                                                        
                                                        


                                                        <th style="wIDth:2%">Action</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $index=1; 
                                                    foreach($businessloanlists as $businessloanlist){?>
                                                    <tr>
                                                        <td><?php echo $index?></td>
                                                        <td><?php echo $businessloanlist->BusinessLoanOffer?></td>
                                                      

                                                         

                                                      <!--  <td><button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print</button></td>
                                                        
                                                        
                                                       
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
            </div>-->
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

           