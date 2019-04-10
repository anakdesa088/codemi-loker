    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8" />
      <title>PENIREIMAAN MASAHASISWA BARU</title>
      <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
      <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/png">
      <link href="<?php echo base_url('assets/dropify/css/dropify.css') ?>" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/gallery/css/lightgallery.css') ?>">


     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-multi-select/css/multi-select.css') ?>" />
     <!--Touchspin styles-->
     <link href="<?php echo base_url('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" />
      <!--Select2 styles-->
     <link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.css') ?>" />



      <!--Select2 styles-->
      <link href="<?php echo base_url('assets/dropify/css/dropify.css') ?>" rel="stylesheet" type="text/css" />


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
      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>


    </head>
       <body class="fixed-top">
      <!--Start Page loader -->
      <div id="pageloader">   
            <div class="loader">
              <img src="<?php echo base_url('assets/images/progress.gif') ?>" alt='loader' />
            </div>
       </div>
       <!--End Page loader -->
        <div id="wrapper">
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-main">
                
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo base_url('assets/images/logo.png') ?>" alt="Logo" class="img-responsive"/> </a>
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
                                    <span class="badge">
<?php 
$id_pmb = $this->session->userdata('id_pmb');
$read = 0;
$this->db->where('id_pmb',$id_pmb);
$this->db->like('read', $read);
$this->db->from('pengumuman');
$data = $this->db->count_all_results();



 echo $data.'<audio controls autoplay loop hidden>
      <source src="'. base_url('assets/notif.mp3').'">
</audio>';


?>                                      



                                    </span>
<?php 

$id_pmb = $this->session->userdata('id_pmb');
$read = 0;
$this->db->where('id_pmb',$id_pmb);
$this->db->like('read', $read);
$info = $this->db->get('pengumuman');



?>

                                </a>
                                    <ul class="dropdown-menu">
                                        
                                      <?php foreach ($info->result() as $r) {
                                        # code...
                                        ?>
                                        <li class="dropdown-header">Pesan</li>
                                    
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="notification list-group-item">
                                              <div class="notification-icon-main  bg-info  pull-left">
                                                <i class="notification-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title"><?php echo $r->judul; ?></p>
                                                <p class="notification-time"><?php echo $r->tanggal_kirim; ?></p>
                                            </div> 
                                           </a>
                                          
                                        </li>
                                      <?php } ?>
                                        <li class="dropdown-footer"><a href="<?php echo site_url('pmb/pengumuman'); ?>">View All Notifications</a></li>
                                    </ul>
                                </li>
                           
                           
                           
  


                          <!--<li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge">5</span>
                                </a>
                                    <ul class="dropdown-menu">
                                       <li class="dropdown-header">You Have 5 New Message</li>
                                        <li class="notification-list scroll list-group">
                                           
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
                            -->
                           

                             <li class="dropdown dropdown-usermenu">
                                <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-photo"><img src="<?php echo base_url('assets/images/users/avatar-1.jpg') ?>" alt=""></div>
                                <span class="hidden-sm hidden-xs"></span>
                                <span class="caret hidden-sm hidden-xs"></span>
                                </a>
                             <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="#"><i class="fa fa-wrench"></i>  Settings</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-info"></i>  Help</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('signin/keluar_pmb'); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>                       
                    </ul>
                    </div>
                 <!--End Right Menu-->
                </div>
            </div>
           <!--End page-header-->
<div class="clearfix"> </div>