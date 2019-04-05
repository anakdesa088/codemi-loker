 <div class="page-title-box">
                        <h4 class="page-title">Data Dosen</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Akademik</a>
                            </li>
                            
                            <li class="active">
                                Data Dosen
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>




 <div class="row">
                         <div class="col-md-6">
                            <div class="white-box">
                              <h2 class="header-title">Basic Forms</h2>
                            <form action="<?php echo site_url('pengumuman/proses_tambah_pengumuman'); ?>" method="post">
                              <div class="form-group">
                                <label>Subject</label>
                                <input class="form-control" name="judul"  placeholder="Enter email" type="text">
                              </div>
                              
                              <div class="form-group">
                                <label>Kepada</label>
                                <select class="form-control" name="kepada">
                                  <?php foreach ($email as $r) {
                                    # code...
                                  ?>
                                  <option value="<?php echo $r->email; ?>"><?php echo $r->nama_lengkap."-". $r->email; ?></option>
                                <?php } ?>
                                </select>
                              </div>
                              
                              <div class="form-group">
                                <label>Isi Pesan</label>
                                <textarea class="form-control" name="pesan" ></textarea>

                              </div>
                              <div class="form-group">
                                <div class="checkbox primary">
                                    <input  type="checkbox" id="checkbox1"> <label for="checkbox1"> Remember me </label>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                          </div>
                       </div> <!--/.col-md-6-->
</div>