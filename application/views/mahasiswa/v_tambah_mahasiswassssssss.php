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

<div class="row">
 <div class="col-md-12">
   <div class="white-box">
     <h2 class="header-title">Basic Forms</h2>
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('backend/mahasiswa/proses_tambah_mahasiswa'); ?>" class="form-horizontal">

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
    <label class="col-md-2 control-label">Foto Mahasiswa</label>
    <div class="col-md-4">
      <input type="file" name="foto_diri" id="input-file-now" class="dropify" />
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
