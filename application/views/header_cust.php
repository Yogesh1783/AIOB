<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta name="description" content="Dashpro-  Admin Panel HTML Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="responsive admin template,bootstrap dashboard theme,simple dashboard template,bootstrap admin dashboard,bootstrap 4 template admin,template admin bootstrap 4,template bootstrap 4 admin,quality dashboard template,bootstrap 4 admin template,premium bootstrap template,bootstrap simple dashboard,simple admin panel template,dashboard admin bootstrap 4,html css dashboard template,admin dashboard bootstrap 4,bootstrap 4 admin dashboard,bootstrap dashboard template">

        <!-- Favicon -->
        

        <!-- Title -->
        <title>AIOB - All In  One Bank</title>

        <!-- Bootstrap css-->
        <link href=" <?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
           
        <!-- Icons css-->
        <link href=" <?php echo base_url()?>assets/css/icons.css" rel="stylesheet"/>

        <!-- Internal DataTables css-->
        <link href=" <?php echo base_url()?>assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href=" <?php echo base_url()?>assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
        <link href=" <?php echo base_url()?>assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />

        <!-- Style css-->
        <link href=" <?php echo base_url()?>assets/css/style.css" rel="stylesheet">
        <link href=" <?php echo base_url()?>assets/css/dark-boxed.css" rel="stylesheet">
        <link href=" <?php echo base_url()?>assets/css/boxed.css" rel="stylesheet">
        <link href=" <?php echo base_url()?>assets/css/skins.css" rel="stylesheet">
        <link href=" <?php echo base_url()?>assets/css/dark-style.css" rel="stylesheet">

        <!-- Color css-->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href=" <?php echo base_url()?>assets/css/colors/color.css">

        <!-- P-SCROLL css-->
        <link href=" <?php echo base_url()?>assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">

        <!-- Select2 css -->
        <link href=" <?php echo base_url()?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">
        
        <!-- Fullcalendar css-->
        <link href='<?php echo base_url()?>assets/plugins/fullcalendar/fullcalendar.css' rel='stylesheet' />
        <link href='<?php echo base_url()?>assets/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <!-- Switcher css-->
        <link href=" <?php echo base_url()?>assets/switcher/css/switcher.css" rel="stylesheet">
        <link href=" <?php echo base_url()?>assets/switcher/demo.css" rel="stylesheet">
</head>


     <body style="background-image: url(../../assets/img/brand/Banking.jpg); background-repeat: no-repeat; background-size: 100%;" class="horizontalmenu">

        <!-- Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft text-center">
                                <div class="p-3">
                                    <a href="https://www.spruko.com/demo/dashpro/index.html" class="btn btn-primary btn-block mt-0">View Demo</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary btn-block">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-info btn-block">Our Portfolio</a>
                                </div>
                            </div>
                            <div class="swichermainleft mb-4">
                                <h4>Navigation Style</h4>
                                <div class="pl-3 pr-3 pt-3">
                                    <a class="btn btn-primary btn-block" href="index.html"> Horizontal </a>
                                    <a class="btn btn-secondary btn-block" href="https://www.spruko.com/demo/dashpro/Dashpro/HTML-LTR/Verticalmenu-light/index.html"> Leftmenu</a>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Styles</h4>
                                <div class="switch_section my-2">
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Theme Style</span>
                                        <div class="onoffswitch2">
                                            <input type="checkbox" name="onoffswitch2" id="myonoffswitch52" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch52" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="switch_section my-2">
                                    <div class="switch-toggle d-flex">
                                        <span class="mr-auto">Boxed Style</span>
                                        <div class="onoffswitch2">
                                            <input type="checkbox" name="onoffswitch2" id="myonoffswitch53" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch53" class="onoffswitch2-label"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Theme Layout</h4>
                                <div class="switch_section d-flex my-4">
                                    <div class="d-block text-center mx-auto">
                                        <button type="button" id="background5" class="bg10 mb-3 wscolorcode1 blackborder"></button>
                                        <span class="badge badge-light tx-12">Dark layout</span>
                                    </div>
                                    <div class="d-block text-center mx-auto">
                                        <button type="button" id="background6" class="bg11 mb-3 wscolorcode1 blackborder"></button>
                                        <span class="badge badge-light tx-12">Light layout</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Header Styles Mode</h4>
                                <div class="switch_section d-flex my-4">
                                    <div class="d-block text-center mx-auto">
                                        <button type="button" id="background3" class="bg12 mb-3 wscolorcode1 blackborder"></button>
                                        <span class="badge badge-light tx-12">Dark Header</span>
                                    </div>
                                    <div class="d-block text-center mx-auto">
                                        <button type="button" id="background4" class="bg13 mb-3 wscolorcode1 blackborder"></button>
                                        <span class="badge badge-light tx-12">Color Header</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Horizontalmenu Styles Mode</h4>
                                <div class="switch_section d-flex my-4">
                                    <div class="d-block text-center mx-auto">
                                        <button type="button" id="background7" class="bg7 mb-3 wscolorcode1 blackborder"></button>
                                        <span class="badge badge-light tx-12">Color Menu</span>
                                    </div>
                                    <div class="d-block text-center mx-auto">
                                        <button type="button" id="background8" class="bg8 mb-3 wscolorcode1 blackborder"></button>
                                        <span class="badge badge-light tx-12">Light Menu</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->

        <!-- Loader -->
       
        <!-- End Loader -->


        <!-- Page -->
        <div class="page">

            <!-- Main Header-->
            <div style="background-color: transparent;" class="main-header horizontal-header">
                <div class="container">
                    <div class="main-header-left">
                        <a class="main-header-menu-icon d-lg-none" href="#" id="mainNavShow"><span></span></a>
                        <a class="main-logo" href="index.html">
                            <img src="../../assets/img/brand/iconpivon4.PNG" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../../assets/img/brand/iconpivon4.PNG" class="header-brand-img desktop-logo theme-logo" alt="logo">
                        </a>
                    </div>
                    <div class="main-header-center">
                        <div class="responsive-logo">
                            <a href="index.html"><img src="../../assets/img/brand/iconpivon4.PNG" class="mobile-logo" alt="logo"></a>
                            <a href="index.html"><img src="../../assets/img/brand/iconpivon4.PNG" class="mobile-logo-dark" alt="logo"></a>
                        </div>
                        <div class="input-group">
                            <div class="mt-0">
                                <form class="form-inline">
                                    <div class="search-element">
                                        <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                        <button class="btn" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-right">
                        

                        <div class="dropdown d-md-flex">
                            <a class="nav-link icon full-screen-link fullscreen-button" href="#">
                                <i class="fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 15H3v4c0 1.1.9 2 2 2h4v-2H5v-4zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm14-2h-4v2h4v4h2V5c0-1.1-.9-2-2-2zm0 16h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zM12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg></i>
                                <i class="exit-fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/></svg></i>
                            </a>
                        </div>
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user" ><img alt="avatar" src="../../assets/img/brand/ptt.png"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title"><?php echo $_SESSION['custEmail']; ?></h6>
                                    <p class="main-notification-text">Admin</p>
                                </div>
                                
                                
                                
                                <a class="dropdown-item" href="<?php echo base_url('index.php/admin/Logout')?>">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                        </button><!-- Navresponsive closed -->
                    </div>
                </div>
            </div>
            <!-- End Main Header-->

            <!-- Mobile-header -->
            <div style="background-color: transparent;" class="mobile-main-header">
                <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="dropdown header-search">
                                <a class="nav-link icon header-search">
                                    <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></i>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="main-form-search p-2">
                                        <div class="">
                                            <div class="mt-0">
                                                <form class="">
                                                    <div class="search-element d-flex">
                                                        <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                        <button class="btn" type="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link icon full-screen-link fullscreen-button" href="#"><i class="fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 15H3v4c0 1.1.9 2 2 2h4v-2H5v-4zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm14-2h-4v2h4v4h2V5c0-1.1-.9-2-2-2zm0 16h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zM12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg></i>
                                    <i class="exit-fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/></svg></i>
                                </a>
                            </div>
                           
                            <div class="dropdown main-profile-menu">
                                <a class="d-flex" href="#">
                                    <span class="main-img-user" ><img alt="avatar" src="../../assets/img/users/ptt.png"></span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="header-navheading">
                                        <h6 class="main-notification-title">Alexandra Churchill</h6>
                                        <p class="main-notification-text">Web Designer</p>
                                    </div>
                                    <a class="dropdown-item border-top" href="profile.html">
                                        <i class="fe fe-user"></i> My Profile
                                    </a>
                                    <a class="dropdown-item" href="profile.html">
                                        <i class="fe fe-edit"></i> Edit Profile
                                    </a>
                                    <a class="dropdown-item" href="profile.html">
                                        <i class="fe fe-settings"></i> Account Settings
                                    </a>
                                    <a class="dropdown-item" href="profile.html">
                                        <i class="fe fe fe-unlock"></i> Lock screen
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('index.php/admin/Logout')?>">
                                        <i class="fe fe-power"></i> Sign Out
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown  header-settings">
                                <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                                    <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"/></svg></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
            <!-- Horizonatal menu-->
             <div class="main-navbar hor-menu sticky">
                <div class="container">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link  font-weight-semibold" href="<?php echo base_url('index.php/Admin/Admin')?>">Dashboard</a>
                            
                        </li>
                        
                       
                               


                               

                                
                               
                            </ul>
                        </li>
                        
                        
                      
                        
                    </ul>
                </div>
            </div>