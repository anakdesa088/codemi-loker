    
                  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">PENGUMUMAN</h4>
                        <ol class="breadcrumb">
                            
                            <li>
                                <a href="#">PENGUMUMAN</a>
                            </li>
                            <li class="active">
                                PENGUMUMAN
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
               
                  <!--Start row-->
                  <div class="row">
                      <div class="col-md-12">
                            <div class="white-box"> 
 
                        
                           <div class="col-md-12">
                              <div class="white-box">
                                <div class="mailbox-content">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="1" class="hidden-xs">
                                              <div class="checkbox p-l-25">
                                                 <input type="checkbox" class="check-mail-all">
                                                  <label></label>

                                                </div>

                                            </th>
                                            <TH>*</TH>
                                            <th>DARI</th>
                                            <th>PESAN</th>
                                            <th></th>
                                            <th>TANGGAL KIRIM</th>


                                            
                                        </tr>
                                    </thead>
                                    <tbody >

                                      <?php foreach ($info as $r) {
                                        # code...
                                       ?>
                                      
                                        <tr class="<?php if($r->read == "0"){ ?> unread <?php }else{ ?> read <?php } ?>">
                                            <td  class="hidden-xs">
                                               <div class="checkbox">
                                                 <input type="checkbox" class="checkbox-mail" >
                                                  <label></label>
                                                </div>
                                            </td>
                                            <td class="hidden-xs">
                                                <i class="fa fa-star "></i>
                                            </td>
                                            <td class="hidden-xs">
                                                <a href="<?php echo site_url('pengumuman/view_pengumuman_mhs/'.$r->id_pengumuman_mhs); ?>"> <?php echo $r->dari; ?></a>
                                            </td>
                                            <td>
                                               <a href="<?php echo site_url('pengumuman/view_pengumuman_mhs/'.$r->id_pengumuman_mhs); ?>"> <?php echo $r->judul; ?> </a>
                                            <td>
                                            </td>
                                            <td class="date">
                                                <?php $date = date_create($r->tanggal_kirim); $tanggal = date_format($date,'d-m-Y'); echo $tanggal;  ?>
                                            </td>
                                        </tr>
                                      
                                      
                                        
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                                
                                
                            
                            </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <!--End row-->
