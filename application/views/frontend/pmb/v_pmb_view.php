<?php

if (isset($tampil)) {
  $id = $tampil->id_pmb;
}
$id_sesi = $this->session->userdata('id_pmb');
if ($this->session->userdata('id_pmb') !== $id) {
  redirect('page/pmb_view/'.$id_sesi);


}

?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/frontend/images/favicon.png') ?>">
    <title>PMB</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/frontend/css/style.css') ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/frontend/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') ?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') ?>"></script>
<![endif]-->
<style type="text/css">
.jarak {
    padding-top: 60px;
}
</style>
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item logo">
                            <img src="<?php echo base_url('assets/frontend/images/logo_akper.png') ?>" width="55">
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <h4 class="logo_text">AKPER BPC</h4>

                            </a>
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/frontend/images/users/1.jpg') ?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url('assets/frontend/images/users/1.jpg') ?>" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-user"></i> My Profile</a></li>

                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </nav>
                </header>

                <div class="main-wrapper">

                    <div class="container">


                        <div class="row jarak">
                            <div class="col-lg-12">
                                <div class="card card-outline-info">
                                    <div class="card-header">
                                        <h4 class="m-b-0 text-white">Form with view only</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-body">
                                                <center><h3 class="box-title">Informasi Pendaftar</h3></center>
                                                <hr class="m-t-0 m-b-40">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Nama Lengkap</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->nama_lengkap; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Tempat, Tanggal Lahir</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->tmpt_lahir.", ".$tampil->tgl_lahir; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Kewarganegaraan</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->kewarganegaraan; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Alamat Lengkap</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->alamat; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <!--/row-->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Jenis Kelamin</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->jk; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Kode Pos:</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->kode_pos; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Tinggi Badan</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->tinggi_badan; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Nomor Handphone :</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->no_hp1." - ".$tampil->no_hp2; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Berat Badan</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->berat_badan; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label class="control-label text-right col-md-4">Informasi Yang Anda Dapatkan</label>
                                                            <div class="col-md-7">
                                                                <p class="form-control-static"> <?php echo $tampil->info_dari; ?> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/span-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-4">Nama Asal Sekolah</label>
                                                        <div class="col-md-7">
                                                            <p class="form-control-static"> <?php echo $tampil->nama_asal_sekolah; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-4">Alamat Asal Sekolah</label>
                                                        <div class="col-md-7">
                                                            <p class="form-control-static"> <?php echo $tampil->alamat_asal_sekolah; ?> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>
                                            <!--/row-->
                                            <h3 class="box-title">Address</h3>
                                            <hr class="m-t-0 m-b-40">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url('uploads/'.$tampil->foto_kesehatan); ?>" width="100">

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
                                                        <img src="<?php echo base_url('uploads/'.$tampil->foto_ijaza); ?>" width="100">

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
                                                        <img src="<?php echo base_url('uploads/'.$tampil->foto); ?>" width="100">

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-7">
                                                                <?php $id_pmb = $tampil->id_pmb; ?> 
                                                                <a href="<?php echo site_url('page/pmb/'.$id_pmb); ?>" class="btn btn-info" <i class="fa fa-pencil"></i>Edit</a>
                                                                <button type="button" class="btn btn-inverse">Kembali</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"> </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <script src="<?php echo base_url('assets/frontend/plugins/jquery/jquery.min.js') ?>"></script>
                        <!-- Bootstrap tether Core JavaScript -->
                        <script src="<?php echo base_url('assets/frontend/plugins/bootstrap/js/popper.min.js') ?>"></script>
                        <script src="<?php echo base_url('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
                        <!-- slimscrollbar scrollbar JavaScript -->
                        <script src="<?php echo base_url('assets/frontend/js/jquery.slimscroll.js') ?>"></script>
                        <!--Wave Effects -->
                        <script src="<?php echo base_url('assets/frontend/js/waves.js') ?>"></script>
                        <!--Menu sidebar -->

                        <!--stickey kit -->
                        <script src="<?php echo base_url('assets/frontend/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
                        <script src="<?php echo base_url('assets/frontend/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
                        <!--Custom JavaScript -->
                        <script src="<?php echo base_url('assets/frontend/js/custom.min.js') ?>"></script>
                        <!-- ============================================================== -->
                        <!-- Style switcher -->
                        <!-- ============================================================== -->
                        <script src="<?php echo base_url('assets/frontend/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>
                    </body>


                    <!-- Mirrored from themedesigner.in/demo/admin-press/main/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 18:05:10 GMT -->
                    </html>