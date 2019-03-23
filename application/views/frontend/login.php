
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <!--Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/favicon.ico'); ?>" type="image/png">
  
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/css/nanoscroller.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" >
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
  <style type="text/css">
  .logo h3{
    color : black;
  }
</style>    
</head>

<body class="fixed-top">
  <!--Start Page loader -->
  <div id="pageloader">   
    <div class="loader">
      
    </div>
  </div>
  <!--End Page loader -->
  <div class="page-header navbar navbar-fixed-top">
    <div class="page-header-main">

      <div class="logo">
        <a href="index.html">
          <center><h2>AKPER BPC</h2></center>
        </div> <!--/.logo-->
      </a></div>

      <!--Start Right Menu-->
      
      <!--End Right Menu-->
    </div>
  </div>
  <!--End page-header-->
  
  <!--Start login Section-->
  <section class="bg-main full-height">
   <div class="container">
     <div class="row">
       <div class="reg-wrapper">
         <div class="reg-inner space-inner">
           
           <div class="logo">
             <h3 >AKPER BUNTET PESANTREN</h3>
           </div>
           <h2 class="header-title font-22 text-center m-b-35">Login</h2>
           <center><?php echo $this->session->flashdata('gagal'); ?></center>
           <form method="post" action="<?php echo site_url('auth/c_proses_login'); ?>">
             <div class="form-group">
               <input type="email" name="email" class="form-control"  placeholder="Email" >
             </div>

             <div class="form-group">
               <input type="password" name="password" class="form-control"  placeholder="******" >
             </div>
             

             <div class="form-group">
               <button type="sumbit"  class="btn btn-lg btn-primary btn-block" >  <i class="icon-lock "></i>   Register</button>
             </div>
             
             
             
             <div class="form-group text-center m-t-30 m-b-0 uppercase">
              Mahasiswa Baru  <a href="<?php echo site_url('auth/daftar'); ?>"> Daftar </a>
            </div>
            
          </form>
          
        </div>
      </div>
      
    </div>
  </div>
</section>
<!--End login Section-->

<!--JQUERY SCRIPTS-->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slimscroll.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

</body>

</html>