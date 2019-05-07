<!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">PENGUMUMAN</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">PENGUMUMAN</a> </li>
                                
                                <li class="active">PENGUMUMAN</li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title"></h2>
                                <form class="form-horizontal" method="post" action="<?php echo site_url('pengumuman/tambah_pengumuman_dosen'); ?>" >
                                  
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Pilih Kelas</label>
                                    <div class="col-sm-10">
                                      <select name="kelas" class="form-control">
                                        <?php foreach ($kelas as $r): ?>
                                          
                                        
                                        <option value="<?php echo $r->id_kelas; ?>"><?php echo $r->nama_kelas; ?></option>
                                        <?php endforeach ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label"></label>
                                    <div class="col-sm-10">
                                      <button type="submit" class="btn btn-primary">Lanjut</button>
                                    </div>
                                  </div>
                                  
                                  
                                  
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
                     
