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

           
                     <!--Start row-->
                     
                     <!--End row-->
                     <div class="row">
 <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">ISI KHS</h2>
                                <form class="form-horizontal" action="<?php echo site_url('khs/filter'); ?>" method="post" >
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
                <div class="col-md-14">
                     <div class="white-box">
                        <h2 class="header-title"> INPUR KHS</h2>
                          <table>
                                  <tr>
                                    <td>Tingkat/Semester</td>
                                    <td width="6">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td><?php 
                                      foreach ($mahasiswa as $m) {
                                        $c= $m->nama_semester;
                                        $k= $m->nama_kelas;
                                      } 
                                       if ($mahasiswa) {
                                      echo $c;
                                    }else{
                                      
                                      echo "";
                                    } ?></td>
                                  </tr>
                                  <tr>
                                    <td>Mata Kuliah</td>
                                    <td width="6">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td><?php if(isset($data_mapel)) {
                                      
                                      $nama_mapel = "";
                                    }else{
                                      echo $data_mapal->nama_mapel;
                                      
                                    } ?>

</td>
                                  </tr>
                                  <tr>
                                    <td>Kelas</td>
                                    <td width="6">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td><?php if ($mahasiswa) {
                                      echo $k;
                                    }else{
                                      echo "";
                                      
                                    } ?></td>
                                  </tr>
                                  <tr>
                                    <td>Nama Dosen</td>
                                    <td width="6">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                    <td><?php echo $this->session->userdata('nama_dosen'); ?></td>
                                  </tr>
                                </table>  
                                <hr>
                         <div class="table-wrap">
                        <?php $id_dosen = $this->session->userdata('id_dosen'); ?>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>UTS</th>
                                            <th>40%</th>
                                            <th>UAS</th>
                                            <th>40%</th>
                                            <th>TGS</th>
                                            <th>20%</th>
                                            <th>JML</th>
                                            <th>AM</th>
                                            <th width="90">HN</th>
                                            <th>KETERANGAN</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      <form action="<?php echo site_url('khs/proses_input'); ?>" method="post">
                                      <?php $no =1; foreach ($mahasiswa as $r) {
                                        # code...
                                      ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                              <?php echo $r->nama_lengkap; ?>
                                              <input type="hidden" value="<?php echo $r->id_mahasiswa; ?>" name="id_mahasiswa[]">
                                              
                                            </td>
                                            <td><input type="number" class="form-control" name="uts[]"></td>
                                            <td><input type="number" class="form-control" name="uts40[]"></td>
                                            <td><input type="number" class="form-control" name="uas[]"></td>
                                            <td><input type="number" class="form-control" name="uas40[]"></td>
                                            <td><input type="number" class="form-control" name="tugas[]"></td>
                                            <td><input type="number" class="form-control" name="tugas20[]"></td>
                                            <td><input type="number" class="form-control" name="jumlah[]"></td>
                                            <td><input type="number" class="form-control" name="am[]"></td>
                                            <input type="hidden" value="<?php echo $id_dosen; ?>" name="id_dosen[]">
                                            <input type="hidden" value="<?php echo $data_mapal->id_mapel; ?>" name="id_mapel[]">

                                            <td><select class="form-control" name="hm[]"><option value="A">A</option>
                                              <option value="B">B</option>
                                              <option value="C">C</option>
                                              <option value="D">E</option>
                                            </select></td>
                                            <td><select class="form-control" name="keterangan[]"><option value="1">LULUS</option>
                                              <option value="0">TL</option>
                                            </select></td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                                <div class="col-md-11"></div>
<div class="col-md-1"><button type="submit" class="btn btn-info">Simpan</button></form> </div>
                             </div>
                        </div>
                     </div>
                   </div>

