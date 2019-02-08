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
                                    <h2 class="header-title">Data PMB</h2>
                                    <div class="table-responsive">
                                        <a href="<?php echo site_url('dashboard/tambah_keuangan'); ?>" class="btn btn-primary">Tambah</a>
                                     <table id="example" class="display table">

                                       <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jk</th>
                                                <th>Alamat</th>
                                                <th>TTL</th>
                                                <th width="100">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>JK</th>
                                                <th>Alamat</th>
                                                <th>TTL</th>
                                                <th width="100">Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                <?php  
                                $no = 1;
                                foreach ($tampil as $r) {
                                        
                                
                                 ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $r->nama_lengkap; ?></td>
                                                <td><?php echo $r->jenis_kelamin; ?></td>
                                                <td><?php echo $r->almt_lengkap; ?></td>
                                                <td><?php echo $r->tempat_lhr.", ".$r->tanggal_lhr; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url(); ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?php echo site_url(); ?>" class="btn btn-danger">Hapus</a>
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
