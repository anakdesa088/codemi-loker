<div class="page-title-box">
    <h4 class="page-title">Tambah Krs</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Akademik</a>
        </li>
        <li>
            <a href="#">Data Krs</a>
        </li>
        <li class="active">
            Tambah Krs
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
     <h2 class="header-title">Tambah Krs</h2>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('krs/proses_tambah_krs'); ?>" class="form-horizontal">


<div class="form-group">
    <label class="col-md-2 control-label">Mata Kuliah</label>
    <div class="col-md-10">
      <select class="form-control" name="mapel">
          <?php foreach ($mapel as $r ) {
            # code...
           ?>
          <option value="<?php echo $r->id_mapel; ?>"><?php echo $r->nama_mapel; ?></option>
        <?php } ?>
      </select>
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">SKS</label>
    <div class="col-md-10">
      <input type="number" name="sks" class="form-control">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Semester</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="semester">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Kelas</label>
    <div class="col-md-10">
      <select class="form-control" name="kelas">
          <?php foreach ($kelas as $r ) {
            # code...
           ?>
          <option value="<?php echo $r->id_kelas; ?>"><?php echo $r->nama_kelas; ?></option>
        <?php } ?>
      </select>
  </div>
</div>

<div class="form-group">
    <label class="col-md-2 control-label">Dosen</label>
    <div class="col-md-10">
      <select class="form-control" name="dosen">
          <?php foreach ($dosen as $r ) {
            # code...
           ?>
          <option value="<?php echo $r->id_dosen; ?>"><?php echo $r->nama_lengkap; ?></option>
        <?php } ?>
      </select>
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
