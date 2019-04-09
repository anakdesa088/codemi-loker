<div class="page-title-box">
    <h4 class="page-title">Cetak KRS</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Akademik</a>
        </li>
        <li>
            <a href="#">KRS</a>
        </li>
        <li class="active">
            Cetak KRS
        </li>
    </ol>
    <div class="clearfix"></div>
</div>

<div class="row">
   <div class="col-md-12">
     <div class="white-box">
       <h2 class="header-title">Data KHS</h2>

       <form method="post" action="<?php site_url('krs/filter_krs'); ?>" >
        <div class="col-md-4">
            <div class="form-group">

                <select class="form-control" name="kelas">
                    <?php 
                    foreach ($kelas as $r) {
                                                # code...

                        ?>
                        <option value="<?php echo $r['id_kelas']; ?>"><?php echo $r['nama_kelas']; ?> </option>
                    <?php } ?>



                </select>

            </div>
        </div>



        <div class="col-md-4">
            <div class="form-group">

                <button type="submit" class="btn btn-primary "><i class="fa fa-search"></i></button>
            </div>
        </div>


    </form>

</div>
</div>
</div>     


    

<div class="row">
     <!-- Start  Bordered  Table-->
     <div class="col-md-12">
       <div class="white-box">
        <h2 class="header-title"> KRS Semester </h2>


        <div class="row">

            <div class="col-md-11">
                <button onclick="kembali()" class="btn btn-warning">Kembali</button>
            </div>
            <div class="col-ms-1">
                <a href="<?php echo site_url('krs/cetak/'); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
            </div>

        </div>
        <br>

        <div class="table-wrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Sks</th>
                        <th>Semester</th>
                        <th>Kelas</th>
                        <th>Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($filter as $r) {
                                            # code...
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $r['nama_mapel']; ?></td>
                            <td><?php echo $r['sks']; ?></td>
                            <td><?php echo $r['semester']; ?></td>
                            <td><?php echo $r['nama_kelas']; ?></td>
                            <td><?php echo $r['nama_lengkap']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>
</div>





