<div class="page-title-box">
    <h4 class="page-title">Data Kode Transaksi</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('dashboard');?>">Dashboard</a>
        </li>
        <li>
            <a href="#">Keuangan</a>
        </li>
        <li>
            <a href="<?php echo site_url('keuangan/kode_transaksi')?>">Kode Transaksi</a>
        </li>
        <li class="active">
            Edit Data
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
     <h2 class="header-title">Edit Kode Transaksi</h2>
     <form method="post" action="<?php echo site_url('keuangan/kode_transaksi/update/'.$entity->id_kode_transaksi); ?>" class="form-horizontal">
    
         <div class="form-group">
            <label class="col-md-2 control-label">Kode Transaksi</label>
            <div class="col-md-10">
                <input class="form-control" name="kode" value="<?php echo $entity->kode_transaksi;?>" type="text" disabled>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Nama Transaksi</label>
            <div class="col-md-10">
                <input class="form-control" name="nama" value="<?php echo $entity->nama_transaksi;?>" type="text" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Tujuan Transaksi</label>
            <div class="col-md-10">
                <div class="radio">
                    <input type="radio" name="tujuan" value="mhs" id="radio-1" <?php echo ($entity->tujuan_transaksi === 'mhs')?'checked':''?>>
                    <label for="radio-1">Mahasiswa</label>
                </div>
                <div class="radio">
                    <input type="radio" name="tujuan" value="dosen" id="radio-2" <?php echo ($entity->tujuan_transaksi === 'dosen')?'checked':''?>>
                    <label for="radio-2">Dosen</label>
                </div>
            </div>
        </div>                                                        

        <div class="form-group">
            <label class="col-md-2 control-label">Jumlah</label>
            <div class="col-md-10">
                <input class="form-control" name="jumlah"  type="text" value="<?php echo $entity->jumlah_transaksi;?>" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Deskripsi</label>
            <div class="col-md-10">
                <textarea class="form-control" name="deskripsi" rows="5"><?php echo $entity->deskripsi_transaksi;?></textarea>
            </div>
        </div>
        <div class="form-group">  
            <div class="col-md-12">
                <div class="col-md-10"></div>
                <div class="col-ms-3">
                    <a href="javascript:history.back()" class="btn btn-warning">Kembali</a>
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
