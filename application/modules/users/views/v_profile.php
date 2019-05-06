  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">PROFILE</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGGUNA</a>
                            </li>
                            
                            <li class="active">
                                PROFILE
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
                                     
                                         <div class="profile-thumb">
                                             <img src="<?php echo base_url('assets/images/admin.png') ?>" alt="profile" />
                                         </div>
                                         <div class="m-b-10 text-center">
                                             <h4><?php echo $user_data['firstname']." ".$user_data['lastname']; ?></h4>
                                             <p><?php echo $user_group['group_name']; ?></p>
                                         </div>
                                         <div class="m-b-20 text-center">
                                         
                                         </div>
                                         <div class="">
                                         <p class="font-13"><strong>No Hp :</strong> <span class="m-l-15"><?php echo $user_data['phone']; ?></span></p>
                                         <p class="font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $user_data['email']; ?></span></p>
                                         
                                         </div>
                                     </div>
                                     
                                   
                                     
                                 </div> 
                                 
                                 <div class="col-md-8 col-lg-9 m-b-40">
                                    <div class="m-b-10">
                                        <ul class="nav nav-tabs navtab-custom">
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab" aria-expanded="false">
                                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                                    <span class="hidden-xs">Profile</span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            
                                        <div class="tab-pane active" id="profile">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" readonly="" value="<?php echo $user_data['username']; ?>" placeholder="John Doe"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Depan</label>
                                                        <input type="text" readonly="" value="<?php echo $user_data['firstname']; ?>" placeholder="John Doe"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Belakang</label>
                                                        <input type="email" readonly="" value="<?php echo $user_data['lastname']; ?>"  class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="emai" value="<?php echo $user_data['email']; ?>" readonly=""  class="form-control">
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label>No HP</label>
                                                        <input type="number" value="<?php echo $user_data['phone']; ?>"  readonly="" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <input type="text" class="form-control" value="<?php 
                                                        if($user_data['gender'] == "1"){
                                                            echo "Laki-laki";
                                                        }else{
                                                            echo "Perempuan";
                                                        }


                                                         ?>" readonly="">
                                                    </div>
                                                    <a href="" class="btn btn-warning">Edit</a>
                                                    
                                                </form>
                                         </div>
                                         
                                         
                                            
                                        </div>
                                   </div>
                              </div>
                             </div>
                         </div>
                     </div>
                     <!--End row-->
                         
