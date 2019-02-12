<?php

if (isset($tampil)) {
  $id = $tampil->id_pmb;
}
$id_sesi = $this->session->userdata('id_pmb');
if ($this->session->userdata('id_pmb') !== $id) {
  redirect('page/pmb/'.$id_sesi);


}

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/main/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 18:05:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta  name="viewport" content="width=device-width, initial-scale=1">
    <meta  name="description" content="">
    <meta  name="author" content="">
    
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/es/favicon.png') ?>">
    <title>PMB</title>
    
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    
    <link href="<?php echo base_url('assets/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') ?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') ?>"></script>
<![endif]-->
<style type="text/css">
.jarak {
    padding-top: 100px;
}
.warna{
    color: white;
}
</style>
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css') ?> -->
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
                            <img src="<?php echo base_url('assets/images/logo_akper.png') ?>" width="55">
                            
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h5 class="warna"><?php echo $this->session->userdata('email');  ?> </h5></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url('assets/images/users/1.jpg') ?>" alt="user"></div>
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
                                        <li><a href="<?php echo site_url('auth/c_keluar') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
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
                                        <center><h4 class="m-b-0 text-white">Other Sample form</h4></center>
                                    </div>
                                    <div class="card-body">
                                        <?php $id_pmb = $tampil->id_pmb;   ?>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('page/c_proses_pmb/'.$id_pmb); ?>" >
                                            <div class="form-body">
                                                <center>
                                                    <h4 class="card-title">FORMULIR PENDAFTARAN</h4>
                                                    <h3 class="card-title">SELEKSI PENERIMAAN MAHASISWA BARU</h3>
                                                    <h4 class="card-title">TAHUN AKADEMIK 2019/2020</h4>
                                                    <h4 class="card-title">AKPER BUNTET PESANTREN CIREBON   </h4></center>                                     
                                                    <hr>
                                                    <div class="container">
                                                        <center><?php echo $this->session->userdata('sukses'); ?></center>
                                                        <center><?php echo $this->session->userdata('file_gagal'); ?></center>
                                                    <div class="row p-t-20">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Nama Lengkap</label>
                                                                <input type="text" id="firstName" value="<?php echo $tampil->nama_lengkap; ?>" name="nama_lengkap" class="form-control" placeholder="John doe">
                                                                <small class="form-control-feedback"></small> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">

                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->  
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Kewarganegaraan</label>
                                                                    <div class="m-b-10">
                                                                        <label class="custom-control custom-radio">
                                                           <?php $cek = $tampil->kewarganegaraan; 
                                                            if ($cek == 'Wni') {
                                                           echo "   <input id='radio1' checked  name='kewarganegaraan' value='Wni' type='radio' class='custom-control-input'>";
                                                            }else{
                                                           echo "   <input id='radio1'   name='kewarganegaraan' value='Wni' type='radio' class='custom-control-input'>";
                                                            }
                                                         ?>                
                                                                            <span class="custom-control-label">Wni</span>
                                                                        </label>
                                                                        <label class="custom-control custom-radio">
                                                            <?php $cek = $tampil->kewarganegaraan; 
                                                            if ($cek == 'Wna') {
                                                           echo "   <input id='radio1' checked  name='kewarganegaraan' value='Wna' type='radio' class='custom-control-input'>";
                                                            }else{
                                                           echo "   <input id='radio1'   name='kewarganegaraan' value='Wna' type='radio' class='custom-control-input'>";
                                                            }
                                                         ?> 
                                                                            <span class="custom-control-label">Wna</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Jenis Kelamin</label>
                                                                    <div class="m-b-10">
                                                                        <label class="custom-control custom-radio">
                                                           <?php $cek = $tampil->jk; 
                                                            if ($cek == 'Laki-laki') {
                                                           echo "   <input id='radio1' checked  name='jk' value='Laki-Laki' type='radio' class='custom-control-input'>";
                                                            }else{
                                                           echo "   <input id='radio1'   name='jk' value='Laki-Laki' type='radio' class='custom-control-input'>";
                                                            }
                                                         ?>                                                                          
                                                                         
                                                                            <span class="custom-control-label">Laki-Laki</span>
                                                                        </label>
                                                                        <label class="custom-control custom-radio">
                                                           <?php $cek = $tampil->jk; 
                                                            if ($cek == 'Perempuan') {
                                                           echo "   <input id='radio1' checked  name='jk' value='Perempuan' type='radio' class='custom-control-input'>";
                                                            }else{
                                                           echo "   <input id='radio1'   name='jk' value='Perempuan' type='radio' class='custom-control-input'>";
                                                            }
                                                         ?>            
                                                                            <span class="custom-control-label">Perempuan</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Tinggi Badan</label>
                                                                    <input type="number" value="<?php echo $tampil->tinggi_badan ?>" name="tinggi_badan"  class="form-control" placeholder="Cm">
                                                                    <small class="form-control-feedback">Cm</small> 

                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Berat Badan</label>
                                                                    <input type="number" value="<?php echo $tampil->berat_badan; ?>" name="berat_badan" class="form-control" placeholder="Kg">
                                                                    <small class="form-control-feedback">Kg</small> 

                                                                </div>
                                                            </div>
                                                            <!--/span-->

                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label class="control-label">Tempat, Tanggal Lahir</label>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <input type="text"  value="<?php echo $tampil->tmpt_lahir; ?>" name="tmpt_lahir" class="form-control" placeholder="Tempat">
                                                                        </div>

                                                                        <div class="col-sm-5">
                                                                            <input type="date" value="<?php echo $tampil->tgl_lahir; ?>" name="tgl_lahir" class="form-control" placeholder="dd/mm/yyyy">
                                                                        </div>
                                                                    </div>                                                    
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nama Ayah</label>
                                                                    <input type="text"  value="<?php echo $tampil->nama_ayah; ?>" name="nama_ayah" class="form-control" placeholder="Cm">
                                                                    <small class="form-control-feedback">Cm</small> 

                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Nama Ibu</label>
                                                                    <input type="text" value="<?php echo $tampil->nama_ibu; ?>" name="nama_ibu" class="form-control" placeholder="Kg">
                                                                    <small class="form-control-feedback">Kg</small> 

                                                                </div>
                                                            </div>
                                                            <!--/span-->

                                                        </div>   
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group">
                                                                    <label>Alamat Lengkap</label>
                                                                    <textarea  name="alamat" class="form-control"><?php echo $tampil->alamat; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 ">
                                                                <div class="form-group">
                                                                    <label>Kode Pos</label>
                                                                    <input type="number" value="<?php echo $tampil->kode_pos; ?>" name="kode_pos" class="form-control"  placeholder="45xxxx">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="control-label">Nomor Handphone Pendaftar</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="number" value="<?php echo $tampil->no_hp1; ?>" name="no_hp1"  class="form-control" placeholder="08xxxxxxxx">
                                                                </div>
                                                            </div>
                                                            Atau
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="number" value="<?php echo $tampil->no_hp2; ?>" name="no_hp2"  class="form-control" placeholder="08xxxxxxx">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Informasi Yang Anda Dapatkan Dari</label>
                                                                        <input type="text" class="form-control" value="<?php echo $tampil->info_dari; ?>" name="info_dari" placeholder="Teman/Saudara">
                                                                    </div>    
                                                                </div>    
                                                        </div>   

                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Nama Asal Sekolah</label>
                                                                        <input type="text" class="form-control" value="<?php echo $tampil->nama_asal_sekolah; ?>" name="nama_asal_sekolah" placeholder="SMK N/SMA N">
                                                                    </div>    
                                                                </div>    
                                                        </div>   
                                                        <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <label>Alamat Asal Sekolah</label>
                                                                        <textarea value="<?php echo $tampil->alamat_asal_sekolah; ?>" name="alamat_asal_sekolah" class="form-control"></textarea>
                                                                    </div>    
                                                                </div>    
                                                        </div>   

                                                        <!--/row-->
                                                        <center><h3 class="box-title m-t-40">JENIS KELENGKAPAN BERKAS</h3></center>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <span><input type="file"  name="foto_ijaza"> </span> 
                                                                    
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
                                                                    <span><input type="file"  name="foto_kesehatan"> </span> 
                                                                    
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
                                                                    <span><input type="file"  name="foto"> </span> 


                                                                    <input type="hidden" name="foto_ijaza2" value="<?php echo $tampil->foto_ijaza; ?>">
                                                                    <input type="hidden" name="foto_kesehatan2" value="<?php echo $tampil->foto_kesehatan; ?>">
                                                                    <input type="hidden" name="foto2" value="<?php echo $tampil->foto; ?>">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <img src="<?php echo base_url('assets/images/logo_akper.png') ?>" width="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>

                                                        <div class="col-md-6">
                                                    <a href=""class="btn btn-info"> <i class="fa fa-check"></i>Edit</a>                                                                
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>                  

                            </div>

                        </div>
                        <!-- ============================================================== -->
                        <!-- End Wrapper -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- All Jquery -->
                        <!-- ============================================================== -->
                        <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
                        <!-- Bootstrap tether Core JavaScript -->
                        <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js') ?>"></script>
                        <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
                        <!-- slimscrollbar scrollbar JavaScript -->
                        <script src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
                        <!--Wave Effects -->
                        <script src="<?php echo base_url('assets/js/waves.js') ?>"></script>
                        <!--Menu sidebar -->

                        <!--stickey kit -->
                        <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
                        <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
                        <!--Custom JavaScript -->
                        <script src="<?php echo base_url('assets/js/custom.min.js') ?>"></script>
                        <!-- ============================================================== -->
                        <!-- Style switcher -->
                        <!-- ============================================================== -->
                        <script src="<?php echo base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>
                    </body>


                    <!-- Mirrored from themedesigner.in/demo/admin-press/main/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 18:05:10 GMT -->
                    </html>