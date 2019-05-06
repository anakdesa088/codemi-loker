   <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">BOPDATA</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">AKADEMIK</a>
                            </li>
                            
                            <li class="active">
                               BOPDATA
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
                                             <img src="<?php echo base_url('uploads/'.$tampil->foto_diri); ?>" alt="profile" />
                                         </div>
                                         <div class="m-b-10 text-center">
                                             <h4><?php echo $tampil->nama_lengkap; ?></h4>
                                             <p><?php echo $tampil->nim; ?></p>
                                         </div>
                                         <div class="m-b-20 text-center">
                                         
                                         </div>
                                         <div class="">
                                         <p class="font-13"><strong>No HP :</strong> <span class="m-l-15"><?php echo $tampil->no_hp1; ?></span></p>
                                         <p class="font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $tampil->email; ?></span></p>
                                         
                                         </div>
                                     </div>
                                     
                                   <div class="white-box">
                                    <h2 class="header-title">Skills</h2>
                                        <p>HTML5</p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                        <p>CSS3</p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            </div>
                                        </div>
                                        <p>Bootstrap</p>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            </div>
                                        </div>
                                  </div> <!--/.white-box-->
                                     
                                 </div> 
                                 
                                 <div class="col-md-8 col-lg-9 m-b-40">
                                    <div class="m-b-10">
                                        <ul class="nav nav-tabs navtab-custom">
                                            <li class="active">
                                                <a href="#data_pribadi" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                                    <span class="hidden-xs">DATA PRIBADI</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#data_sekolah" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                                    <span class="hidden-xs">DATA SEKOLAH</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#data_keluarga" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                                    <span class="hidden-xs">DATA SEKOLAH</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            
                                        <div class="tab-pane active" id="data_pribadi">
                                                 <form>
                                                    <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" value="<?php echo $tampil->nama_lengkap; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kewarganegaraan</label>
                                                        <input type="text" value="<?php echo $tampil->kewarganegaraan; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <input type="text" value="<?php echo $tampil->jk; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <?php 
                                                    $date=date_create($tampil->tgl_lahir);
                                                    $tanggal_lahir =  date_format($date,"d/m/Y");
                                                    ?>
                                                    <div class="form-group">
                                                        <label>Tempat Tanggal Lahir</label>
                                                        <input type="text" value="<?php echo $tampil->tmpt_lahir.", ".$tampil->tgl_lahir; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tinggi Badan</label>
                                                        <input type="text" value="<?php echo $tanggal_lahir ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Berat Badan</label>
                                                        <input type="text" value="<?php echo $tampil->berat_badan; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea style="height: 125px" class="form-control" readonly="" > <?php echo $tampil->alamat; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kode Pos</label>
                                                        <input type="text" value="<?php echo $tampil->kode_pos; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" value="<?php echo $tampil->email; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Handphone 1</label>
                                                        <input type="text" value="<?php echo $tampil->no_hp1; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No Handphone 2</label>
                                                        <input type="text" value="<?php echo $tampil->no_hp2; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    

                                                    
                                                </form>
                                         </div>
                                         
                                         
                                            <div class="tab-pane" id="data_sekolah">
                                                <form>
                                                     <div class="form-group">
                                                        <label>Tahun Ajaran</label>
                                                        <input type="text" value="<?php echo $tampil->tahun_ajarancol; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kelas</label>
                                                        <input type="text" value="<?php echo $tampil->nama_kelas ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIM</label>
                                                        <input type="text" value="<?php echo $tampil->nim; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Asal Sekolah</label>
                                                        <input type="text" value="<?php echo $tampil->nama_asal_sekolah; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Asal Sekolah</label>
                                                        <textarea style="height: 125px" class="form-control" readonly="" > <?php echo $tampil->alamat_asal_sekolah; ?></textarea>
                                                    </div>
                                                    
                                                </form>
                                            </div>

                                            <div class="tab-pane" id="data_keluarga">
                                                <form>
                                                     <div class="form-group">
                                                        <label>Nama Ayah</label>
                                                        <input type="text" value="<?php echo $tampil->nama_ayah; ?>"  disabled=""  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Ibu</label>
                                                        <input type="text" value="<?php echo $tampil->nama_ibu; ?>" disabled=""  class="form-control">
                                                    </div>
                                                    
                                                    
                                                    
                                                </form>
                                            </div>
                                        </div>
                                   </div>
                              </div>
                             </div>
                         </div>
                     </div>
                     <!--End row-->
