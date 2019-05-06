   <div class="page-title-box">
                        <h4 class="page-title">Profile</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li class="active">
                               Profile
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-3">
                                     <div class="profile-box white-box">
                                     
                                         <div class="profile-thumb">
                                             <img src="<?php echo base_url('uploads/'.$tampil->foto_diri) ?>" alt="profile" />
                                         </div>
                                         <div class="m-b-10 text-center">
                                             <h4><?php echo $tampil->nama_lengkap; ?></h4>
                                             <p>Perserta Mahasiswa Baru</p>
                                             <h4><?php echo $tampil->no_peserta; ?></h4>
                                         </div>
                                         
                                     </div>
                                     
                                   
                                     
                                 </div> 
                                 
                                 <div class="col-md-8 col-lg-9 m-b-40">
                                    <div class="m-b-10">
                                        <ul class="nav nav-tabs navtab-custom">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                                    <span class="hidden-xs">INFORMASI</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                                    <span class="hidden-xs">BERKAS</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            
                                        <div class="tab-pane active" id="profile">
                                          
                                            
                                              
                                                
                                            
                                              <table class="table table-borderless">
                                                
                                                  <tr>
                                                    <td width="60">Nama Lengkap</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_lengkap; ?></td>
                                                  <tr>
                                                  <tr>
                                                    <td width="60">Kewarganegaraan</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->kewarganegaraan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Jenis Kelamin</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->jk; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Tempat, Tanggal Lahir</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->tmpt_lahir; ?>, <?php echo $tampil->tgl_lahir; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Tinggi Badan</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->tinggi_badan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Berat Badan</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->berat_badan; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Alamat</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->alamat; ?></td>
                                                  </tr>
                                                  <tr>

                                                    <td width="60">Kode Pos</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->kode_pos; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Nama Ayah</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_ayah; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Nama Ibu</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_ibu; ?></td>
                                                  </tr>
                                                  <tr>
                                               
                                                    <td width="60">No Handphone</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->no_hp1."-".$tampil->no_hp2; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Info Dari</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->info_dari; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Nama Asal Sekolah</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->nama_asal_sekolah; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td width="60">Alamat Asal Sekolah</td>
                                                    <td width="3">:</td>
                                                    <td><?php echo $tampil->alamat_asal_sekolah; ?></td>
                                                  </tr>

                                                
                                              </table>


                                            
                                              
                                            
                                            
                                          
                                            
                                          
                                         </div>
                                         

                                         
                                            <div class="tab-pane" id="settings">
                                               <table class="table table-borderless">
                                                
                                                  <tr>
                                                    <td width="400">1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_ijazah); ?>"></td>
                                                  <tr>

                                                    <tr>
                                                    <td width="400">2. Surat Keterangan Sehat dan tidak Buta Warna</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_kesehatan); ?>"></td>
                                                  <tr>

                                                    <tr>
                                                    <td width="400">3. Pas foto 4 x 6 = 5 lembar, 3 x 4 =2 lembar dan 2 x 3 = 2 lembar</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_diri); ?>"></td>
                                                  <tr>


                                                    <tr>
                                                    <td width="400">4. Bukti Tranfer Pembayaran</td>
                                                    <td width="3">:</td>
                                                    <td><img width="200" src="<?php echo base_url('uploads/'.$tampil->foto_bukti_pembayaran); ?>"></td>
                                                  <tr>
                         
                   
                       <!--End row-->


                                              </table>

                                            </div>
                                        </div>
                                   </div>
                              </div>
                             </div>
                         </div>