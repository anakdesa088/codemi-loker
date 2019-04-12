<div class="page-title-box">
    <h4 class="page-title">Tambah Dosen</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Akademik</a>
        </li>
        <li>
            <a href="#">Data Dosen</a>
        </li>
        <li class="active">
            Tambah Dosen
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-multi-select/css/multi-select.css') ?>" />

<link href="<?php echo base_url('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/css/select2.css') ?>" />
<link href="<?php echo base_url('assets/dropify/css/dropify.css') ?>" rel="stylesheet" type="text/css" />
<div class="row">
 <div class="col-md-12">
   <div class="white-box">
     <h2 class="header-title">Tambah Dosen</h2>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('dosen/proses_tambah_dosen'); ?>" class="form-horizontal">


<div class="form-group">
    <label class="col-md-2 control-label">Nama Lengkap</label>
    <div class="col-md-10">
      <input class="form-control" name="nama_lengkap"  type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Jenis Kelamin</label>
    <div class="col-md-10">
      <div class="radio">
          <input type="radio" name="jk" value="1" id="radio-1">
          <label for="radio-1">Laki-laki</label>
      </div>
      <div class="radio">
          <input type="radio" value="2" name="jk" id="radio-2">
          <label for="radio-1">Perempuan</label>
      </div>

  </div>
</div>                                                        

<div class="form-group">
    <label class="col-md-2 control-label">Tempat, Tanggal Lahir</label>
    <div class="col-md-3">
      <input class="form-control" name="tmpt_lahir"  type="text"> 
  </div>
  <div class="col-md-2">
      <input type="text"  name="tgl_lahir" class="form-control default-date-picker-autoclose" >
  </div>
</div>





<div class="form-group">
    <label class="col-md-2 control-label">Alamat</label>
    <div class="col-md-10">
      <textarea class="form-control" name="alamat" rows="5"></textarea>
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Foto Dosen</label>
    <div class="col-md-4">
      <input type="file" name="foto_dosen" id="input-file-now" class="dropify" />
  </div>
</div>





<div class="form-group">
    <label class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
      <input type="email" name="email" class="form-control">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
      <input type="password" name="password" class="form-control">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Tahun Masuk</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="tahun_masuk">
  </div>
</div>
<div class="form-group">  
  <div class="col-md-12">
    <div class="col-md-10">
    </div>
    <div class="col-ms-3">

        <a href="javascript:history.back()" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>

</div>
</div>


</form>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/pages/datetimepicker-custom.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dropify/js/dropify.js') ?>"></script>  
<!--End row-->

<script>
    $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated

                // Used events
            });
    $('.default-date-picker-autoclose').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
</script>
