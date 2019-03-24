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
     <form method="post" enctype="multipart/form-data" action="<?php echo site_url('backend/mahasiswa/proses_coba'); ?>" class="form-horizontal">

         




<div class="form-group">
    <label class="col-md-2 control-label">Tempat, Tanggal Lahir</label>
    <div class="col-md-3">
      
  </div>
  <div class="col-md-4">
      <input type="text"  name="tgl_lahir" class="form-control default-date-picker-autoclose" >
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
    $('.default-date-picker-autoclose').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
    });
        </script>
