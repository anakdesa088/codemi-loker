

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Test</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.png') ?>" type="image/png">
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('assets/plugins/morris-chart/morris.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/nanoscroller.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet" type="text/css" />

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
              <center><h2>AKPER BPC</h2></center>
            </div> <!--/.logo-->
          </a></div>

          <!--Start Right Menu-->
          <div class="right-menu">
            <ul class="nav navbar-nav navbar-right">






             <li class="dropdown dropdown-usermenu">
              <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <div class="user-photo"><img src="<?php echo base_url('assets/images/users/avatar-1.jpg') ?>" alt=""></div>
                <span class="hidden-sm hidden-xs"><?php echo $this->session->userdata('email'); ?></span>
                <span class="caret hidden-sm hidden-xs"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">

                <li><a href="<?php echo site_url('auth/c_keluar') ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
              </ul>
            </li>                       
          </ul>
        </div>
        <!--End Right Menu-->
      </div>
    </div>
    <!--End page-header-->

    <div class="clearfix"> 
    </div>
    <div class="clearfix"> 
    </div>
    <div class="page-title-box">

      <div class="clearfix"></div>
    </div>


    <div class="content-main container">
      <div class="container">                        
        <div class="row">
         <div class="col-md-12">
           <div class="white-box">
            <center><h2 class="header-title">FORMULIR PENDAFTARAN</h2></center>
            <center><h3>SELEKSI PENERIMAAN MAHASISWA BARU</h3></center>
            <center><h2 class="header-title">TAHUN AKADEMIK 2019/2020</h2></center>
            <center><h2 class="header-title">AKPER BUNTET PESANTREN CIREBON</h2></center>
            <hr>
            <div class="container">
<?php
if (isset($tampil)) {
  $email = $tampil->email;
  $id = $tampil->id_pendaftar;
}else{
  $email = "";
  $id = "";
}

$id_sesi = $this->session->userdata('id_pendaftar');
if ($this->session->userdata('id_pendaftar') !== $id ) {
  redirect('page/pmb/'.$id_sesi);
};
  


?>




              <form class="form-horizontal" method="post" action="<?php echo site_url('page/proses_pmb/'.$id); ?>" >
                <div class="form-group">
                  <label class="col-md-3 control-label">Email</label>
                  <div class="col-md-6">
                    <p class="form-control-static"><?php echo $email; ?></p>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Nama Lengkap</label>
                  <div class="col-md-6">
                    <input class="form-control" name="nama_lengkap" placeholder="Saefudin Hardi" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Kewarganegaraan</label>
                  <div class="col-sm-2">
                    <div class="radio">
                        <label><input type="radio" name="kewarganegaraan" checked>WNI</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="kewarganegaraan">WNA</label>
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Kelamin</label>
                  <div class="col-sm-2">
                    <select class="form-control" name="jenis_kelamin">
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Tinggi Badan</label>
                  <div class="col-md-3">

                    <input class="form-control" name="tinggi_badan" placeholder="120 cm" type="number" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Berat Badan</label>
                  <div class="col-md-3">

                    <input class="form-control" name="berat_badan" placeholder="40 kg" type="number" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Tempat, Tanggal Lahir</label>
                  <div class="row col-md-6">
                    <div class="col-sm-4"><input class="form-control" placeholder="Cirebon" name="tempat_lahir" type="text"></div>
                    <div class="col-sm-4">
                      <input type="text"  placeholder="26-02-1996" data-date-format="yyyy-mm-dd" name="tanggal_lahir" class="form-control default-date-picker-autoclose" >
                    </div>
                  </div>                                



                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Alamat</label>
                  <div class="col-md-6">
                    <textarea class="form-control" rows="5" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Nama Ayah</label>
                  <div class="col-md-6">

                    <input class="form-control" placeholder="" name="nama_ayah" type="text" >
                  </div>
                </div>                     
                <div class="form-group">
                  <label class="col-md-3 control-label">Nama Ibu</label>
                  <div class="col-md-6">

                    <input class="form-control" placeholder="" type="text" name="nama_ibu" >
                  </div>
                </div>                               
                <div class="form-group">
                  <label class="col-md-3 control-label">Kode Pos</label>
                  <div class="col-md-4">

                    <input class="form-control" placeholder="45xxxx" type="number" name="kode_pos" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">No Hp</label>
                  <div class="col-md-6">

                    <input class="form-control" placeholder="0876352xxxx" type="number" name="no_hp" >
                  </div>
                </div>      

                <div class="form-group">
                  <label class="col-md-3 control-label">Informasi yang anda dapatkan dari </label>
                  <div class="col-md-6">

                    <input class="form-control" placeholder="Saudara/Teman" type="text" name="info_dari">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Nama Sekolah asal</label>
                  <div class="col-md-6">

                    <input class="form-control" placeholder="SMK N 1" type="text" name="nama_sekolah_asal" >
                  </div>
                </div>                





                <div class="form-group">
                  <label class="col-md-3 control-label">Alamat asal Sekolah</label>
                  <div class="col-md-6">
                    <textarea class="form-control" rows="5" name="alamat_asal_sekolah"></textarea>
                  </div>
                </div>
                <div class="container">     <hr>
                  <h3><center>JENIS KELENGKAPAN BERKAS</center></h3>
                  <div class="form-group">
                    <label class="col-md-7">1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</label>
                    <div class="fileupload btn btn-success hijau_akper">
                      <span><i class="ion-upload"></i> Upload</span>
                      <input type="file" class="upload">
                    </div> 


                  </div>

                  <div class="form-group">
                    <label class="col-md-7">2. Surat Keterangan Sehat dan tidak Buta Warna</label>
                    <div class="fileupload btn btn-success hijau_akper">
                      <span><i class="ion-upload"></i> Upload</span>
                      <input type="file" class="upload">
                    </div> 


                  </div>
                  <div class="form-group">
                    <label class="col-md-7">3. Pas foto 4 x 6 = 5 lembar, 3 x 4 =2 lembar dan 2 x 3 = 2 lembar</label>
                    <div class="fileupload btn btn-success hijau_akper">
                      <span><i class="ion-upload"></i> Upload</span>
                      <input type="file" class="upload">
                    </div> 


                  </div>
                  <div class="form-group">
                    <div class="col-sm-7">
                      <img width="100" src="<?php echo site_url('assets/images/yasin.jpg'); ?> ">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-10">



                    </div>
                    <div class="col-md-2">
                      
                      <a href="<?php echo site_url('page/pmb_view/'.$id); ?>" class="btn btn-primary ">Lihat Data</a>
                      <center><button class="btn btn-success hijau_akper ">DAFTAR</button></center>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div></div>
        </div>
      </div>
      <!--End row-->
    </div>          
  </div>

  <footer class="footer-main"> 2017 &copy; Marble admin Template.    </footer>
</div>
<!--JQUERY SCRIPTS-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/pages/datetimepicker-custom.js') ?>"></script>


</body>
</html>