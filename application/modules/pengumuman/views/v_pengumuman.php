<div class="page-title-box">
                        <h4 class="page-title">PENGUMUMAN PMB</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGUMUMAN</a>
                            </li>
                            
                            <li class="active">
                                PENGUMUMAN PMB
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
                                <div class="row">
                                </div>
                                   <h2 class="header-title">PENGUMUMAN PMB</h2>
                                   <a href="<?php echo site_url('pengumuman/tambah_pengumuman'); ?>" class="btn btn-primary">Pesan</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Kepada</th>
                                                    <th>Pesan</th>
                                                    <th>Info</th>
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
                                                  
                                                  <td><?php echo $r->email; ?></td>
                                                  <td><?php echo $r->pesan; ?></td>
                                                  <td>
                                                    <?php  if ($r->read == "1") {
                                                    echo '<span class="label round label-success">DIBACA</span>';
                                                  }else{
                                                    echo '<span class="label round label-warning">BLM DIBACA</span>';
                                                  }  ?>
                                                  </td>
                                                  <?php $date = date_create($r->tanggal_kirim);
                                                    $tanggal = date_format($date, 'd-m-Y');
                                                   ?>
                                                  <td><?php echo $tanggal; ?></td>
                                                  <td> <a href="<?php echo site_url('pengumuman/hapus_pengumuman/'.$r->id_pengumuman); ?>" class="btn btn-danger">Hapus</td>
                                                </tr>
                                           
                                              <?php } ?>


                                            </tbody>
                                                        
                                                        
                                                        
                                                
                                               
                                           
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>

