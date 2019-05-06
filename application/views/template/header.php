    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Sisfo Akper </title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/png">

    



      <!--Select2 styles-->
      

     
   
   <link href="<?php echo base_url('assets/plugins/datatables/css/jquery.dataTables.min.css') ?>" rel="stylesheet" type="text/css"/>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('assets/plugins/morris-chart/morris.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
  
    <link href="<?php echo base_url('assets/plugins/sweetalert/sweetalert.css') ?>" rel="stylesheet"/>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/nanoscroller.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet" type="text/css" />
    
    
    
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" type="text/css" />



    <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />

    


    
  
    </head>
    
    <body class="fixed-top">
      <!--Start Page loader -->
      <div id="pageloader">   
            <div class="loader">
     <!--         <img src="<?php echo base_url('assets/images/progress.gif') ?>" alt='loader' /> -->
            </div>
       </div>
       <!--End Page loader -->
        <div id="wrapper">
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-main">
                
                    <!--<div class="logo">
                        <div class="row">
                          <div class="col-sm-4 logo-akper"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></div>
                            <div class="col-sm-8 logo_akper"><h4>AKPER BPC</h4></div> 
                        </div>
                            
                    </div> -->
                    <div class="logo">
                        <a href="<?php echo site_url('dashboard'); ?>">
                            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Logo" class="img-responsive"/> </a>
                    </div> <!--/.logo-->

                    
                    <div class="sidebar-main-toggle">
                        <a href="javascript:;" class="navbar-small pull-left "><i class="fa fa-bars"></i></a>
                    </div> <!--/.menu-toggler-->

                  
                   <!--Start Right Menu-->
                    <div class="right-menu">
                        <ul class="nav navbar-nav navbar-right">
                           
                           <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge">6</span>
                                </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">Notifications</li>
                                        <li class="notification-list scroll list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                              <div class="notification-icon-main  bg-primary  pull-left">
                                                <i class="notification-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">A new order has been placed</p>
                                                <p class="notification-time">9:15 AM</p>
                                            </div> 
                                           </a>
         
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="notification-icon-main bg-success  pull-left">
                                                <i class="notification-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">Databse backup is complete</p>
                                                <p class="notification-time">10:25 AM</p>
                                            </div>
                                         </a>
         
                                          <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="notification-icon-main bg-info  pull-left">
                                                <i class="notification-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">New Member Registration</p>
                                                 <p class="notification-time">11:25 AM</p>
                                            </div>
                                         </a>

                                           <!-- list item-->
                                          <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="notification-icon-main  bg-danger  pull-left">
                                                <i class="notification-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">Database Error</p>
                                                <p class="notification-time">11:45 AM</p>
                                            </div>
                                          </a>
         
                                           <!-- list item-->
                                          <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="notification-icon-main bg-warning  pull-left">
                                                <i class="notification-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">New settings</p>
                                                <p class="notification-time">12:15 PM</p>
                                            </div>
                                          </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="notification-icon-main bg-success  pull-left">
                                                <i class="notification-icon fa fa-user-plus"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">New Member Registration</p>
                                               <p class="notification-time">12:30 PM</p>
                                            </div>
                                         </a>
         
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                              <div class="notification-icon-main  bg-info  pull-left">
                                                <i class="notification-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title">A new order has been placed</p>
                                                <p class="notification-time">12:40 PM</p>
                                            </div> 
                                           </a>
                                          
                                        </li>
                                        <li class="dropdown-footer"><a href="#">View All Notifications</a></li>
                                    </ul>
                                </li>
                           
                           
                           
                          <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge">5</span>
                                </a>
                                    <ul class="dropdown-menu">
                                       <li class="dropdown-header">You Have 5 New Message</li>
                                        <li class="notification-list scroll list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="message-icon pull-left">
                                               <img src="<?php echo base_url('assets/images/users/avatar-1.jpg') ?>"  alt=""/>
                                            </div>
                                            <div class="message-info-main">
                                                <span class="message-name">John Doe</span>
                                                <span class="message-text">Payment Confirmation for new sell</span>
                                                <span class="message-time">9:30 AM</span>
                                            </div>
                                          </a>
         
                                           <!-- list item-->
                                          
                                          <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                            <div class="message-icon pull-left">
                                               <img src="<?php echo base_url('assets/images/users/avatar-6.jpg') ?>"  alt=""/>
                                            </div>
                                            <div class="message-info-main">
                                                <span class="message-name">David</span>
                                                <span class="message-text">Payment Confirmation for new sell</span>
                                                <span class="message-time">11:45 AM</span>
                                            </div>
                                        </a>
                                        
                                        </li>
                                        <li class="dropdown-footer"><a href="#">View All</a></li>
                                    </ul>
                                </li> 
                           

                             <li class="dropdown dropdown-usermenu">
                                <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-photo"> <?php 
                                  if ($this->session->userdata('mahasiswa')) {
                                    echo $this->session->userdata('nama_lengkap');
                                  }elseif($this->session->userdata('management')){
                                    echo $this->session->userdata('username');
                                  }elseif($this->session->userdata('dosen')){
                                    echo $this->session->userdata('nama_dosen');
                                  }


                                 ?> <span class="caret hidden-sm hidden-xs"></span></div>
                                
                                <?php 
                                $id = $this->session->userdata('id');
                                $id_dosen = $this->session->userdata('id_dosen');
                                $id_mahasiswa = $this->session->userdata('id_mahasiswa');
                                 ?>
                                </a>
                             <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="<?php 
                                  if($this->session->userdata('dosen')){
                                    echo site_url('users/setting/'.$id_dosen);
                                  }
                                  if($this->session->userdata('management')){
                                   echo site_url('users/setting/'.$id); 
                                  }
                                  if($this->session->userdata('mahasiswa')){
                                   echo site_url('mahasiswa/setting'); 
                                  }
                                 ?>"><i class="fa fa-wrench"></i>  Setting</a></li>
                                
                                <li><a href="<?php if($this->session->userdata('management')){
                                  echo site_url('users/profile/'.$id);
                                }
                                if($this->session->userdata('dosen')){
                                  echo site_url('users/profile/'.$id_dosen);
                                }
                                if($this->session->userdata('mahasiswa')){
                                   echo site_url('mahasiswa/biodata/'.$id_mahasiswa); 
                                  }

                                 ?>"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-info"></i>  Help</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php if($this->session->userdata('management') ||  $this->session->userdata('dosen')){
                                  echo site_url('auth_management/logout');
                                }
                                  if($this->session->userdata('mahasiswa')){
                                    echo site_url('auth_management/logout_mhs');
                                  }
                                 ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>                       
                    </ul>
                    </div>
                 <!--End Right Menu-->
                </div>
            </div>
           <!--End page-header-->
           
            <div class="clearfix"> </div>
