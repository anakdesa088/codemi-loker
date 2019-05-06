 <div class="page-title-box">
                        <h4 class="page-title">SET TAHUN AJARAN</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGATURAN</a>
                            </li>
                            
                            <li class="active">
                                SET TAHUN AJARAN
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
           <?php echo $this->session->flashdata('sukses'); ?>
        
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">TAHUN AJARAN</h2>
                                   <a href="<?php echo site_url('tahun_ajaran/tambah_tahun_ajaran'); ?>" class="btn btn-primary">Tambah</a><hr>
                                    <div class="table-responsive">

                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>TAHUN AJARAN</th>
                                                    <th>KETERANGAN</th>
                                                    <th><center>AKSI</center></th>
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php 
                                                $no = 1;
                                                foreach ($tampil as $r) {
                                                    # code...
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r->tahun_ajarancol; ?></td>
                                                    <td><?php echo $r->keterangan; ?></td>
                                                    
                                                    <td align="center">
                                                        <a href="<?php echo site_url('tahun_ajaran/edit_tahun_ajaran/'.$r->id_tahun_ajaran); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    
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