<div class="page-title-box ">
    <h4 class="page-title">Form</h5>
    <ol class="breadcrumb">
        <li> <a href="index.html">Dashboard</a> </li>
        <li> <a href="#">Forms </a> </li>
        <li class="active">Form Basic </li>
    </ol>
    <div class="clearfix"></div>
</div>
<!--End Page Title-->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="col-sm-3">
            <ul class="nav">
                <li role="presentation"><a href="#data_diri" data-toggle="tab">Data Diri</a></li>
                <li role="presentation"><a href="#ortu" data-toggle="tab">Ortu & Pend.</a></li>
                <li role="presentation"><a href="#bukti" data-toggle="tab">Bukti</a></li>
            </ul>
            </div>
            <div class="col-sm-9">
                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="data_diri">
                        <h3 class="text-right">Data Diri</h3>
                        <div class="row">
                            <div class="col-sm-4">
                            <!-- <div class="box"> -->
                                <img class="img-responsive img-circle" style="width:200px;height:200px;" src="<?php echo base_url('uploads/'.$tampil->foto_diri) ?>">
                            <!-- </div> -->
                            </div>
                            <div class="col-sm-8">
                                <p>Nama Lengkap</p>
                                <h5>
                                    <?php echo $tampil->nama_lengkap ?>
                                </h5>
                                <p>Tempat, Tanggal Lahir</p>
                                <h5>
                                    <?php echo $tampil->tmpt_lahir.', '.(new DateTimeImmutable($tampil->tgl_lahir))->format('d-m-Y') ?>
                                </h5>
                                <p>Jenis Kelamin</p>
                                <h5>
                                    <?php echo $tampil->jk==='L'?'Laki-laki':'Perempuan' ?>
                                </h5>
                                <p>Kewarganegaraan</p>
                                <h5>
                                    <?php echo $tampil->kewarganegaraan ?>
                                </h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Email</p>
                                <h5><?php echo $tampil->email ?></h5>
                            </div>
                            <div class="col-sm-4">
                                <p>Kontak</p>
                                <h5>
                                    <?php 
                                        $arr_no_hp = array_filter([$tampil->no_hp1,$tampil->no_hp2]);
                                        echo implode(' - ', $arr_no_hp);
                                    ?>
                                </h5>
                            </div>
                            <div class="col-sm-4">
                                <p>Tinggi & Berat Badan</p>
                                <h5>
                                    <?php echo sprintf("%s cm - %s Kg",$tampil->tinggi_badan,$tampil->berat_badan); ?>
                                </h5>
                            </div>
                            <div class="col-sm-12">
                                <p>Alamat</p>
                                <h5>
                                    <?php echo sprintf("%s - %s",$tampil->alamat,$tampil->kode_pos); ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="ortu">
                        <h3 class="text-right">Orang Tua & Pendidikan</h3>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Nama Ayah</p>
                                <h5><?php echo $tampil->nama_ayah ?></h5>
                            </div>
                            <div class="col-sm-4">
                                <p>Nama Ibu</p>
                                <h5><?php echo $tampil->nama_ibu ?></h5>
                            </div>
                            <div class="col-sm-4">
                                <p>Sumber Informasi</p>
                                <h5><?php echo ucwords($tampil->info_dari) ?></h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Nama Asal Sekolah</p>
                                <h5><?php echo $tampil->nama_asal_sekolah ?></h5>
                            </div>
                            <div class="col-sm-6">
                                <p>Alamat Asal Sekolah</p>
                                <h5><?php echo $tampil->alamat_asal_sekolah ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bukti">
                        <h3 class="text-right">Bukti-bukti</h3>
                        <div class="row">
                        <div class="col-sm-6">
                                <h5>Foto Keterangan Sehat</h5>
                                <img class="img-responsive img-rounded" src="<?php echo base_url('uploads/'.$tampil->foto_kesehatan) ?>">
                            </div>
                            <div class="col-sm-6">
                                <h5>Foto Ijazah</h5>
                                <img class="img-responsive img-rounded" src="<?php echo base_url('uploads/'.$tampil->foto_ijazah) ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End row-->
<script>
$(document).ready(function () {
    $width = $(".box img").css('width');
    $height = $(".box img").css('height');
    $max = (($width < $height) ? $width : $height);

    $(".box").css("width", $max);
    $(".box").css("height", $max);
})
</script>
