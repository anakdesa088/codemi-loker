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

        <?php echo $this->session->flashdata('sukses'); ?>
          
        
        <div id="messages"></div>
<!--Start row-->

                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">Data Dosen</h2>
                                   <a href="<?php echo site_url('pengumuman/tambah_pengumuman'); ?>" class="btn btn-primary">Tambah Dosen</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Kepada</th>
                                                    <th>Pesan</th>
                                                    <th>tanggal</th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                              <?php 
                                              $no = 1;
                                              foreach ($tampil as $r) {
                                                
                                              ?>
                                                <tr>
                                                  <td><?php echo $no++; ?></td>
                                                  <td><?php echo $r->judul; ?></td>
                                                  
                                                  <td><?php echo $r->kepada; ?></td>
                                                  <td><?php echo $r->pesan; ?></td>
                                                  <td><?php echo $r->tanggal_kirim; ?></td>
                                                  <td> <a href="<?php echo site_url('pengumuman/hapus_pengumuman/'.$r->id_pengumuman); ?>" class="btn btn-danger">Hapus</td>
                                                </tr>
                                           
                                              <?php } ?>


                                            </tbody>
                                                        
                                                        
                                                        
                                                
                                               
                                           
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>

