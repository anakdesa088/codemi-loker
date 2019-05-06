  <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">TAMBAH SEMESTER</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">PENGATURN</a> </li>
                                <li> <a href="#">SEMESTER</a> </li>
                                <li class="active">TAMBAH SEMESTER </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH SEMESTER</h2>

                                <form method="post" class="form-horizontal" action="<?php echo site_url('semester/proses_tambah_semester'); ?>">

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Semester</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="nama_semester" type="text">
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
                                    <div class="col-ms-2"><button type="submit" class="btn btn-primary" >SIMPAN</button></div>
                                  </div>
                              
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
                     
