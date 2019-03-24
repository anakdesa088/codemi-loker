<div class="page-title-box">
    <h4 class="page-title">Data Table</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Table</a>
        </li>
        <li class="active">
            Data Table
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-multi-select/css/multi-select.css') ?>" />

<link href="<?php echo base_url('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/css/select2.css') ?>" />

<div class="row">
 <div class="col-md-12">
   <div class="white-box">
     <h2 class="header-title">Edit Mahasiswa</h2>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('backend/mahasiswa/proses_edit_mahasiswa'); ?>" class="form-horizontal">

         <div class="form-group">
            <label class="col-md-2 control-label">Tahun Ajaran</label>
            <div class="col-md-10">
              <select id="select2" name="tahun_ajaran" class="demo_select2 form-control">
                <?php foreach ($tahun_ajaran as $r) {
                  
                ?>
                <option value="<?php echo $r->id_tahun_ajaran; ?>"><?php echo $r->tahun_ajarancol; ?></option>
                <?php } ?>
                
            </select>

        </div>
    </div>

    <div class="form-group">
        <label class="col-md-2 control-label">Kelas</label>
        <div class="col-md-10">
          <select id="select2"  name="kelas" class="demo_select2 form-control">
            <?php foreach ($kelas as $r) {
                  
                ?>
                <option value="<?php echo $r->id_kelas; ?>"><?php echo $r->nama_kelas; ?></option>
                <?php } ?>
        </select>

    </div>
</div>                                  

<div class="form-group">
    <label class="col-md-2 control-label">Nama Lengkap</label>
    <div class="col-md-10">
      <input class="form-control" name="nama_lengkap"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nim</label>
    <div class="col-md-10">
      <input class="form-control" name="nim" type="text">
  </div>
</div>




<div class="form-group">
    <label class="col-md-2 control-label">Kewarganegaraan</label>
    <div class="col-md-10">
        <div class="row">
        <div class="col-md-2">
        <div class="radio">
            <input type="radio" value="WNI" name="kewarganegaraan" id="radio-1">
            <label for="radio-1">WNI</label>
        </div>
        </div>
        <!-- /.radio -->
        <div class="col-md-2">
        <div class="radio primary">
          <input type="radio" value="WNA" name="kewarganegaraan" id="radio-2">
          <label for="radio-2">WNA</label>
        </div>
      </div>
  </div>

  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Jenis Kelamin</label>
    <div class="col-md-10">
        <div class="row">
        <div class="col-md-2">
        <div class="radio">
            <input type="radio" value="L" name="jk" id="radio-1">
            <label for="radio-1">Laki-laki</label>
        </div>
        </div>
        <!-- /.radio -->
        <div class="col-md-2">
        <div class="radio primary">
          <input type="radio" value="P" name="jk" id="radio-2">
          <label for="radio-2">Perempuan</label>
        </div>
      </div>
  </div>

  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tempat, Tanggal Lahir</label>
    <div class="col-md-3">
      <input class="form-control" name="tmpt_lahir"  type="text">
  </div>
  <div class="col-md-4">
      <input type="text"  name="tgl_lahir" class="form-control default-date-picker-autoclose" >
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tinggi Badan</label>
    <div class="col-md-10">
      <input class="form-control" name="tinggi_badan"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Berat Badan</label>
    <div class="col-md-10">
      <input class="form-control" name="berat_badan"  type="text">
  </div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-10">
      <input class="form-control" name="alamat"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Kode Pos</label>
    <div class="col-md-10">
      <input class="form-control" name="kode_pos"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Nama Ayah</label>
    <div class="col-md-10">
      <input class="form-control" name="nama_ayah"  type="text">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Ibu</label>
    <div class="col-md-10">
      <input class="form-control" name="nama_ibu"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">No Handphone 1</label>
    <div class="col-md-10">
      <input class="form-control" name="no_hp1"  type="number"> 
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">No Handphone 2</label>
    <div class="col-md-10">
      <input class="form-control" name="no_hp2"  type="number"> 
  </div>
</div>


<div class="form-group">
    <label class="col-md-2 control-label">Info Dari</label>
    <div class="col-md-10">
      <input class="form-control" name="info_dari"  type="text"> 
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nama Asal Sekolah</label>
    <div class="col-md-10">
      <input class="form-control" name="nama_asal_sekolah"  type="text">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Alamat Asal Sekolah</label>
    <div class="col-md-10">
      <input class="form-control" name="alamat_asal_sekolah"  type="text">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Foto Mahasiswa</label>
    <div class="col-md-4">
      <input type="file" name="foto_diri" id="input-file-now" class="dropify" />
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
      <input class="form-control" name="email"  type="email">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
      <input class="form-control" name="password"  type="password">
  </div>
</div>

<div class="form-group">  
  <div class="col-md-12">
        <div class="col-md-11">
        </div>
        <div class="col-md-1">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      
  </div>
</div>


</form>
</div>
</div>


<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/pages/datetimepicker-custom.js') ?>"></script>

<!--End row-->

<script>
    $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated

                // Used events
            });
        </script>
