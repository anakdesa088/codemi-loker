        
    <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Basic Table</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Table</a>
                        </li>
                        <li class="active">
                            Basic Table
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          

    
                <div class="row">              
                   <!-- Start  hover  Table-->

                    <div class="col-md-8">
                       <div class="white-box">
                        <?php echo $this->session->flashdata('sukses'); ?>
                        <h2 class="header-title">Kelas</h2>
                        <a href="<?php echo site_url('backend/kelas/tambah_kelas'); ?>" class="btn btn-primary">Tambah</a><hr>
                         <div class="table-wrap">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <th width="40">No</th>
                                            <th>Nama Kelas</th>
                                            <th>Kode Kelas</th>
                                            <th width="170"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        $no = 1;
                                        foreach ($tampil as $r) {
                                            
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r->nama_kelas; ?></td>
                                            <td><?php echo $r->kode_kelas; ?></td>
                                            <td align="center">
                                                <a href="<?php echo site_url('backend/kelas/edit_kelas/'.$r->id_kelas); ?>" class="btn btn-warning">Edit</a>
                                                <a href="<?php echo site_url('backend/kelas/hapus_kelas/'.$r->id_kelas); ?>" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                             </div>
                        </div>
                     </div>
                   <!-- End  hover Table-->