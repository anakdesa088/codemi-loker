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
                           
                           <?php
                           if ($this->session->userdata('mahasiswa')) {
                             # code...
                           
                           ?>
<li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge">
<?php 
$id_mahasiswa = $this->session->userdata('id_mahasiswa');
$read = 0;
$this->db->where('id_mahasiswa',$id_mahasiswa);
$this->db->like('read', $read);
$this->db->from('pengumuman_mhs');
$data = $this->db->count_all_results();



 echo $data;


?>                                      



                                    </span>
<?php 

$id_mahasiswa = $this->session->userdata('id_mahasiswa');
$read = 0;
$this->db->where('id_mahasiswa',$id_mahasiswa);
$this->db->like('read', $read);
$info = $this->db->get('pengumuman_mhs');



?>

                                </a>
                                    <ul class="dropdown-menu">
                                        
                                      
                                        <li class="dropdown-header">Pesan</li>
                                    <?php foreach ($info->result() as $r) {
                                        # code...
                                        ?>
                                           <!-- list item-->
                                           <a href="<?php echo site_url('pengumuman/view_pengumuman_mhs/'.$r->id_pengumuman_mhs); ?>" class="notification list-group-item">
                                              <div class="notification-icon-main  bg-info  pull-left">
                                                <i class="notification-icon fa fa-bolt"></i>
                                            </div>
                                            <div class="notification-box">
                                                <p class="notification-title"><?php echo $r->judul; ?></p>
                                                <p class="notification-time"><?php echo $r->tanggal_kirim; ?></p>
                                            </div> 
                                           </a>
                                      <?php } ?>    
                                        </li>
                                      
                                        <li class="dropdown-footer"><a href="<?php echo site_url('pengumuman/list_pengumuman_mhs'); ?>">Lihat Semua Pengumuman</a></li>
                                    </ul>
                                </li>
                           

                           <?php
                         }
                           ?>
                           
                           
                     
                           

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
                                    echo site_url('users/setting');
                                  }
                                  if($this->session->userdata('management')){
                                   echo site_url('users/setting'); 
                                  }
                                  if($this->session->userdata('mahasiswa')){
                                   echo site_url('mahasiswa/setting'); 
                                  }
                                 ?>"><i class="fa fa-wrench"></i>  Setting</a></li>
                                
                                <li><a href="<?php if($this->session->userdata('management')){
                                  echo site_url('users/profile');
                                }
                                if($this->session->userdata('dosen')){
                                  echo site_url('dosen/biodata');
                                }
                                if($this->session->userdata('mahasiswa')){
                                   echo site_url('mahasiswa/biodata/'.$id_mahasiswa); 
                                  }

                                 ?>"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-info"></i>  Help</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php if($this->session->userdata('management') ||  $this->session->userdata('dosen')){
                                  echo site_url('management/logout');
                                }
                                  if($this->session->userdata('mahasiswa')){
                                    echo site_url('management/logout_mhs');
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
