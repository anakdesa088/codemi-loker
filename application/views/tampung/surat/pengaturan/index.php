<div class="page-title-box">
<div class="page-title">Pengaturan Surat</div>
<ol class="breadcrumb">
    <li>
        <a href="<?php echo site_url('backend/dahsboard') ?>">Dashboard</a>
    </li>
    <li class="active">
        Pengaturan Surat
    </li>
</ol>
<div class="clearfix"></div>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="white-box">
    <div class="">
        <a href="<?php echo site_url('backend/surat/pengaturan/tambah') ?>" class="btn btn-sm btn-success">Tambah Format Surat</a>
    </div>
    <br>
    <div class="table-responsive">
        <table id="example" class="display table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Surat</th>
                    <th>Kode</th>
                    <th>URL</th>
                    <th>Lampiran</th>
                    <th>Template Surat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($list_pengaturan) > 0): ?>
                    <?php foreach($list_pengaturan AS $pengaturan): ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo ucwords($pengaturan->nama_surat)?></td>
                        <td><?php echo $pengaturan->kode_surat?></td>
                        <td><?php echo $pengaturan->url_surat?></td>
                        <td><?php echo $pengaturan->lampiran?></td>
                        <td><?php echo $pengaturan->template_surat?></td>
                        <td>
                            <ul>
                                <li>Edit</li>
                                <li>Hapus</li>
                            </ul>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>Data Kosong</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>