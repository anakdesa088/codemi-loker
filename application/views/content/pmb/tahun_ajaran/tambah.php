<div class="page-title-box">
    <h4 class="page-title">Tahun Ajaran</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li>
            Tahun Ajaran
        </li>
        <li class="active">
            Tambah
        </li>
    </ol>
    <div class="clearfix"></div>
</div>

<div class="row">
    <div class="col-sm-12">
    <div class="white-box">
        <div class="header-title">
            Tambah Tahun Ajaran
        </div>
        <form action="<?php echo site_url('backend/pmb/tahun_ajaran/simpan')?>" method="post" role="form">
            <div class="form-group">
                <label for="tahun_ajaran">Tahun Ajaran <sup><i>(Format: tahun/tahun)</i></sup></label>
                <input type="text" name="tahun_ajaran" class="form-control" required>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>