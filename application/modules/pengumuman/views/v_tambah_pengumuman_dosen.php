<link href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') ?>" rel="stylesheet" type="text/css" />
 <div class="page-title-box">
                        <h4 class="page-title">TAMBAH PENGUMUMAN</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGUMUMAN</a>
                            </li>
                            
                            <li class="active">
                                TAMBAH PENGUMUMAN
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
               
                  <!--Start row-->
                    <div class="row">
                       <div class="col-md-12">
                           <div class="white-box">
                           
                            
                             
                            <div class="col-md-9 p-r-0">
                              <div class="white-box">
                                <center><?php echo $this->session->flashdata('berhasil'); ?></center>
                                <div class="mailbox-content">
                                  <div class="compose-body">
                                    <form action="<?php echo site_url('pengumuman/proses_tambah_pengumuman_dosen'); ?>" method="post">
                                        <div class="form-group  clearfix">
                                            <input type="hidden" name="kepada[]" class="form-control"  value="
                                            <?php foreach ($mahasiswa as $m) {
                              echo $m->id_mahasiswa; 
                            } ?>
                                            " id="subject">
                                        </div>
                                        
                                        <div class="form-group  clearfix">
                                            <input type="text" name="judul[]" class="form-control"  placeholder="subject" id="subject">
                                        </div>
                                        
                                        <div class="form-group">
                                <textarea name="pesan[]" class="textarea form-control wysihtml5-textarea" placeholder="Enter text ..."  style="height:200px; width:100%;"></textarea>
                             </div>
                             <input type="hidden" name="dari[]" value="<?php echo $this->session->userdata('nama_dosen'); ?>">

                             <input type="hidden" name="id_dosen[]" value="<?php echo $this->session->userdata('id_dosen'); ?>">
                             <input type="hidden" name="tanggal_kirim[]" value="<?php echo date('Y-m-d'); ?>">
                             <input type="hidden" name="read[]" value="0">
                             
                                    
                                </div> <!--/.compose-body-->
                                
                                <div class="compose-message">
                                    <div class="summernote"></div>
                                </div> <!--/.compose-message-->
                                  
                                   
                                    
                                    
                                <div class="compose-options">
                                    <div class="pull-right m-t-10">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> KIRIM</button>
                                    </div>
                                </div> <!--/.compose-options-->
                              </div>
                              </form>
                             </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!--End row-->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') ?>"></script>