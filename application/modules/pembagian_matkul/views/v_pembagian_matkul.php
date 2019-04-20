
                      <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">PAMBAGIAN MATKUL</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">AKADEMIK</a> </li>
                                
                                <li class="active">PEMBAGIAN MATUKUL</li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          



 <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH PEMBAGIAN MATAKULIAH</h2>
                                <form action="<?php echo site_url('pembagian_matkul/add'); ?>" method="post" class="form-horizontal">
                                 
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">MATA KULIAH</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="mapel">
                                      <?php foreach ($mapel as $m) {
                                        # code...
                                      ?>
                                        <option value="<?php echo $m->id_mapel; ?>" ><?php echo $m->nama_mapel; ?></option>

                                      <?php } ?>
                                      </select>
                                    </div>
                                  </div> 
                                 
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">KELAS</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="kelas">
                                      <?php foreach ($kelas as $k) {
                                        # code...
                                      ?>
                                        <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>

                                      <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  
                                                              
                                 
                                  <div class="form-group">
                                    <div class="col-md-11">
                                      
                                    </div>
                                    <div class="col-ms-1">
                                      <button class="btn btn-info" type="submit">Simpan</button>
                                    </div>
                                  </div>
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                      <?php echo $this->session->flashdata('sukses');  ?>
                      <?php echo $this->session->flashdata('sudah_ada');  ?>
<div class="row">
<div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title">PEMBAGIAN MATAKULIAH</h2>
                         <div class="table-wrap">
                                <table class="table">
                              <thead>
                                
                                <tr>
                                  <th>Mata Pelajaran</th>
                                  <th>Kelas</th>
                                  <th width="25">Aksi</th>
                                  
                                </tr>
                              </thead>
                                <tbody>
                                <?php foreach ($tampil as $r) {
                                  # code...
                                ?>
                                <tr>
                                  <td><?php echo $r->nama_mapel; ?></td>
                                  <td><?php echo $r->nama_kelas; ?></td>
                                  <TD><a href="<?php echo site_url('pembagian_matkul/hapus/'.$r->id_pembagian_matkul);  ?>" class="btn btn-danger">Hapus </a></TD>
                                </tr>
                              <?php } ?>
                              </tbody>
                            </table>
                         </div>
                        </div>
                     </div>
                   <!-- End Basic Table-->
                     