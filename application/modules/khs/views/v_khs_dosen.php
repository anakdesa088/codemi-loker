                    <div class="page-title-box " >
                            <h4 class="page-title"></h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">KHS</a> </li>
                                <li> <a href="#"> </a> </li>
                                <li class="active"></li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           <?php echo $this->session->flashdata('sukses'); ?>
                     <!--Start row-->
                     
                     <!--End row-->
                     <div class="row">
 <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">DATA KHS</h2>
                                <form class="form-horizontal" action="<?php echo site_url('khs/list_khs_kelas'); ?>" method="post" >
                                  <div class="form-group" >
                                    <label class="col-md-2 control-label">PILIH</label>
                                    <div class="col-md-10" >
                                      
                                      <div class="col-md-4">
                                        <B>KELAS</B>
                                      <select  class="form-control" name="kelas">
                                        <?php foreach ($kelas as $r) {
                                          # code...
                                        ?>
                                        <option value="<?php echo $r->id_kelas; ?>"><?php echo $r->nama_kelas; ?></option>
                                      <?php } ?>
                                      </select>

                                    </div>
                                    
                                    <div class="col-md-4">
                                      <B>MATAKULIAH</B>
                                      <select  class="form-control" name="mapel">
                                        <?php foreach ($mapel as $u) {
                                          # code...
                                        ?>
                                        <option value="<?php echo $u->id_mapel; ?>"><?php echo $u->nama_mapel; ?></option>
                                      <?php } ?>
                                      </select>

                                    </div>
                                      <div class="col-md-2">
                                        <br>
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  </div>

                                  
                                </form>
                           </div>
                          </div>