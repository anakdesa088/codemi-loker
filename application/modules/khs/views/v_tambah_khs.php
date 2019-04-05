<div class="page-title-box">
    <h4 class="page-title">Tambah KHS</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Akademik</a>
        </li>
        <li>
            <a href="#">Data KHS</a>
        </li>
        <li class="active">
            Tambah KHS
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/jquery-multi-select/css/multi-select.css') ?>" />

<link href="<?php echo base_url('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/select2/css/select2.css') ?>" />
<?php echo $this->session->flashdata('gagal'); ?>
<div class="row">
 <div class="col-md-12">
   <div class="white-box">
     <h2 class="header-title">Tambah KHS</h2>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('khs/proses_tambah_khs'); ?>" class="form-horizontal">


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
    <label class="col-md-2 control-label">Nilai Mutu</label>
    <div class="col-md-10">
      <input type="number" class="form-control" name="nilai_mutu">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nilai Lambang</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="nilai_lambang">
  </div>
</div>
<div class="form-group">
    <label class="col-md-2 control-label">Nilai SKS</label>
    <div class="col-md-10">
      <input type="number" class="form-control" name="nilai_sks">
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
