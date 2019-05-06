 <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">KODE TRANSAKSI</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">KEUANGAN</a> </li>

                                <li class="active">KODE TRANSAKSI </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          



<div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">KODE TRANSAKSI</h2>
                                <form  method="post"  action="<?php echo site_url('kode_transaksi/view_kode_transaksi'); ?>" class="form-horizontal">
                                 
                                 <div class="col-md-4">
                                 </div>
                                 <div class="col-md-4">
                                 
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">KODE </label>
                                    <div class="col-md-7">
                                      <input class="form-control" name="kode_transaksi" placeholder="GPJAU99"  type="number">
                                    </div>
                                    <div class="col-md-3">
                                      <button class="btn btn-primary" type="submit" ><i class="fa fa-search"></i></button>
                                    </div>
                                  </div>
                                 </div>
                                 <div class="col-md-4">
                                 </div> 
                                  
                                 
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
  
  
<div class="row">
   <div class="col-md-12">
                     <div class="white-box">


                        <h2 class="header-title">DATA KODE TRANSAKSI</h2>

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
                              <td width="5">:</td>
                              <td><?php echo $mahasiswa->nama_lengkap; ?></td>
                            </tr>
                            <tr>
                              <td>NIM</td>
                              <td width="5">:</td>
                              <td><?php echo $mahasiswa->nim; ?></td>
                            </tr>
                            <?php $tanggal = $mahasiswa->tgl_lahir; $date = date_create($tanggal); $tgl = date_format($date,"d-m-Y"); ?>
                            <tr>
                              <td>Tempat, Tanggal Lahir</td>
                              <td width="5">:</td>
                              <td><?php echo $mahasiswa->tmpt_lahir.', '.$tgl; ?></td>
                            </tr>
                            <tr>
                              <td>Alamat</td>
                              <td width="5">:</td>
                              <td><?php echo $mahasiswa->alamat; ?></td>
                            </tr>
                          </table>
                          </div>
                          <div class="col-md-6">
                            <table>
                            <tr>
                              <td>Kelas</td>
                              <td width="5">:</td>
                              <td><?php echo $mahasiswa->nama_kelas; ?></td>
                            </tr>
                            
                            <tr>
                              <td>Semester</td>
                              <td width="5">:</td>
                              <td><?php echo $mahasiswa->nama_semester; ?></td>
                            </tr>
                            <tr>
                              <td>Tahun Ajaran</td>
                              <td width="5">:</td>
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
                                  <th>Status</th>
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
                                  <td><?php 
                                                      if ($tampil->status == "LUNAS") {
                                                        ?>
                                                        <span class="label round label-success">LUNAS</span>
                                                        <?php
                                                      }else{
                                                        ?>
                                                        <span class="label round label-danger">BELUM LUNAS</span>
                                                        <?php
                                                      }
                                                      ?></td>
                                </tr>
                                
                              </tbody>
                            </table>
                         </div>
                        </div>
                     </div>

</div>
  