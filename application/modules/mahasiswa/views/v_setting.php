   <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">SETTING</h4>
                            <ol class="breadcrumb">
                                
                                
                                <li class="active">SETTING</li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">SETTING</h2>
                             

                             <?php $id_mahasiswa = $this->session->userdata('id_mahasiswa'); ?>
                                <form class="form-horizontal" method="post" action="<?php echo site_url('mahasiswa/proses_setting'); ?>" >
                                  
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    
                                    <div class="col-md-7">
                                      <?php echo $this->session->flashdata('sukses'); ?>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <label class="col-md-2 control-label">Password Lama</label>
                                    <div class="col-md-5">
                                      <input class="form-control"  name="password_lama" type="password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <label class="col-md-2 control-label">Password Baru</label>
                                    <div class="col-md-5">
                                      <input class="form-control"  name="password_baru" type="password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <label class="col-md-2 control-label">Konfirmasi password</label>
                                    <div class="col-md-5">
                                      <input class="form-control"  name="cpassword" type="password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-2"></div>
                                    <label class="col-md-2 control-label"></label>
                                    <div style="text-align: right;" class="col-md-5">
                                      <button  type="submit" class="btn btn-primary">Ganti</button>
                                    </div>
                                  </div>
                                  
                                    
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
