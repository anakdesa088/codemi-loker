<div class="page-title-box">
    <h4 class="page-title">Mata Pelajaran</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li class="active">
            Mapel
        </li>
    </ol>
    <div class="clearfix"></div>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="white-box">
        <div class="header-title">
            Data Mata Pelajaran Yang Diujikan
            <!-- <a href="<?php echo site_url('backend/pmb/mapel/tambah')?>" class="pull-right btn btn-sm btn-success">Tambah</a> -->
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
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data AS $mapel): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mapel->tahun_ajarancol ?></td>
                        <td>
                            <?php if(is_null($mapel->mapel)): ?>
                                -
                            <?php else: ?>
                                <ul class="list-unstyled">
                                <?php foreach($mapel->mapel AS $mpl): ?>
                                    <li><?php printf("%s",$mpl->mapel_pmb_name); ?></li>
                                <?php endforeach;?>
                                </ul>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?php echo site_url('backend/pmb/mapel/edit/'.$mapel->id_tahun_ajaran) ?>" class="btn btn-sm btn-info">Edit</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>