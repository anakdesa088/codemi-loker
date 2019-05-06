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
           
                   <!--Start row-->
                   <div class="row">
                 
                   <!-- Start Basic Table-->
                    <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title">Basic Table</h2>
                        
                         <div class="table-wrap">
                          <div class="col-md-10">

                          </div>
                          <div class="col-md-2">
                            <h5><?php echo $tampil->kode_transaksi; ?></h5>
                          </div>
                          <div class="col-md-6">
                            <table>
                            <tr>
                              <td>Nama Lengkap</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nama_lengkap; ?></td>
                            </tr>
                            <tr>
                              <td>NIM</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nim; ?></td>
                            </tr>
                            <?php $tanggal = $mahasiswa->tgl_lahir; $date = date_create($tanggal); $tgl = date_format($date,"d-m-Y"); ?>
                            <tr>
                              <td>Tempat, Tanggal Lahir</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->tmpt_lahir.', '.$tgl; ?></td>
                            </tr>
                            <tr>
                              <td>Alamat</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->alamat; ?></td>
                            </tr>
                          </table>
                          </div>
                          <div class="col-md-6">
                            <table>
                            <tr>
                              <td>Kelas</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nama_kelas; ?></td>
                            </tr>
                            
                            <tr>
                              <td>Semester</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nama_semester; ?></td>
                            </tr>
                            <tr>
                              <td>Semester</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->tahun_ajarancol; ?></td>
                            </tr>
                            
                          </table>
                          </div>


                        
                                <table class="table">
                              <thead>
                                <tr>
                                  <th>Jenis Pembayaran</th>
                                  <th>Jumlah </th>
                                  <th>Di Bayar</th>
                                  <th>HUtang</th>
                                  <th>Tanggal</th>
                                  <th>Keterangan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><?php echo $tampil->nama_jp; ?></td>
                                  <td><?php echo $tampil->nominal; ?></td>
                                  <td><?php echo $tampil->nominal_bayar; ?></td>
                                  <td><?php echo $tampil->hutang; ?></td>
                                  <td><?php echo $tampil->tanggal_transaksi; ?></td>
                                  <td><?php echo $tampil->keterangan; ?></td>
                                </tr>
                                
                              </tbody>
                            </table>
                         </div>
                        </div>
                     </div>
                   <!-- End Basic Table-->
</div>