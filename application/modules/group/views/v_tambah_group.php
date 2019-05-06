 <div class="page-title-box">
                    <h4 class="page-title">TAMBAH GROUP</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">PENGGUNA</a>
                        </li>
                        <li>
                            <a href="#">GROUP</a>
                        </li>
                        <li class="active">
                            TAMBAH GROUP
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          

 <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             
                                <form class="form-horizontal" action="<?php echo base_url('group/proses_tambah_group') ?>" method="post">
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Group</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="group_name" type="text">
                                    </div>
                                  </div>

</div>
</div>
</div>


           
                   <!--Start row-->
                   <div class="row">
                 
                   <!-- Start Basic Table-->
                    <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title">Group Permision</h2>

                         <div class="table-wrap">
                                <table class="table">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Create</th>
                                  <th>Update</th>
                                  <th>View</th>
                                  <th>Delete</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                        <td>Users</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKelas" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKelas" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKelas" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKelas" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Mahasiswa</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createMahasiswa" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateMahasiswa" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewMahasiswa" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteMahasiswa" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Dosen</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createDosen" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateDosen" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewDosen" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteDosen" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Mata Kuliah</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createMatkul" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateMatkul" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewMatkul" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteMatkul" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Pembagian Mata Kuliah</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPembagianMatkul" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePembagianMatkul" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPembagianMatkul" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePembagianMatkul" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>KRS</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKrs" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKrs" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKrs" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKrs" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>KHS</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKhs" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKhs" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKhs" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKhs" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Jenis Pembayaran</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createJenisPembayaran" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateJenisPembayaran" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewJenisPembayaran" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteJenisPembayaran" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Transaksi</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createTransaksi" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateTransaksi" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewTransaksi" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteTransaksi" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Set Semester</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createSemester" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSemester" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewSemester" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteSemester" class="minimal"></td>
                      </tr>
                      <tr>
                        <td>Set Tahun Ajaran</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createTahunAjaran" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateTahunAjaran" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewTahunAjaran" class="minimal"></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteTahunAjaran" class="minimal"></td>
                      </tr>
                      
                      
                      
                      
                              </tbody>
                            </table>
                            <div class="col-md-10">
                            </div>
                            <div class="col-md-2">
                            
                              <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                            </form>
                         </div>
                        </div>
                     </div>
                   <!-- End Basic Table-->
