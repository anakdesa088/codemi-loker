<div class="page-title-box">
    <h4 class="page-title">Ujian PMB</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li class="active">
            Ujian PMB
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<div class="row">
<div class="col-sm-6">
        <div class="white-box">
            <div class="header-title">Download</div>
            <div class="form-group">
                <label for="">Format Excel dan List Mahasiswa</label>
                <p><a href="<?php echo site_url('backend/pmb/ujian/download')?>" class="btn btn-sm btn-info">Download</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="white-box">
            <div class="header-title">Upload</div>
            <form action="<?php echo site_url('backend/pmb/ujian/upload')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Upload Excel yang telah dirubah dari format tadi</label>
                    <input type="file" name="excel_file" class="form-control">
                </div>
                <button type="submit" class="btn btn-sm btn-success">Upload</button>
            </form>
        </div>
    </div>
</div>