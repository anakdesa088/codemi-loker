<style type="text/css">
    .alert{
        color :green;
    }
</style>
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
                      <!--End Page Title-->          
           
        
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">Data Peserta Mahasiswa Baru</h2>
                                    <div class="table-responsive">
                                        <?php echo $this->session->flashdata('hapus'); ?>
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>TTL</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>TTL</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php 
                                                $no = 1; 
                                                foreach ($tampil as $r) {
                                                    
                                                

                                                ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->tmpt_lahir.", ".$r->tgl_lahir; ?></td>
                                                    <td><?php echo $r->jk; ?></td>
                                                    <td><?php echo $r->no_hp1; ?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('backend/akademik/c_detail/'.$r->id_pmb); ?>" class="btn btn-info">Detail</a>
                                                        <a href="#animate-modal-2" class="btn btn-danger" data-toggle="modal">Hapus</a>
                                                        
                                                        

                                                        
                                                         
                                                    </td>
                                                </tr>
                                                <?php  } ?>
                                            </tbody>
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>

                           <div class="modal fade" id="animate-modal-2" >
                                            <div class="modal-dialog animated fadeInUp">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">ALert</h4>
                                                    </div>
                                                    <div class="modal-body">


                                                        Apakah anda Yakin ingin menghapus data <b class="alert"><?php echo $r->nama_lengkap; ?> </b>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo site_url('backend/keuangan/c_delete/'.$r->id_pmb); ?>" class="btn btn-success">Hapus</a>
                                                        <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

