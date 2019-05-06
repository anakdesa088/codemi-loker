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
                             <h2 class="header-title">Setting Password</h2>
                                <form method="post" action="<?php echo site_url('pmb/proses_setting_password'); ?>" class="form-horizontal">
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Password Baru</label>
                                    <div class="col-md-10">
                                      <input type="password"  class="form-control" name="password_baru">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Konfirmasi Password</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="cpassword" type="password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-11">
                                    </div>
                                    <div class="col-md-1">
                                      <button type="sumbit" class="btn btn-primary">Ganti</button>
                                    </div>
                                  </div>
                                
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
                     
