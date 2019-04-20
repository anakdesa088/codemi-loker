
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
                      <div class="col-md-10">
                        <h2 class="header-title">PEMBAGIAN MATAKULIAH</h2>

                      </div>
                      <div class="col-md-2">
                        <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"                                                              aria-expanded="false">PILIH KELAS <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><a href="<?php echo site_url('pembagian_matkul'); ?>">Lihat Semua</a> </li>
                                          <?php foreach ($kelas as $o) {
                                            # code...
                                          ?>
                                            <li><a href="<?php echo site_url('pembagian_matkul/filter/'.$o->id_kelas); ?>"><?php echo $o->nama_kelas; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>

                      </div>
                        <div class="col-md-12">KELAS : <b><?php echo $judul_kelas->nama_kelas; ?></b></div>
                         <div class="table-wrap">
                                <table class="table">
                              <thead>
                                
                                <tr>
                                  <th>No</th>
                                  <th>Matakuliah</th>
                                  <th width="25">Aksi</th>
                                  
                                </tr>
                              </thead>
                                <tbody>
                                <?php $no =1; foreach ($tampil as $r) {
                                  # code...
                                ?>
                                <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $r->nama_mapel; ?></td>
                                  <TD><a href="<?php echo site_url('pembagian_matkul/hapus/'.$r->id_pembagian_matkul);  ?>" class="btn btn-danger">Hapus </a></TD>
                                </tr>
                              <?php } ?>
                              </tbody>
                            </table>
                         </div>
                        </div>
                     </div>
                   <!-- End Basic Table-->
                     