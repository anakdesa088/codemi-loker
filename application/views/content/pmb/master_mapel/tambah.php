<div class="page-title-box">
    <h4 class="page-title">Master Mata Pelajaran</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo site_url('backend/pmb/master_mapel')?>">Master Mata Pelajaran</a>
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
            Tambah Master Mata Pelajaran
        </div>
        <form action="<?php echo site_url('backend/pmb/master_mapel/simpan')?>" method="post" role="form">
        <div class="form-group">
                <label for="code">Kode Mata Pelajaran</label>
                <input type="text" name="code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Nama Mata Pelajaran</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-sm btn-success">Simpan</button>
            </div>
        </form>
    </div>
    </div>
</div>