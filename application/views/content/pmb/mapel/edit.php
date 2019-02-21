<div class="page-title-box">
    <h4 class="page-title">Mata Pelajaran</h4>
    <ol class="breadcrumb">
    <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo site_url('backend/pmb/mapel')?>">Mapel</a>
        </li>
        <li class="active">
            Edit
        </li>
    </ol>
    <div class="clearfix"></div>
</div>

<div class="row">
<div class="col-sm-6">
    <div class="white-box">
        <div class="header-title">Tambah Mata Pelajaran</div>
        <form action="" method="post" role="form">
            <div class="form-group">
                <label for="">Mapel</label>
                <select name="mapel" class="form-control">
                    <option value="">Pilih Mapel</option>
                    <?php foreach($list_mapel AS $matpel):?>
                        <option value="<?php echo $matpel->id_mapel_pmb?>"><?php printf("%s - %s",$matpel->mapel_pmb_code,$matpel->mapel_pmb_name)?></option>                    
                    <?php endforeach;?>
                </select>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-sm btn-success">Simpan</button>            
            </div>
        </form>
    </div>
</div>
<div class="col-sm-6">
    <div class="white-box">
        <div class="header-title">List Mata Pelajaran</div>
        <div class="table-responsive">
            <?php echo $this->session->flashdata('hapus'); ?>
            <table class="display table" id="example">
                <thead>
                    <tr>
                        <th>Kode Mapel</th>
                        <th>Nama Mapel</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!is_null($data[0]->mapel)): ?>
                        <?php foreach($data[0]->mapel AS $mapel): ?>
                        <tr>
                            <td><?php echo $mapel->mapel_pmb_code?></td>
                            <td><?php echo $mapel->mapel_pmb_name?></td>
                            <td><a href="" class="btn btn-sm btn-danger">Hapus</a></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan='3' class="text-center">Kosong</td>
                            <!-- Hacking datatable error on colspan -->
                            <td class="text-center" style="display: none;"></td>
                            <td class="text-center" style="display: none;"></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>