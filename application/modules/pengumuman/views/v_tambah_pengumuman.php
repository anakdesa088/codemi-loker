<link href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') ?>" rel="stylesheet" type="text/css" />
 <div class="page-title-box">
                        <h4 class="page-title">Compose Mail</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Email</a>
                            </li>
                            <li class="active">
                                Compose Mail
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
               
                  <!--Start row-->
                    <div class="row">
                       <div class="col-md-12">
                           <div class="white-box">
                           
                            <div class="col-md-3 p-l-0">
                              <div class="white-box">
                                  <a href="compose.html" class="btn btn-primary  btn-block m-b-20">Compose</a>
                                  <ul class="list-unstyled mailbox-nav">
                                    <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i>Inbox 
                                    <span class="badge badge-success pull-right">4</span></a></li>
                                    <li><a href="#"><i class="fa fa-sign-out"></i>Sent</a></li>
                                    <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                    <li><a href="#"><i class="fa fa-trash"></i>Trash</a></li>
                                 </ul>
                                 
                                 <ul class="list-group mail-label">
                                <li><h3 class="header-title">Labels</h3></li>
                                <li><a class="list-group-item" href="#"><span class="fa fa-circle text-warning m-r-10"></span>Personal</a></li>
                                <li><a class="list-group-item" href="#"><span class="fa fa-circle text-primary m-r-10"></span> Social</a></li>
                                <li> <a class="list-group-item disabled" href="#"><span class="fa fa-circle text-success m-r-10"></span> Album</a></li>
                                <li><a class="list-group-item" href="#"><span class="fa fa-circle text-danger m-r-10"></span> Friends</a></li>
                                <li><a class="list-group-item" href="#"><span class="fa fa-circle text-info m-r-10"></span> Family</a></li>
                                </ul>
                               </div>
                             </div> <!-- /.col-md-3-->
                             
                            <div class="col-md-9 p-r-0">
                              <div class="white-box">
                                <center><?php echo $this->session->flashdata('berhasil'); ?></center>
                                <div class="mailbox-content">
                                  <div class="compose-body">
                                    <form action="<?php echo site_url('pengumuman/proses_tambah_pengumuman'); ?>" method="post">
                                        <div class="form-group clearfix">
                                            <select name="kepada" class="form-control">
                                              <?php foreach ($email as $email) {
                                                # code...
                                              ?>
                                              <option value="<?php echo $email->id_pmb; ?>"><?php echo $email->email; ?></option>

                                            <?php } ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group  clearfix">
                                            <input type="text" name="judul" class="form-control"  placeholder="subject" id="subject">
                                        </div>
                                        
                                        <div class="form-group">
                                <textarea name="pesan" class="textarea form-control wysihtml5-textarea" placeholder="Enter text ..."  style="height:200px; width:100%;"></textarea>
                             </div>
                             
                                    
                                </div> <!--/.compose-body-->
                                
                                <div class="compose-message">
                                    <div class="summernote"></div>
                                </div> <!--/.compose-message-->
                                  
                                   
                                    
                                    
                                <div class="compose-options">
                                    <div class="pull-right m-t-10">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send></button>
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