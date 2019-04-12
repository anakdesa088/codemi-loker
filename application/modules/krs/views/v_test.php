     <div class="page-title-box">
                    <h4 class="page-title">Basic Table</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Table</a>
                        </li>
                        <li class="active">
                            Basic Table
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          
           
                   <!--Start row-->
                   
                  
                  <div class="row">
                   <!-- Start  Bordered  Table-->
                    <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title"> Bordered Table</h2>
                        <table>
                          <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><?php echo $mahasiswa->nama_lengkap; ?></td>
                          </tr>
                          <tr>
                            <td>NIM</td>
                            <td> : </td>
                            <td><?php echo $mahasiswa->nim; ?></td>
                          </tr>
                          <tr>
                            <td>Dosen Wali</td>
                            <td> : </td>
                            <td><?php echo $mahasiswa->nama_dosen;  ?></td>
                          </tr>
                          <tr>
                            <td>Tingkat/ Semester</td>
                            <td> : </td>
                            <td><?php echo $mahasiswa->nama_kelas." / ". $mahasiswa->nama_semester; ?></td>
                          </tr>
                          <tr>
                            <td>Tahun AJaran</td>
                            <td> : </td>
                            <td> <?php echo $mahasiswa->tahun_ajarancol; ?> </td>
                          </tr>
                        </table>
                         <div class="table-wrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mapel</th>
                                            <th>Kelas</th>
                                            <th>dosen</th>
                                            <th>AKsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no = 1;
                                       foreach ($tampil as $r) {
                                        # code...
                                      ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r->nama_mapel; ?></td>
                                            <td><?php echo $r->nama_kelas; ?></td>
                                            <td><?php echo $r->nama_dosen; ?></td>
                                            <td><a href="" class="btn btn-warning">Edit</a>
                                              <a href="" class="btn btn-danger">Hapus</a>

                                            </td>
                                        </tr>
                                      <?php } ?>  
                                    </tbody>
                                </table>
                             </div>
                        </div>
                     </div>
                   <!-- End  Bordered Table-->
</div>