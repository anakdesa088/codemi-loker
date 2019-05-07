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
 <nav class="page-header navbar ">
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

                    
                    
  <div class="container-fluid">
    
</div>
</nav>
  
      <!--Start login Section-->
      <section class="bg-main full-height">
       <div class="container">
           <div class="row">
            
               <div class="reg-wrapper">
                   <div class="reg-inner space-inner">
                       
                       <div class="logo">
                         <img src="<?php echo base_url('assets/images/logo_akper.png') ?>" width="75">
                       </div>
                        
                        <h2 class="header-title font-22 text-center m-b-35">Halaman Login Management</h2>
                        <?php echo $this->session->flashdata('gagal'); ?>
                       <form method="post" action="<?php echo site_url('management/login'); ?>">
                           <div class="form-group">
                               <input type="email" class="form-control" name="email"  placeholder="Email" >
                           </div>

                           <div class="form-group">
                               <input type="password" class="form-control" name="password"  placeholder="Password" >
                           </div>

                        <div class="form-group m-t-30 clearfix">
                           <div class="pull-left">
                               <div class="checkbox primary">
                              
                            </div>
                           </div>
                           
                           <div class="pull-right">
                               <a  href="" >Lupa Password?</a>
                           </div>
                         </div>
                          
                           <div class="form-group">
                               <button type="submit"  class="btn btn-lg btn-primary btn-block" >  <i class="icon-lock "></i>   Login</button>
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