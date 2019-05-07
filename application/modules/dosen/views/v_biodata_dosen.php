  <div class="page-title-box">
                        <h4 class="page-title">BIODATA</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">BIODATA</a>
                            </li>
                            
                            <li class="active">
                               BIODATA
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          

           <?php echo $this->session->flashdata('success'); ?>
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-3">
                                     <div class="profile-box white-box">
                                     
                                         <div class="profile-thumb">
                                             <img src="<?php echo base_url('uploads/'.$tampil->foto_dosen); ?>" alt="profile" />
                                         </div>
                                         <div class="m-b-10 text-center">
                                             <h4><?php echo $tampil->nama_dosen; ?></h4>
                                             <p>DOSEN</p>
                                         </div>
                                         <div class="m-b-10 ">
                                             
                                            
                                             <p><i class="fa fa-envelope"></i> <?php echo $tampil->email; ?></p>
                                            
                                             <p><i class="fa fa-phone"></i> <?php echo $tampil->no_hp; ?></p>
                                         </div>
                                            
                                         
                                     </div>
                                     
                                   
                                     
                                 </div> 
                                 
                                 <div class="col-md-8 col-lg-9 m-b-40">
                                    <div class="m-b-10">
                                        <ul class="nav nav-tabs navtab-custom">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                                    <span class="hidden-xs">BIODATA DOSEN</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            
                                             <form>
                                                    <div class="form-group">
                                                        <label>Nama lengkap</label>
                                                        <input type="email" disabled=""  value="<?php echo $tampil->nama_dosen; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tempat, Tanggal Lahir</label>
                                                        <?php $date = date_create($tampil->tgl_lahir);
                                                        $tgl_lahir = date_format($date,'d-m-Y');
                                                        ?>
                                                        <input type="email" disabled=""  value="<?php echo $tampil->tmpt_lahir.", ".$tgl_lahir; ?>" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>No Handphone</label>
                                                        <input type="email" disabled=""  value="<?php echo $tampil->no_hp; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tahun Masuk</label>
                                                        <input type="email" disabled=""  value="<?php echo $tampil->tahun_masuk; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dosen Wali</label>
                                                        <input type="email" disabled=""  value="<?php echo $tampil->nama_kelas; ?>" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" disabled=""  value="<?php echo $tampil->email; ?>" class="form-control">
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea disabled="" style="height: 125px"   class="form-control"><?php echo $tampil->alamat; ?></textarea>
                                                    </div>
                                                    
                                                </form>
                                            
                                          
                                         </div>
                                         
                                       

                                            
                                        </div>
                                   </div>
                              </div>
                             </div>
                         </div>
                     </div>
