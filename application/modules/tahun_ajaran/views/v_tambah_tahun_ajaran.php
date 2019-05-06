  <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">TAMBAH TAHUN AJARAN</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">PENGATURN</a> </li>
                                <li> <a href="#">TAHUN AJARAN</a> </li>
                                <li class="active">TAMBAH TAHUN AJARAN </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH TAHUN AJARAN</h2>

                                <form method="post" class="form-horizontal" action="<?php echo site_url('tahun_ajaran/proses_tambah_tahun_ajaran'); ?>">

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Tahun Ajaran</label>
                                    <div class="col-md-10">
                                      <input class="form-control"  name="tahun_ajarancol" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Keterangan</label>
                                    <div class="col-md-10">
                                      <textarea class="form-control" name="keterangan"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-11"></div>
                                    <div class="col-ms-2"><button type="submit" class="btn btn-primary" >TAMBAH</button></div>
                                  </div>
                              
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
                     
