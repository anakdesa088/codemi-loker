  <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">EDIT SEMESTER</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">PENGATURN</a> </li>
                                <li> <a href="#">SEMESTER</a> </li>
                                <li class="active">EDIT SEMESTER </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">EDIT SEMESTER</h2>

                                <form method="post" class="form-horizontal" action="<?php echo site_url('semester/proses_edit_semester/'.$tampil->id_semester); ?>">

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Semester</label>
                                    <div class="col-md-10">
                                      <input class="form-control" value="<?php echo $tampil->nama_semester; ?>" name="nama_semester" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Keterangan</label>
                                    <div class="col-md-10">
                                      <textarea class="form-control" name="keterangan"><?php echo $tampil->keterangan; ?></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-11"></div>
                                    <div class="col-ms-2"><button type="submit" class="btn btn-primary" >EDIT</button></div>
                                  </div>
                              
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
                     
