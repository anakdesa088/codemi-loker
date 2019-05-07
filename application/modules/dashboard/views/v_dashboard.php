
                   <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
               
                   
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="row">
                               
                                   <div class="col-md-3 col-sm-6">
                                       <div class="tiles-style1 white-box">
                                           <div class="tiles-icon text-primary"> <i class="fa fa-users"></i>  </div>
                                           <div class="tiles-text text-right">
                                            <?php 
                                            $query = $this->db->query('SELECT * FROM pmb');

                                             $pmb = $query->num_rows();
                                            ?>
                                               <h4>PMB</h4>
                                               <span><?php echo $pmb; ?></span>
                                           </div>
                                     </div>
                                   </div><!-- /.col-md-3-->
                                   
                                  <div class="col-md-3 col-sm-6">
                                        <div class="tiles-style1 white-box">
                                           <div class="tiles-icon text-success"> <i class="fa fa-graduation-cap"></i>  </div>
                                           <div class="tiles-text text-right">
                                               <?php 
                                            $query = $this->db->query('SELECT * FROM mahasiswa');

                                             $mahasiswa = $query->num_rows();
                                            ?>
                                               <h4>Mahasiswa</h4>
                                               <span><?php echo $mahasiswa; ?></span>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-3-->

                                  <div class="col-md-3 col-sm-6">
                                       <div class="tiles-style1 white-box">
                                            <div class="tiles-icon  text-warning "> <i class="icon-user"></i>  </div>
                                           <div class="tiles-text text-right">
                                            <?php 
                                            $query = $this->db->query('SELECT * FROM dosen');

                                             $dosen = $query->num_rows();
                                            ?>
                                               <h4>Dosen</h4>
                                               <span><?php echo $dosen; ?></span>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-3-->

                                  <div class="col-md-3 col-sm-6">
                                        <div class="tiles-style1 white-box">
                                            <div class="tiles-icon text-danger"> <i class="fa fa-list"></i>  </div>
                                           <div class="tiles-text text-right">
                                            <?php 
                                            $query = $this->db->query('SELECT * FROM kelas');

                                             $kelas = $query->num_rows();
                                            ?>
                                               <h4>Kelas</h4>
                                               <span><?php echo $kelas; ?></span>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-3-->
                                   
                               </div>
                           </div>
                       </div>
                       <!--End row-->
               
               
                 <!--End row-->
                  
                  <!--End row-->
               
              
               <!--Start row-->
               <div class="row">
                  <div class="col-md-12">
                    <div class="white-box">
                          <h2 class="header-title">Terakhir Transaksi Pembayaran </h2>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                  <thead>
                                    <tr>
                                                    
                                                    <th>Nama</th>
                                                    <th>Nim</th>
                                                    <th>Kode</th>
                                                    <th>Jenis Pembayaran</th>
                                                    <th>Nominal</th>
                                                    <th>Tanggal</th>
                                                    <th>Keterangan</th>
                                                    <th><center>Status</center></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                                $no = 1;
                                                 foreach ($tampil as $r) {
                                                    # code...
                                                ?>
                                                <tr>
                                                  <?php
                                                  $date=date_create($r->tanggal_transaksi);
                                                  $tanggal_transaksi = date_format($date,"d-m-Y");
                                                   ?>
                                                    
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->nim; ?></td>
                                                    <td><?php echo $r->kode_transaksi; ?></td>
                                                    <td><?php echo $r->nama_jp; ?></td>
                                                    <td><?php echo "Rp. ".$r->nominal_bayar; ?></td>
                                                    <td><?php $id  = $r->id_transaksi; echo $tanggal_transaksi ?></td>
                                                    <td><?php echo $r->keterangan; ?></td>
                                                    <td align="center">
                                                      <?php 
                                                      if ($r->status == "LUNAS") {
                                                        ?>
                                                        <span class="label round label-success">LUNAS</span>
                                                        <?php
                                                      }else{
                                                        ?>
                                                        <span class="label round label-danger">BELUM LUNAS</span>
                                                        <?php
                                                      }
                                                      ?>
                                                    </td>
                                                    
                                                </tr>
                                            <?php } ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                   </div> <!--/.col-md-8-->
                 
                   

              </div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/morris-chart/raphael-min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/morris-chart/morris.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard2.js') ?>"></script>  