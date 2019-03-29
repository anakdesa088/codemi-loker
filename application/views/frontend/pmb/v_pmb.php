    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8" />
      <title>Sisfo Akper </title>
      <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
      <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/png">
      <link href="<?php echo base_url('assets/dropify/css/dropify.css') ?>" rel="stylesheet" type="text/css" />

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
         <!-- <img src="<?php echo base_url('assets/images/progress.gif') ?>" alt='loader' />-->
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
                        <a href="index.html">
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
                        <a href="javascript:void(0);" class="notification list-group-item">
                          <div class="message-icon pull-left">
                           <img src="<?php echo base_url('assets/images/users/avatar-2.jpg') ?>"  alt=""/>
                         </div>
                         <div class="message-info-main">
                          <span class="message-name">Johnson </span>
                          <span class="message-text">New item approved</span>
                          <span class="message-time">9:35 AM</span>
                        </div>
                      </a>

                      <!-- list item-->
                      <a href="javascript:void(0);" class="notification list-group-item">
                        <div class="message-icon pull-left">
                         <img src="<?php echo base_url('assets/images/users/avatar-3.jpg') ?>"  alt=""/>
                       </div>
                       <div class="message-info-main">
                        <span class="message-name">Williams</span>
                        <span class="message-text">New item sell</span>
                        <span class="message-time">9:45 AM</span>
                      </div>
                    </a>

                    <!-- list item-->
                    <a href="javascript:void(0);" class="notification list-group-item">
                      <div class="message-icon pull-left">
                       <img src="<?php echo base_url('assets/images/users/avatar-4.jpg') ?>"  alt=""/>
                     </div>
                     <div class="message-info-main">
                      <span class="message-name">Mark</span>
                      <span class="message-text">New changes done</span>
                      <span class="message-time">10:35 AM</span>
                    </div>
                  </a>

                  <!-- list item-->
                  <a href="javascript:void(0);" class="notification list-group-item">
                    <div class="message-icon pull-left">
                     <img src="<?php echo base_url('assets/images/users/avatar-5.jpg') ?>"  alt=""/>
                   </div>
                   <div class="message-info-main">
                    <span class="message-name">Mark </span>
                    <span class="message-text">Admin template customize</span>
                    <span class="message-time">11:00 AM</span>
                  </div>
                </a>

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
            <div class="user-photo"><?php echo $this->session->userdata('email');  ?> <span class="caret hidden-sm hidden-xs"></span></div>


          </a>
          <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
            <li><a href="#"><i class="fa fa-wrench"></i>  Settings</a></li>
            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
            <li><a href="#"><i class="fa fa-info"></i>  Help</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('backend/auth/c_keluar'); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
          </ul>
        </li>                       
      </ul>
    </div>
    <!--End Right Menu-->
  </div>
</div>
<!--End page-header-->

<div class="clearfix"> </div>
<!--Start Mian page container-->

<!-- End Sidebar Main-->

<!--Start wrapperr-->

<div class="content-main container">

  <!--Start Page Title-->
  <div class="page-title-box ">
    <h4 class="page-title">Form</h4>
    <ol class="breadcrumb">
      <li> <a href="index.html">Dashboard</a> </li>
      <li> <a href="#">Forms </a> </li>
      <li class="active">Form Basic </li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <!--End Page Title-->          
  <div class="container">  
    <div class="row">
     <div class="col-md-12">
       <div class="white-box">  

        <center>
          <h4 class="card-title" style="letter-spacing: 10px;">FORMULIR PENDAFTARAN</h4>
          <h3 class="card-title">SELEKSI PENERIMAAN MAHASISWA BARU</h3>
          <h4 class="card-title">TAHUN AKADEMIK 2019/2020</h4>
          <h4 class="card-title">AKPER BUNTET PESANTREN CIREBON   </h4>
        </center>
      </div></div></div></div>

      <!--Start row-->
      <div class="container">  

<div class="row">
 <div class="col-md-12">
   <div class="white-box">
    <?php echo $this->session->flashdata('sukses'); ?>
     <h2 class="header-title"></h2>
     <h2 class="header-title"></h2>
     <?php $id_pmb = $tampil->id_pmb;   ?>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('page/c_proses_pmb/'.$id_pmb); ?>" class="form-horizontal">


         

<div class="form-group">
    <label class="col-md-2 control-label">Nama Lengkap</label>
    <div class="col-md-10">
      <input class="form-control"  value="<?php echo $tampil->nama_lengkap; ?>" name="nama_lengkap"  type="text">
  </div>
</div>





<div class="form-group">
    <label class="col-md-2 control-label">Kewarganegaraan</label>
    <div class="col-md-10">
        <div class="row">
        <div class="col-md-2">
        <div class="radio">
            <input type="radio" <?php if($tampil->kewarganegaraan == 'WNI'){ ?> checked="" <?php } ?> value="WNI" name="kewarganegaraan" id="radio-1">
            <label for="radio-1">WNI</label>
        </div>
        </div>
        <!-- /.radio -->
        <div class="col-md-2">
        <div class="radio primary">
          <input type="radio" value="WNA" <?php if($tampil->kewarganegaraan == 'WNA'){ ?> checked="" <?php } ?> name="kewarganegaraan" id="radio-2">
          <label for="radio-2">WNA</label>
        </div>
      </div>
  </div>

  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Jenis Kelamin</label>
    <div class="col-md-10">
        <div class="row">
        <div class="col-md-2">
        <div class="radio">
            <input type="radio" <?php if($tampil->jk == 'L'){ ?> checked="" <?php } ?> value="L" name="jk" id="radio-1">
            <label for="radio-1">Laki-laki</label>
        </div>
        </div>
        <!-- /.radio -->
        <div class="col-md-2">
        <div class="radio primary">
          <input type="radio" value="P" <?php if($tampil->jk == 'P'){ ?> checked="" <?php } ?> name="jk" id="radio-2">
          <label for="radio-2">Perempuan</label>
        </div>
      </div>
  </div>

  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tempat, Tanggal Lahir</label>
    <div class="col-md-3">
      <input class="form-control" value="<?php echo $tampil->tmpt_lahir; ?>" name="tmpt_lahir"  type="text">
  </div>
  <div class="col-md-4">
      <input type="text" value="<?php echo $tampil->tgl_lahir; ?>"  name="tgl_lahir" class="form-control default-date-picker-autoclose" >
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tinggi Badan</label>
    <div class="col-md-10">
      <input class="form-control" name="tinggi_badan" value="<?php echo $tampil->tinggi_badan; ?>"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Berat Badan</label>
    <div class="col-md-10">
      <input class="form-control" name="berat_badan" value="<?php echo $tampil->berat_badan; ?>" type="text">
  </div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-10">
      <input class="form-control" row="5" name="alamat" value="<?php echo $tampil->alamat; ?>" type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Kode Pos</label>
    <div class="col-md-10">
      <input class="form-control" name="kode_pos"  value="<?php echo $tampil->kode_pos; ?>" type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nama Ayah</label>
    <div class="col-md-10">
      <input class="form-control" value="<?php echo $tampil->nama_ayah; ?>" name="nama_ayah"  type="text">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Ibu</label>
    <div class="col-md-10">
      <input class="form-control" name="nama_ibu" value="<?php echo $tampil->nama_ibu; ?>"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">No Handphone 1</label>
    <div class="col-md-10">
      <input class="form-control" name="no_hp1"  value="<?php echo $tampil->no_hp1; ?>" type="number"> 
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">No Handphone 2</label>
    <div class="col-md-10">
      <input class="form-control" name="no_hp2" value="<?php echo $tampil->no_hp2; ?>" type="number"> 
  </div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label">Info Dari</label>
    <div class="col-md-10">
      <input class="form-control" name="info_dari" value="<?php echo $tampil->info_dari; ?>"  type="text"> 
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Asal Sekolah</label>
    <div class="col-md-10">
      <input class="form-control" value="<?php echo $tampil->nama_asal_sekolah; ?>" name="nama_asal_sekolah"  type="text">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Alamat Asal Sekolah</label>
    <div class="col-md-10">
      <input class="form-control" name="alamat_asal_sekolah" value="<?php echo $tampil->alamat_asal_sekolah; ?>"  type="text">
  </div>
</div>


<center><h3 class="box-title m-t-40">JENIS KELENGKAPAN BERKAS</h3></center>
                                                        <hr>
                                                     <div class="container">   
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <?php if($tampil->foto_ijazah == ""){ ?>

                                                                    <span><input type="file"  id="input-file-now" class="dropify" name="foto_ijaza"> </span> 
                                                                <?php }else{ ?>
                                                                    <input type="file" id="input-file-now-custom-1" name="foto_ijaza" class="dropify" data-default-file="<?php echo base_url('uploads/'.$tampil->foto_ijazah); ?>" />
                                                                <?php } ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>2. Surat Keterangan Sehat dan tidak Buta Warna</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <?php if($tampil->foto_kesehatan == ""){ ?>

                                                                    <span><input type="file"  id="input-file-now" class="dropify" name="foto_kesehatan"> </span> 
                                                                <?php }else{ ?>
                                                                    <input type="file" id="input-file-now-custom-1" name="foto_kesehatan" class="dropify" data-default-file="<?php echo base_url('uploads/'.$tampil->foto_kesehatan); ?>" />
                                                                <?php } ?>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>3. Pas foto 4 x 6 = 5 lembar, 3 x 4 =2 lembar dan 2 x 3 = 2 lembar</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <?php if($tampil->foto_diri == ""){ ?>

                                                                    <span><input type="file"  id="input-file-now" class="dropify" name="foto"> </span> 
                                                                <?php }else{ ?>
                                                                    <input type="file" id="input-file-now-custom-1" name="foto" class="dropify" data-default-file="<?php echo base_url('uploads/'.$tampil->foto_diri); ?>" />
                                                                <?php } ?>

                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>4. Bukti Tranfer  Pembayaran</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <?php if($tampil->foto_bukti_pembayaran == ""){ ?>

                                                                    <span><input type="file"  id="input-file-now" class="dropify" name="foto_bukti_pembayaran"> </span> 
                                                                <?php }else{ ?>
                                                                    <input type="file" id="input-file-now-custom-1" name="foto_bukti_pembayaran" class="dropify" data-default-file="<?php echo base_url('uploads/'.$tampil->foto_bukti_pembayaran); ?>" />
                                                                <?php } ?>

                                                                

                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


<input type="hidden" name="foto_ijaza2" value="<?php echo $tampil->foto_ijazah; ?>">
                                                                    <input type="hidden" name="foto_kesehatan2" value="<?php echo $tampil->foto_kesehatan; ?>">
                                                                    <input type="hidden" name="foto2" value="<?php echo $tampil->foto_diri; ?>">
                                                                <input type="hidden" name="foto_bukti_pembayaran2" value="<?php echo $tampil->foto_bukti_pembayaran; ?>">

<div class="form-group">  
  <div class="col-md-12">
        <div class="col-md-10">
        </div>
        <div class="col-ms-2">
            
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      
  </div>
</div>


</form>
</div>
</div>        



      </div>
      <!-- end row --> 



    </div>
    <!--End row-->



  </div> <!--End content-main-->

  <!--End wrapper-->

  <!--Start  Footer -->
  <footer class="footer-main"> 2019 &copy; AKPER BUNTET PESANTREN </footer> 


  <!--JQUERY SCRIPTS-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/dropify/js/dropify.js') ?>"></script>  
  <script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/pages/validation-custom.js') ?>"></script>
    <!--Multiselect plugin-->
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-multi-select/js/jquery.multi-select.js') ?>"></script> 
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-multi-select/js/jquery.quicksearch.js') ?>"></script> 
  <script type="text/javascript"  src="<?php echo base_url('assets/pages/multi-select-init.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/pages/datetimepicker-custom.js') ?>"></script>

<!--End row-->

<script>
    $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated

                // Used events
            });
    $('.default-date-picker-autoclose').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
        </script>
    
    


</body>

</html>