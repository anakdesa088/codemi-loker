
                      <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">PAMBAGIAN MATKUL</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">AKADEMIK</a> </li>
                                
                                <li class="active">PEMBAGIAN MATUKUL</li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          



<div class="row">
                         <div class="col-md-12">
                           
                             
                                  
                     <div class="white-box">
                        <h2 class="header-title"> PEMBAGIAN MATKUL</h2>
                         <div class="table-wrap">
                                <table class="table table-striped">
                              
                              <th></th>
                              <?php foreach ($kelas as $kelas) {
                                
                              ?>
                              <th><?php echo $kelas->nama_kelas; ?></th>
                            <?php } ?>
                            
                            <tbody>
                              <?php foreach ($mapel as $r) {
                                 
                                 ?>
                              <tr>
                                
                                <td width="380"><?php echo $r->nama_mapel; ?></td>
                                <?php foreach ($tampil as $e) {
                                  
                                ?>
                                <td><?php echo $e->id_mapel; ?></td>
                              <?php } ?>
                              </tr>
                              <?php } ?>
                            </tbody>
                            </table>

                          </div>
                        </div>
                     </div>
                   <!-- End  Striped Table-->
                   


                           </div>
                          </div>
                      </div>
                     <!--End row-->
