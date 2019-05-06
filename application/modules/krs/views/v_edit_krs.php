<div class="page-title-box">
    <h4 class="page-title">EDIT KRS</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">AKADEMIK</a>
        </li>
        <li>
            <a href="<?php echo site_url('krs'); ?>">DATA KRS</a>
        </li>
        <li class="active">
            EDIT KRS
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
     <h2 class="header-title">EDIT KRS</h2>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('krs/proses_edit_krs/'.$tampil->id_krs); ?>" class="form-horizontal">


<div class="form-group">
    <label class="col-md-2 control-label">Mata Kuliah</label>
    <div class="col-md-10">
      <select class="form-control" name="mapel">
          <?php foreach ($mapel as $r ) {
            # code...
           ?>
           <option value="<?php echo $tampil->id_mapel; ?>"><?php echo $tampil->nama_mapel; ?></option>
          <option value="<?php echo $r->id_mapel; ?>"><?php echo $r->nama_mapel; ?></option>
        <?php } ?>
      </select>
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">SKS</label>
    <div class="col-md-10">
      <input type="number" name="sks" value="<?php echo $tampil->sks; ?>" class="form-control">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Semester</label>
    <div class="col-md-10">
      <input type="text" class="form-control" value="<?php echo $tampil->nama_semester; ?>" name="semester">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Kelas</label>
    <div class="col-md-10">
      <select class="form-control" name="kelas">
          <?php foreach ($kelas as $r ) {
            # code...
           ?>
           <option value="<?php echo $tampil->id_kelas; ?>"><?php echo $tampil->nama_kelas; ?></option>
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
           <option value="<?php echo $tampil->id_dosen; ?>"><?php echo $tampil->nama_dosen; ?></option>
          <option value="<?php echo $r->id_dosen; ?>"><?php echo $r->nama_dosen; ?></option>
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
