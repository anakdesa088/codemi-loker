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
                   <img src="<?php echo base_url('uploads/'.$user_data['foto_dosen']); ?>" alt="profile" />  
               </div>
               <div class="m-b-10 text-center">
                   <h4><?php echo $user_data['nama_dosen']; ?></h4>
                   <p>Dosen</p>
               </div>
               <div class="m-b-20 text-center">

               </div>
               <div class="">
                   <p class="font-13"><strong>No Hp :</strong> <span class="m-l-15"><?php echo $user_data['no_hp']; ?></span></p>
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
                    <form action="" method="post">



                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" disabled="" value="<?php echo $user_data['nama_dosen']; ?>"   class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="emai" name="email" disabled="" value="<?php echo $user_data['email']; ?>"   class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" disabled="" name="phone" value="<?php echo $user_data['no_hp']; ?>"   class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="radio">
                                <input disabled="" type="radio" value="1" name="gender" 

                                <?php if ($user_data['jk'] == '1') {
                                    echo "checked";
                                } ?> 
                                id="radio-1">
                                <label for="radio-1">Laki-Laki</label>
                            </div>
                            <div class="radio">
                                <input type="radio"disabled="" value="2" name="gender" 
                                <?php if ($user_data['jk'] == '2') {
                                    echo "checked";
                                } ?> 
                                id="radio-2">
                                <label for="radio-1">Perempuan</label>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" disabled="" class="form-control" ><?php echo $user_data['alamat']; ?>
                                </textarea>
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
