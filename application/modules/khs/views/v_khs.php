
<div class="page-title-box">
  <h4 class="page-title">LIHAT KHS</h4>
  <ol class="breadcrumb">
    <li>
      <a href="#">AKADEMIK</a>
    </li>
    <li>
      <a href="#">DATA KHS</a>
    </li>

    <li class="active">
      LIHAT KHS
    </li>
  </ol>
  <div class="clearfix"></div>
</div>

<?php echo $this->session->flashdata('sukses'); ?>


<div id="messages"></div>
<!--Start row-->
<div class="row">
 <div class="col-md-12">
   <div class="white-box">
             <div class="col-md-4">
              </div>
              

             <div class="col-md-4">
          
          
             <div class="panel-group" id="accordion2">
                            
                            
                            <div class="panel panel-success  panel-color">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5">INPUT KHS</a>
                                </h4>
                              </div>
                              <div id="collapse5" class="panel-collapse collapse"><br>
                                <form action="<?php echo site_url('khs'); ?>" method="post">
                              <div class="form-group">
                                
                                <input class="form-control" name="nim"  placeholder="NIM" type="number"><br>
                              
                              
                                <center><button  type="submit" class="btn btn-primary">SUBMIT</button></center>
                              </div>
                              </form>
                              </div>
                            </div>
                            
                            <div class="panel panel-success  panel-color">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse6">LIHAT KHS</a>
                                </h4>
                              </div>
                              <div id="collapse6" class="panel-collapse collapse"><br>
                                <form action="<?php echo site_url('khs/data_khs'); ?>" method="post">
                              <div class="form-group">
                                
                                <input class="form-control" name="nim"  placeholder="NIM" type="number"><br>
                              
                              
                                <center><button  type="submit" class="btn btn-primary">SUBMIT</button></center>
                              
                              </div>
                              </form>
                              </div>
                            </div>
                          </div>  
                       </div> 
  
          
                    <!--/.col-lg-6-->
             
           
              <div class="col-md-4">
              </div>


</div></div></div>







  
<?php

if (empty($tampil && $mahasiswa)) {
  ?>



<?php
}else{
  ?>

<div class="row">
 <div class="col-md-12">
   <div class="white-box">
     <h2 class="header-title">Data KHS</h2>

    


  <div class="table-responsive">
    <table>
      <tr>
        <td>Nama</td>
        <td> : </td>
        <td><b><?php echo $mahasiswa->nama_lengkap; ?></b></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td> : </td>
        <td><?php echo $mahasiswa->tmpt_lahir.", ".$mahasiswa->tgl_lahir; ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Mahasiswa</td>
        <td> : </td>
        <td><?php echo $mahasiswa->nim; ?></td>
      </tr>
      <tr>
        <td>Tingkat/ Semester</td>
        <td> : </td>
        <td><?php echo $mahasiswa->id_semester; ?></td>
      </tr>
      <tr>
        <td>Tahun Akademik</td>
        <td> : </td>
        <td><?php echo $mahasiswa->id_semester; ?></td>
      </tr>
    </table>
  <table class="table table-bordered" id="myTable" data-freezecolumns="2">
    <thead>
            <tr>
              <th rowspan="2"><center>No</center></th>
              <th rowspan="2"><center> Mata Kuliah</th></center>
              <th rowspan="2"><center>SKS</center> </th>
              <th colspan="2"><center>NILAI</center> </th>
              <th rowspan="2"><center> SKS x Nilai</center> </th>
              
            </tr>
            <tr>
              <th><center> Mutu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></th>
              
              <th><center>Lambang</center> </th>
              
            </tr>
          </thead>
    <tbody>
      <form action="<?php echo site_url('khs/proses_tambah_khs'); ?>" method="post">
      <?php $no=1; foreach ($tampil as $r) {
        # code...
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <input type="hidden" value="<?php echo $mahasiswa->id_mahasiswa; ?>" name="data_mahasiswa[]">
        <td ><?php echo $r->nama_mapel; ?><input type="hidden" value="<?php echo $r->id_mapel; ?>" name="data_mapel[]"></td>
        <td width="120"><input type="number"  class="form-control" name="data_sks[]"></td>
        <td width="120"><input type="number"  class="form-control" name="data_nilai_mutu[]"></td>
        <td width="120"><input type="text" class="form-control" name="data_nilai_lambang[]"></td>
        <td width="120"><input type="number"  class="form-control" name="data_nilai_sks[]"></td>
        
      </tr>
    <?php } ?>

        

  </tbody>

</table>  

<input type="hidden" name="nim" value="<?php echo $mahasiswa->nim; ?>">


</div>
<div class="col-md-11"></div>
<div class="col-md-1"><button type="submit" class="btn btn-info">Simpan</button></form> </div>
</div>
</div>
</div>

  <?php
  
}


?>