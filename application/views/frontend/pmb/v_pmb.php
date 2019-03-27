
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8" />
    <title>Marble admin</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!--Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.png') ?>" type="image/png">
    
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
        <div id="wrapper">
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-main">
                
                    <div class="logo">
                        <div class="row">
                          <div class="col-sm-4 logo-akper"><img src="<?php echo base_url('assets/images/logo_akper.png'); ?>"></div>
                          <div class="col-sm-8 logo_akper"><h4>AKPER BPC</h4></div>
                        </div>
                            
                    </div> <!--/.logo-->
                    

                  
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
                                 
                           

                             <li class="dropdown dropdown-usermenu">
                                <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="user-photo"><img src="<?php echo base_url('assets/images/users/avatar-1.jpg') ?>" alt=""></div>
                                <span class="hidden-sm hidden-xs">John Doe</span>
                                <span class="caret hidden-sm hidden-xs"></span>
                                </a>
                             <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="#"><i class="fa fa-wrench"></i>  Settings</a></li>
                                <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                                <li><a href="#"><i class="fa fa-info"></i>  Help</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
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

           
                     <!--Start row-->
                      
                      <div class="row">
                       <div class="col-md-12">
                           <div class="white-box">  
                           <h2 class="header-title">Form Validation</h2>
                             <form class="js-validation-bootstrap form-horizontal" action="http://mixtheme.com/mixtheme/mercy/base_forms_validation.html" method="post">
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-username">Username <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" id="val-username" name="val-username" placeholder="Enter User Name">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-email">Email <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" id="val-email" name="val-email" placeholder="Enter your  email">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-password">Password <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="password" id="val-password" name="val-password" placeholder="Enter Password">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="password" id="val-confirm-password" name="val-confirm-password" placeholder="Re-enter Password">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-suggestions">About <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="14" placeholder="About"></textarea>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-skill">Best Skill <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <select class="form-control" id="val-skill" name="val-skill">
                                    <option value="">Please select</option>
                                    <option value="demo1">Demo 1</option>
                                    <option value="demo2">Demo 2</option>
                                    <option value="demo3">Demo 3</option>
                                    <option value="demo4">Demo 4</option>
                                    <option value="demo5">Demo 5</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-website">Website <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" id="val-website" name="val-website" placeholder="http://example.com/">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-digits">Digits <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" id="val-digits" name="val-digits" placeholder="3">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-number">Number <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" id="val-number" name="val-number" placeholder="3.0">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="val-range">Range [1, 10] <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <input class="form-control" type="text" id="val-range" name="val-range" placeholder="3">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label"> Terms <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                  <div class="checkbox primary">
                                    <input type="checkbox" id="val-terms" name="val-terms" value="1">
                                    <label  class="css-input css-checkbox css-checkbox-primary" for="val-terms" >
                                    I agree to the Terms
                                    </label>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                  <button class="btn  btn-primary" type="submit">Submit</button>
                                </div>
                              </div>
                            </form>
                           </div>
                        </div>
                    </div>
                   <!-- end row --> 

                     <!--End row-->

                     
                         
                       </div> <!--End content-main-->
                     
                <!--End wrapper-->

                <!--Start  Footer -->
                <footer class="footer-main"> 2017 &copy; Marble admin Template. </footer> 
                

     <!--JQUERY SCRIPTS-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/metis-menu/metisMenu.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.nicescroll.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slimscroll.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/custom.js') ?>"></script>


  <script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/validation-custom.js') ?>"></script>
    
    </body>

  </html>