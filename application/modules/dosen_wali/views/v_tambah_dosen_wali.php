        
    <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">TAMBAH DOSEN WALI</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">AKADEMIK</a>
                        </li>
                        <li>
                            <a href="#">DOSEN WALI</a>
                        </li>
                        <li class="active">
                            TAMBAH DOSEN WALI
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          

                  <div class="row">
                         <div class="col-md-12">
                            <div class="white-box">
                              <h2 class="header-title">TAMBAH DOSEN WALI</h2>
                            <form method="post" action="<?php echo site_url('dosen_wali/proses_tambah_dosen_wali'); ?>">
                              <div class="form-group">
                                <label>Dosen</label>
                                <select class="form-control" name="dosen">
                                  <?php  foreach ($dosen as $r) {
                                  
                                   ?>
                                    <option value="<?php echo $r->id_dosen; ?>"><?php echo $r->nama_dosen; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              
                              <div class="form-group">
                                <label>Kelas</label>
                                <select class="form-control" name="kelas">
                                  <?php foreach ($kelas as $r) {
                                    
                                   ?>
                                    <option value="<?php echo $r->id_kelas; ?>"><?php echo $r->nama_kelas; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              
                              <div class="form-group">
                                <label>Keterangan </label>
                                <textarea name="keterangan" class="form-control"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                          </div>
                       </div> <!--/.col-md-6-->
                </div>
