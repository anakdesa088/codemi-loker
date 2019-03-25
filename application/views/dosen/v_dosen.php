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

        <?php echo $this->session->flashdata('sukses'); ?>
          
        
        <div id="messages"></div>
<!--Start row-->

                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">Data Dosen</h2>
                                   <a href="<?php echo site_url('backend/dosen/tambah_dosen'); ?>" class="btn btn-primary">Tambah Dosen</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>TTl</th>
                                                    <th>JK</th>
                                                    <th>Alamat</th>
                                                    <th>Tahun Masuk</th>
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
                                                        <?php $date = date_create($r->tgl_lahir); $tgl_lahir = date_format($date,"d-m-Y"); ?>
                                                        <td><?php echo $r->tmpt_lahir ." - ".$tgl_lahir; ?></td>
                                                        <td><?php if($r->jk == "1"){
                                                            echo "Laki-laki";
                                                        }else{
                                                            echo "Perempuan";
                                                        } ?></td>
                                                        <td><?php echo $r->alamat; ?></td>
                                                        <td><?php echo $r->tahun_masuk; ?></td>
                                                        
                                                        
                                                        <td align="center">
                                                            <a href="<?php echo site_url('backend/dosen/edit_dosen/'.$r->id_dosen); ?>" class="btn btn-warning">Edit</a>
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
