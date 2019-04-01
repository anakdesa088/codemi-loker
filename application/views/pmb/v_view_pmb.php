    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8" />
      <title>PENIREIMAAN MASAHASISWA BARU</title>
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
                                    <span class="badge">6</span>
                                </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">Notifications</li>
                                    
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
                                <div class="user-photo"><img src="<?php echo base_url('assets/images/users/avatar-1.jpg') ?>" alt=""></div>
                                <span class="hidden-sm hidden-xs"><?php echo $tampil->nama_lengkap; ?></span>
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
            
            <!--Start Mian page container-->
            <div class="main-container">
                <div class="sidebar-main">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="side-menu">
                            <li>
                              <a href="javascript:void(0)"><i class="ti-dashboard"></i> <span class="menu-label">Dashboard</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard2.html"> Dashboard 2</a></li>
                                </ul>
                            </li>
                            
                          <li>
                         <a href="javascript:void(0)"><i class="ti-new-window"></i> <span class="menu-label">UI Elements</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                    <li><a href="ui-buttons.html"> Buttons</a></li>
                                    <li ><a href="ui-panels.html"> Panels</a></li>
                                    <li ><a href="ui-dragabble-panels.html">Draggable Panels</a></li>
                                    <li ><a href="ui-tabs-accordion.html"> Tabs &amp; Accordion</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet alert</a></li>
                                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="ui-alert-notification.html">Alert &amp; Notification</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkbox &amp; radios</a></li>
                                    <li><a href="ui-range-slider.html">Range slider</a></li>
                                    <li><a href="ui-modals-tooltip.html">Modals Tooltip</a></li>
                                    <li><a href="ui-loading-button.html">Loading Buttons</a></li>
                                    <li><a href="nestable.html">Nestable</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>

                            

                            <li>
                            <a href="javascript:void(0)"><i class="ti-stats-up"></i> <span class="menu-label">Charts</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="float-chart.html"> Flot Charts</a></li>
                                <li><a href="morris-chart.html"> Morris Charts</a></li>
                                <li><a href="chart-js.html"> Chartjs</a></li>
                                <li><a href="knob-chart.html"> Knob Chart</a></li>
                                <li><a href="chart-sparkline.html"> Chart Sparkline</a></li>
                               </ul>
                            </li>

                            <li>
                           <a href="javascript:void(0)"><i class="icon-location-pin"></i> <span class="menu-label">Maps</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="google-map.html"> Google Map</a></li>
                                <li><a href="vector-map.html"> Vector Map</a></li>
                               </ul>
                            </li>

              <li><a href="widget.html"><i class="icon-docs"></i>  <span class="menu-label">Widget </span></a></li>
                            <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="menu-label">Calendar </span></a></li>
                            
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-sitemap"></i> <span class="menu-label">Multi Level Menu</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub nav-second-level collapse">
                                 <li><a href="#">Second Level Item</a></li>
                                 <li><a href="#">Second Level Item</a></li>
                                    <li>
                                    <a href="#"><span class="menu-label">Third Level</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <li>  <a href="#">Third Level Item</a></li>
                                        <li>  <a href="#">Third Level Item</a></li>
                                        <li>  <a href="#">Third Level Item</a></li>
                                        <li>  <a href="#">Third Level Item</a></li> 
                                    </ul>
                                 </li> 
                             </ul>
                          </li>
                        </ul>
                    </nav>
                </div>
               <!-- End Sidebar Main-->

        <!--Start wrapperr-->
                <div class="wrapper">
                    <div class="content-main container">
                    
                  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">Profile</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li class="active">
                               Profile
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-3">
                                     <div class="profile-box white-box">
                                     
                                         <div class="profile-thumb">
                                             <img src="<?php echo base_url('uploads/'.$tampil->foto_diri) ?>" alt="profile" />
                                         </div>
                                         <div class="m-b-10 text-center">
                                             <h4><?php echo $tampil->nama_lengkap; ?></h4>
                                             <p>Perserta Mahasiswa Baru</p>
                                         </div>
                                         
                                     </div>
                                     
                                   
                                     
                                 </div> 
                                 
                                 <div class="col-md-8 col-lg-9 m-b-40">
                                    <div class="m-b-10">
                                        <ul class="nav nav-tabs navtab-custom">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                                    <span class="hidden-xs">INFORMASI</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                                    <span class="hidden-xs">BERKAS</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            
                                        <div class="tab-pane active" id="profile">
                                          
                                            
                                              
                                                
                                            
                                              <table class="table table-borderless">
                                                
                                                  <tr>
                                                    <td width="60">Nama Lengkap</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_lengkap; ?></td>
                                                  <tr>
                                                  <tr>
                                                    <td width="60">Kewarganegaraan</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->kewarganegaraan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Jenis Kelamin</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->jk; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Tempat, Tanggal Lahir</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->tmpt_lahir; ?>, <?php echo $tampil->tgl_lahir; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Tinggi Badan</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->tinggi_badan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Berat Badan</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->berat_badan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Alamat</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->alamat; ?></td>
                                                  </tr>
                                                  <tr>

                                                    <td width="60">Kode Pos</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->kode_pos; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Nama Ayah</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_ayah; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Nama Ibu</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_ibu; ?></td>
                                                  </tr>
                                                  <tr>
                                               
                                                    <td width="60">No Handphone</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->no_hp1."-".$tampil->no_hp2; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Info Dari</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->info_dari; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Nama Asal Sekolah</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_asal_sekolah; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Alamat Asal Sekolah</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->alamat_asal_sekolah; ?></td>
                                                  </tr>

                                                
                                              </table>


                                            
                                              
                                            
                                            
                                          
                                            
                                          
                                         </div>
                                         

                                         
                                            <div class="tab-pane" id="settings">
                                               <table class="table table-borderless">
                                                
                                                  <tr>
                                                    <td width="400">1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_ijazah); ?>"></td>
                                                  <tr>

                                                    <tr>
                                                    <td width="400">2. Surat Keterangan Sehat dan tidak Buta Warna</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_kesehatan); ?>"></td>
                                                  <tr>

                                                    <tr>
                                                    <td width="400">3. Pas foto 4 x 6 = 5 lembar, 3 x 4 =2 lembar dan 2 x 3 = 2 lembar</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_diri); ?>"></td>
                                                  <tr>


                                                    <tr>
                                                    <td width="400">4. Bukti Tranfer Pembayaran</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_bukti_pembayaran); ?>"></td>
                                                  <tr>

                                              </table>
                                            </div>
                                        </div>
                                   </div>
                              </div>
                             </div>
                         </div>
                     </div>
                     <!--End row-->
                         
                       </div> <!--End content-main-->
                     </div> 
                <!--End wrapper-->

                <!--Start  Footer -->
                <footer class="footer-main"> 2019 &copy; AKPER BUNTET PESANTREN. </footer> 
                
                <!--End footer -->
                 </div>  <!--/.main-container-->
             </div> <!--/wrapper-->



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