<div class="page-title-box">
    <h4 class="page-title">Tahun Ajaran</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li class="active">
            Tahun Ajaran
        </li>
    </ol>
    <div class="clearfix"></div>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="white-box">
        <div class="header-title">
            Data Tahun Ajaran
            <a href="<?php echo site_url('backend/pmb/tahun_ajaran/tambah')?>" class="pull-right btn btn-sm btn-success">Tambah</a>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="table-responsive">
        <?php echo $this->session->flashdata('hapus'); ?>
        <table class="display table" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tahun Ajaran</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data AS $tahun_ajaran): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tahun_ajaran->tahun_ajarancol ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('backend/pmb/mapel/edit/'.$tahun_ajaran->id_tahun_ajaran) ?>" class="btn btn-sm btn-success">Set Mapel Ujian</a>
                            <a href="<?php echo site_url('backend/pmb/tahun_ajaran/edit/'.$tahun_ajaran->id_tahun_ajaran) ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="<?php echo site_url('backend/pmb/tahun_ajaran/hapus/'.$tahun_ajaran->id_tahun_ajaran) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>