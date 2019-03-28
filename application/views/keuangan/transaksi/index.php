<div class="page-title-box">
    <h4 class="page-title">Transaksi</h4>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo site_url('backend/dashboard')?>">Dashboard</a>
        </li>
        <li class="active">
            Transaksi
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<div class="row">
<div class="col-sm-12">
    <div class="white-box">
        <div class="header-title">Tambah Data Transaksi</div>
        <form action="" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <select name="kode" id="" class="form-control">
                            <option value="pemasukan">Pemasukan</option>                        
                            <option value="pengeluaran">pengeluaran</option>                        
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select name="jenis" id="" class="form-control">
                            <option value="pemasukan">Pemasukan</option>                        
                            <option value="pengeluaran">pengeluaran</option>                        
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tanggal_transaksi">Tanggal</label>
                        <input type="date" name="tanggal_transaksi" class="form-control" value="<?php echo (new DateTimeImmutable())->format('Y-m-d')?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <select name="" id="" class="form-control">
                            <option value="">Tujuan Hidup adalah begitu</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>