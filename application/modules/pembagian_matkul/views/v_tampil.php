
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

                            
                            <table class="table">
                              <thead>
                                <tr>
                                      
                                      <th>NO</th>
                                      <th>Mapel</th>
                                      <th>Kelas</th>
                                </tr>
                               

                              </thead>
                                
                              <tbody>
                                <?php $no=1; foreach ($tampil as $r) {
                                  # code...
                                ?>
                                <tr>
                                  
                                    <td><?php echo $no++; ?></td>
                                  <td><?php echo $r->nama_mapel; ?></td>
                                  <td><?php echo $r->nama_kelas; ?></td>
                                
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                            <button type="submit" class="btn btn-info">Simpan</button>
                              

                          </div>
                        </div>
                     </div>
                   <!-- End  Striped Table-->
                   


                     <!--End row-->
