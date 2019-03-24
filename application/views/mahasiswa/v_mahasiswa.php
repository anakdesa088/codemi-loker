<div class="page-title-box">
                        <h4 class="page-title">Data Table</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Table</a>
                            </li>
                            <li class="active">
                                Data Table
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>

<!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">Mahasiswa</h2>
                                   <a href="<?php echo site_url('backend/mahasiswa/tambah_mahasiswa'); ?>" class="btn btn-primary">Tambah</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nim</th>
                                                    <th>Kelas</th>
                                                    <th>TTL</th>
                                                    <th>Jk</th>
                                                    <th>Alamat</th>
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
                                                    
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->nim; ?></td>
                                                    <td><?php echo $r->nama_kelas; ?></td>
                                                    <td><?php echo $r->tmpt_lahir . "-" . $r->tgl_lahir; ?></td>
                                                    <td><?php echo $r->jk; ?></td>
                                                    <td><?php echo $r->alamat; ?></td>
                                                    <td align="center">
                                                        <a href="" class="btn btn-warning">Edit</a>
                                                        <a href="<?php echo site_url('backend/mahasiswa/hapus_mahasiswa/'.$r->id_mahasiswa); ?>" class="btn btn-danger">Hapus</a>

                                                    </td>
                                                </tr>
                                                
                                                <?php } ?>
                                            </tbody>
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>
