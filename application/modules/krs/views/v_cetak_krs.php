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
       <h2 class="header-title">Data KRS</h2>

       <form method="post" action="<?php echo site_url('krs/filter'); ?>">
        <div class="col-md-4">
            <div class="form-group">

                

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">

                <input type="number" name="nim" class="form-control" placeholder="NIM">

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
                <a href="<?php echo site_url('krs/proses_cetak/'.$info->nim); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
            </div>

        </div>
        <br>

        <div class="table-wrap">
          

        <table>
          <tr>
            <td>Nama</td>
            <td width="5">:</td>
            <td><?php echo $info->nama_lengkap; ?></td>
          </tr>
          <tr>
            <td>NIM</td>
            <td width="5">:</td>
            <td><?php echo $info->nim; ?></td>
          </tr>
          <tr>
            <td>Dosen Wali</td>
            <td width="5">:</td>
            <td><?php echo $info->nama_dosen; ?></td>
          </tr>
          <tr>
            <td>Tingkat/ Semester</td>
            <td width="5">:</td>
            <td><?php echo $info->nama_kelas. "/" .$info->nama_semester; ?></td>
          </tr>
          <tr>
            <td>Tahun Akademik</td>
            <td width="5">:</td>
            <td><?php echo $info->tahun_ajarancol; ?></td>
          </tr>
          
        </table>
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
                  <?php $no = 1; foreach ($tampil as $r) {
                    # code...
                  ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $r->nama_mapel; ?></td>
                        <td><?php echo $r->sks; ?></td>
                        <td><?php echo $r->nama_semester; ?></td>
                        <td><?php echo $r->nama_kelas; ?></td>
                        <td><?php echo $r->nama_dosen; ?></td>
                        

                        
                    </tr>
                  <?php } ?>
                </tbody>
            </table>


        </div>
    </div>


</div>





