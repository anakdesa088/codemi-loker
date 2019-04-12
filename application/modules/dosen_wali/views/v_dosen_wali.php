     
                  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">DOSEN WALI</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">AKADEMIK</a>
                            </li>
                            
                            <li class="active">
                                DOSEN WALI
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          


                      <?php $this->session->flashdata('berhasil');  ?>
                    <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">DOSEN WALI</h2>
                                   <a href="<?php echo site_url('dosen_wali/tambah_dosen_wali'); ?>" class="btn btn-primary" >Tambah</a><hr>
                                    <div class="table-responsive">

                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Dosen</th>
                                                    <th>Kelas</th>
                                                    <th>Keterangan</th>
                                                    
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php $no = 1; foreach ($tampil as $r) {
                                                    # code...
                                                 ?>
                                                <tr>

                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->nama_kelas; ?></td>
                                                    <td><?php echo $r->keterangan; ?></td>
                                                    <td align="center">
                                                        <a href="" class="btn btn-warning">Edit</a>
                                                        <a href="" class="btn btn-danger">Hapus</a>

                                                    </td>
                                                    
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>
                       <!--End row-->
