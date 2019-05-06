  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">EDIT PROFILE</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGGUNA</a>
                            </li>
                            
                            <li class="active">
                                    EDIT PROFILE
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-3">
                                     <div class="profile-box white-box">
                                     <?php 
                                     $dosen = $this->session->userdata('dosen');
                                     $management = $this->session->userdata('management');
                                     ?>
                                         <div class="profile-thumb">
                                             <img src="<?php if($management){
                                                echo base_url('assets/images/admin.png');
                                             }
                                             if($dosen){
                                                echo base_url('uploads/'.$user_dosen['foto_dosen']);
                                             }
                                              ?>" alt="profile" />  
                                         </div>
                                         <div class="m-b-10 text-center">
                                             <h4><?php if($management){
                                                echo $user_data['firstname']." ".$user_data['lastname'];
                                             } if($dosen){
                                                echo $user_dosen['nama_dosen'];
                                             }
                                              ?></h4>
                                             <p><?php  if($management){
                                               echo $user_group['group_name'];
                                             }
                                             if($dosen){
                                                echo "Dosen";
                                             }
                                              ?></p>
                                         </div>
                                         <div class="m-b-20 text-center">
                                         
                                         </div>
                                         <div class="">
                                         <p class="font-13"><strong>No Hp :</strong> <span class="m-l-15"><?php if($management){
                                            echo $user_data['phone'];
                                         }
                                         if ($dosen) {
                                             echo $user_dosen['no_hp'];
                                         }

                                          ?></span></p>
                                         <p class="font-13"><strong>Email :</strong> <span class="m-l-15"><?php if($management){
                                            echo $user_data['email'];
                                        }
                                        if ($dosen) {
                                            echo $user_dosen['email'];
                                        }

                                          ?></span></p>
                                         
                                         </div>
                                     </div>
                                     
                                   
                                     
                                 </div> 
                                 
                                 <div class="col-md-8 col-lg-9 m-b-40">
                                    <div class="m-b-10">
                                        <ul class="nav nav-tabs navtab-custom">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                                    <span class="hidden-xs">Edit Profile</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            
                                        <div class="tab-pane active" id="profile">
                                                <form action="<?php if($management){
                                                    echo  site_url('users/proses_setting/'.$user_data['id']);
                                                }
                                                if($dosen){
                                                    echo  site_url('users/proses_setting/'.$user_dosen['id_dosen']);
                                                }
                                                 ?>" method="post">
                                                    <?php 
                                                    if ($management) {
                                                        ?>
                                                        <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" name="username" value="<?php echo $user_data['username']; ?>"    class="form-control">
                                                    </div>
                                                        <?php
                                                    }


                                                    ?>


                                                   <?php if ($management) {
                                                       # code...
                                                   ?> 
                                                    <div class="form-group">
                                                        <label>Nama Depan</label>
                                                        <input type="text" name="fname" value="<?php
                                                        if($this->session->userdata('management')){
                                                            echo $user_data['firstname'];
                                                        }
                                                        ?>"    class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Nama Belakang</label>
                                                        <input type="text" name="lname"  value="<?php
                                                        if($this->session->userdata('management')){
                                                            echo $user_data['lastname'];
                                                        }



                                                        ?>"  class="form-control">
                                                    </div>

                                                <?php  } ?>

                                                    <?php if ($dosen) {
                                                        ?>
                                                        <div class="form-group">
                                                        <label>Nama Lengkap</label>
                                                        <input type="text" name="nama_dosen" value="<?php
                                                        if($this->session->userdata('dosen')){
                                                            echo $user_dosen['nama_dosen'];
                                                        }



                                                        ?>"   class="form-control">
                                                    </div>
                                                    <?php }?>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="emai" name="email" value="<?php
                                                        if($this->session->userdata('management')){
                                                            echo $user_data['email'];
                                                        }elseif($this->session->userdata('dosen')){
                                                            echo $user_dosen['email'];
                                                        }



                                                        ?>"   class="form-control">
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label>No HP</label>
                                                        <input type="number" name="phone" value="<?php
                                                        if($this->session->userdata('management')){
                                                            echo $user_data['phone'];
                                                        }elseif($this->session->userdata('dosen')){
                                                            echo $user_dosen['no_hp'];
                                                        }



                                                        ?>"   class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <div class="radio">
                                            <input type="radio" value="1" name="gender" 
                    <?php if($management){
                        if($user_data['gender'] == 1) {
                        echo "checked";
                      } 
                    }

                    if($dosen){
                    if($user_dosen['jk'] == 1) {
                        echo "checked";
                      } 
                  }
                        ?> 

                      id="radio-1">
                                            <label for="radio-1">Laki-Laki</label>
                                                    </div>
                                                    <div class="radio">
                                            <input type="radio" value="2" name="gender" 
<?php if($management){
                        if($user_data['gender'] == 2) {
                        echo "checked";
                      } 
                    }

                    if($dosen){
                    if($user_dosen['jk'] == 2) {
                        echo "checked";
                      } 
                  }
                        ?> 
                                             id="radio-2">
                                            <label for="radio-1">Perempuan</label>
                                        </div>

                                                    <?php if ($dosen) {
                                                      
                                                    ?>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea name="alamat" class="form-control" ><?php echo $user_dosen['alamat']; ?></textarea>
                                                    </div>

                                                    <?php } ?>
                                                    <div class="form-group">
                                                        <div class="alert alert-info" role="alert">  <span>Biarkan Form kata sandi kosong jika Anda tidak ingin mengubahnya.</span></div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="text" name="password"   class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm password</label>
                                                        <input type="text" name="cpaassword"   class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-10">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <button type="submit" class="btn btn-info">SIMPAN</button>
                                                        </div>
                                                        <br>
                                                        <br>
                                                    </div>
                                                    
                                                </form>
                                         </div>
                                         
                                         
                                            
                                        </div>
                                   </div>
                              </div>
                             </div>
                         </div>
                     </div>
                     <!--End row-->
                         
