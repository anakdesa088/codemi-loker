<div class="page-title-box ">
    <h4 class="page-title">Form</h4>
    <ol class="breadcrumb">
        <li> <a href="index.html">Dashboard</a> </li>
        <li> <a href="#">Forms </a> </li>
        <li class="active">Form Basic </li>
    </ol>
    <div class="clearfix"></div>
</div>
<!--End Page Title-->          
<div class="row">
   <div class="col-md-12">
       <div class="white-box">
        <a href="<?php echo site_url('backend/keuangan/index'); ?>" class="btn btn-warning">Kembali</a>
        <center><h2 class="header-title">Informasi Detail Peserta Ma Baru</h2>   </center>
        <div class="col-md-12">
            <center><img src="<?php echo base_url('uploads/'.$tampil->foto); ?>" width="170"></center>
        </div>
        <div class="col-md-6">
            
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="state-success">Nama Lengkap</label>
                    <div class="col-md-5">
                        <p class="form-control-static"><?php echo $tampil->nama_lengkap;  ?></p>

                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="state-warning">Kewarganegaraan</label>
                    <div class="col-md-5">
                        <p class="form-control-static"><?php echo $tampil->kewarganegaraan; ?></p>

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-4 control-label" for="state-danger">Jenis Kalmin</label>
                    <div class="col-md-5">
                        <p class="form-control-static"><?php echo $tampil->jk; ?></p>

                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tinggi Badan</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->tinggi_badan; ?></p>

                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Barat badan</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->berat_badan; ?></p>
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Tampat, Tanggal Lahir</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->tmpt_lahir.", ".$tampil->tgl_lahir; ?></p>
                        
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-sm-4 control-label">No Handphone</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->no_hp1." - ".$tampil->no_hp2; ?></p>
                        
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-6">
            
            <form class="form-horizontal">
                <div class="form-group ">
                    <label class="col-md-4 control-label">Nama Ayah</label>
                    <div class="col-md-5">
                        <p class="form-control-static"><?php echo $tampil->nama_ayah; ?></p>

                    </div>
                </div>
                
                
                <div class="form-group ">
                    <label class="col-md-4 control-label" ">Nama Ibu</label>
                    <div class="col-md-5">
                        <p class="form-control-static"><?php echo $tampil->nama_ibu; ?></p>

                    </div>
                </div>
                
                <div class="form-group ">
                    <label class="col-md-4 control-label" for="state-danger">Alamat Lenkap</label>
                    <div class="col-md-5">
                        <p class="form-control-static"><?php echo $tampil->alamat; ?></p>

                    </div>
                </div>
                
                <div class="form-group  ">
                    <label class="col-sm-4 control-label">Kode Pos</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->kode_pos; ?></p>

                        
                    </div>
                </div>
                
                
                
                <div class="form-group  ">
                    <label class="col-sm-4 control-label">Informasi Yang di Dapatkan</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->info_dari; ?></p>
                        
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-sm-4 control-label">Nama Asal Sekolah</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->nama_asal_sekolah; ?></p>
                        
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-sm-4 control-label">Alamat Asal Sekolah</label>
                    <div class="col-sm-5">
                        <p class="form-control-static"><?php echo $tampil->alamat_asal_sekolah; ?></p>
                        
                    </div>
                </div>

            </form>
        </div>
        <br>
        <div class="col-md-12"><center><h2 class="header-title">Berkas Persyaratan</h2>   </center></div>
        <div class="form-group  ">
            <label class="col-sm-6 control-label">1. Foto copy Ijazah/ STTB/ Surat Keterangan Lulus</label>
            <div class="col-sm-6">
                <img src="<?php echo site_url('uploads/'.$tampil->foto_ijaza); ?>" width="160">
                
            </div>
        </div>    
        <div class="form-group  ">
            <label class="col-sm-6 control-label">2. Surat Keterangan Sehat dan tidak Buta Warna</label>
            <div class="col-sm-6">
                <img src="<?php echo site_url('uploads/'.$tampil->foto_kesehatan); ?>" width="160">
                
            </div>
        </div>                            
    </div>
</div>
</div>
<!--End row-->

