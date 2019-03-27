<style type="text/css">
    .alert{
        color :green;
    }
</style>
                   <div class="page-title-box">
                        <h4 class="page-title">DATA PESERTA MAHASISWA BARU</h4>
                        <ol class="breadcrumb">
                            
                            <li>
                                <a href="#">Akademik</a>
                            </li>
                            <li class="active">
                                PMB
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
                                                    <th>Status Pembayaran</th>
                                                    <th>Status Data</th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>TTL</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Status Data</th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php $no = 1;?>
                                                <?php foreach($tampil AS $r): ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->tmpt_lahir.", ".(new DateTimeImmutable($r->tgl_lahir))->format('d-m-Y'); ?></td>
                                                    <td><?php echo ($r->jk==='P')?'Perempuan':'Laki-laki'; ?></td>
                                                    <td><?php echo ($r->validasi_pembayaran==='0')?"<span class='label label-danger'>Belum Valid</span>":"<span class='label label-success'>Sudah Valid</span>"; ?></td>

                                                    <?php $btn_status_data = $r->status_data==='0'?'btn-danger':'btn-success'; ?>
                                                    <td class="btn-group">
                                                        <div class="dropup">
                                                        <button type="button" class="btn <?php echo $btn_status_data ?> dropdown-toggle" 
                                                        data-toggle="dropdown"aria-expanded="false">
                                                            <?php echo ($r->status_data==='0')?'Invalid':'Valid'; ?> 
                                                            <span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropup" role="menu">
                                                            <li><a href="<?php echo site_url('backend/akademik/c_status_valid/'.$r->id_pmb); ?>">Valid</a></li>
                                                            <li><a href="<?php echo site_url('backend/akademik/c_status_invalid/'.$r->id_pmb); ?>">Invalid</a></li>
                                                        </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo site_url('backend/keuangan/detail/'.$r->id_pmb); ?>" class="btn btn-info">Detail</a>
                                                        <a href="#animate-modal-2" class="btn btn-danger" data-toggle="modal">Hapus</a>  
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
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

