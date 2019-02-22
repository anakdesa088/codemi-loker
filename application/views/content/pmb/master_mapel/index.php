<div class="page-title-box">
    <h4 class="page-title">Master Mata Pelajaran</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li class="active">
            Master Mata Pelajaran
        </li>
    </ol>
    <div class="clearfix"></div>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="white-box">
        <div class="header-title">
            Data Master Mata Pelajaran
            <a href="<?php echo site_url('backend/pmb/master_mapel/tambah')?>" class="pull-right btn btn-sm btn-success">Tambah</a>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="table-responsive">
        <?php echo $this->session->flashdata('hapus'); ?>
        <table class="display table" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Mata Pelajaran</th>
                    <th>Nama Mata Pelajaran</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data AS $master_mapel): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $master_mapel->mapel_pmb_code ?></td>
                        <td><?php echo $master_mapel->mapel_pmb_name ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('backend/pmb/master_mapel/edit/'.$master_mapel->id_mapel_pmb) ?>" class="btn btn-sm btn-info">Edit</a>
                            <a href="<?php echo site_url('backend/pmb/master_mapel/hapus/'.$master_mapel->id_mapel_pmb) ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>