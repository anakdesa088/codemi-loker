 <div class="page-title-box">
                        <h4 class="page-title">LIHAT PENGUMUMAN</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGUMUMAN</a>
                            </li>
                            <li>
                                <a href="#">PENGUMUMAN MAHASISWA</a>
                            </li>
                            <li class="active">
                                LIHAT PENGUMUMAN
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
               
                  <!--Start row-->
                    <div class="row">
                        <div class="col-md-12">
                             <div class="white-box">
                            
                                
                              <div class="col-md-11">
                                  <div class="white-box">
                                    <div class="mailbox-content">
                                        <div class="message-header">
                                            <h3><?php echo $info->judul; ?></h3>
                                        </div>
                                        <div class="message-sender">
                                           <div class="media m-b-30 ">
                                                <a href="#" class="pull-left">
                                                    <img alt="" src="assets/images/users/avatar-2.jpg" class="media-object thumb-sm img-circle">
                                                </a>
                                                <div class="media-body">
                                                    <span class="media-meta pull-right message-date"><?php echo $info->tanggal_kirim; ?></span>
                                                    <h5 class="m-0">Dari : <?php echo $info->dari; ?></h5>
                                                    <small class="text-muted"></small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="message-content">
                                        <p class="font-weight-500 m-b-15"> Kepada : <?php echo $info->nama_lengkap; ?> </p>
                                            <p><?php echo $info->pesan; ?></p>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                             </div>
                        </div>
                    </div>
                    <!--End row-->
