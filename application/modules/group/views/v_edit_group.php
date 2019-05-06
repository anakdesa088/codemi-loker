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
                             
                                <form class="form-horizontal" action="<?php echo base_url('group/proses_edit/'.$group_data['id']) ?>" method="post">
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Group</label>
                                    <div class="col-md-10">
                                      <input class="form-control" value="<?php echo $group_data['group_name']; ?>" name="group_name" type="text">
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
<?php $serialize_permission = unserialize($group_data['permission']); ?>
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
                        <td><input type="checkbox" name="permission[]" id="permission" value="createUser" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createUser', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateUser" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updateUser', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewUser" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewUser', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deleteUser', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKelas" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createKelas', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKelas" class="minimal" <?php if($serialize_permission) {
                          if(in_array('updateKelas', $serialize_permission)) { echo "checked"; } 
                        } ?>></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKelas" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewKelas', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKelas" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deleteKelas', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>Mahasiswa</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createMahasiswa" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createMahasiswa', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateMahasiswa" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updateMahasiswa', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewMahasiswa" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewMahasiswa', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteMahasiswa" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewMahasiswa', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>Dosen</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createDosen" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createDosen', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateDosen" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updateDosen', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewDosen" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewDosen', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteDosen" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deleteDosen', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>Mata Kuliah</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updateMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deleteMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>Pembagian Mata Kuliah</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createPembagianMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createPembagianMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updatePembagianMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updatePembagianMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewPembagianMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewPembagianMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deletePembagianMatkul" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deletePembagianMatkul', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>KRS</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKrs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createKrs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKrs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updateKrs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKrs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewKrs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKrs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deleteKrs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                      </tr>
                      <tr>
                        <td>KHS</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="createKhs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('createKhs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateKhs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('updateKhs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewKhs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('viewKhs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="deleteKhs" class="minimal"
                          <?php if($serialize_permission) {
                          if(in_array('deleteKhs', $serialize_permission)) { echo "checked"; } 
                        } ?>
                          ></td>
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
                        <td>Company</td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateCompany" class="minimal"></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td> - </td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="viewProfile" class="minimal"></td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Setting</td>
                        <td>-</td>
                        <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting" class="minimal"></td>
                        <td> - </td>
                        <td> - </td>
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
