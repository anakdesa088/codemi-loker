  <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">TAMBAH USER</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">PANGGUNA</a> </li>
                                <li> <a href="#">USER </a> </li>
                                <li class="active">TAMBAH USER </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

<?php 

if (validation_errors()) {
echo '<div class="alert alert-danger" role="alert"> <span> '.validation_errors().'</span></div>';
}
 ?>
           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH USER</h2>
                                <form class="form-horizontal"action="<?php base_url('users/tambah_users') ?>" method="post">
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Group</label>
                                    <div class="col-md-10">
                                      <select name="groups" class="form-control">
                                          <?php foreach ($group_data as $k => $v): ?>
                                          <option value="<?php echo $v['id'] ?>"><?php echo $v['group_name'] ?></option>
                                        <?php endforeach ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Username</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="username" autocomplete="off" type="text">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">Email</label>
                                    <div class="col-md-10">
                                      <input id="example-email" name="email" autocomplete="off" class="form-control" placeholder="Email" type="email">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="password" autocomplete="off" type="password">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Confirm password</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="cpassword" autocomplete="off" type="password">
                                    </div>
                                  </div>
                                  
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Depan</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="fname" autocomplete="off" placeholder="placeholder" type="text">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nama Belakang</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="lname" autocomplete="off" placeholder="placeholder" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">No Hp</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="phone" autocomplete="off" placeholder="placeholder" type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">gender</label>
                                    <div class="col-md-10">
                                      <div class="row">
                                        <div class="col-md-2">
                                          <div class="radio">
                                            <input type="radio" value="1" name="gender" id="radio-1">
                                            <label for="radio-1">Laki-Laki</label>
                                          </div>
                                        </div>
                                        <!-- /.radio -->
                                              <div class="col-md-2">
                                              <div class="radio primary">
                                                <input type="radio" value="2" name="gender" id="radio-2">
                                                <label for="radio-2">Peremupuan</label>
                                              </div>
                                            </div>
                                        </div>

                                        </div>
                                      </div>

                                  
                                  <div class="form-group">
                                    <label class="col-md-10 control-label"></label>
                                    <div class="col-md-2">
                                      <button type="submit" class="btn btn-info" >SIMPAN</button>
                                    </div>
                                  </div>
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
                     
