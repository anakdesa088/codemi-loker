    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>AKPER BUNTET PESANTREN CIREBON</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!--Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.ico') ?>">
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/nanoscroller.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css" >
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
       
      <!--Start login Section-->
      <section class="bg-main full-height">
       <div class="container">
           <div class="row">
               <div class="reg-wrapper">
                   <div class="reg-inner space-inner">
                       
                       <div class="logo">
                         <img src="<?php echo base_url('assets/frontend/images/logo_akper.png') ?>" width="75">
                       </div>
                        
                        <h2 class="header-title font-22 text-center m-b-35">Halaman Login</h2>
                        <?php echo $this->session->flashdata('gagal'); ?>
                       <form method="post" action="<?php echo site_url('auth/c_proses_login'); ?>">
                           <div class="form-group">
                               <input type="email" class="form-control" name="email"  placeholder="Email" >
                           </div>

                           <div class="form-group">
                               <input type="password" class="form-control" name="password"  placeholder="Password" >
                           </div>

                        <div class="form-group m-t-30 clearfix">
                           <div class="pull-left">
                               <div class="checkbox primary">
                              <input  id="checkbox-1" type="checkbox">
                              <label for="checkbox-1">Remember me</label>
                            </div>
                           </div>
                           
                           <div class="pull-right">
                               <a  href="" >Lupa Password?</a>
                           </div>
                         </div>
                          
                           <div class="form-group">
                               <button type="submit"  class="btn btn-lg btn-primary btn-block" >  <i class="icon-lock "></i>   Login</button>
                           </div>
                           
                           
                           
                           <div class="form-group text-center m-t-30 m-b-0 uppercase">
                           Belum punya akun ?  <a href="<?php echo site_url('auth/daftar'); ?>" class="btn btn-primary" >Daftar </a>
                           </div>
                           
                       </form>
                       
                   </div>
               </div>
               
           </div>
       </div>
     </section>
    <!--End login Section-->

     <!--JQUERY SCRIPTS-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>

    </body>

  </html>