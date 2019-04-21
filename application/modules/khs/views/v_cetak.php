
<div class="page-title-box">
  <h4 class="page-title">Data KHS</h4>
  <ol class="breadcrumb">
    <li>
      <a href="#">Akademik</a>
    </li>

    <li class="active">
      Data KHS
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
    <br>
              <div class="col-md-4">

              </div>
              <div class="col-md-4">

              

                                  
             <form action="<?php echo site_url('khs/cetak_khs'); ?>" class="form-horizontal" method="post">
                              <div class="form-group">
                                <label class="col-md-2 control-label">NIM</label>
                                <div class="col-md-8">
                                      <input class="form-control" name="nim"  type="number">
                                  </div>
                                <div class="col-md-2">
                                  <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                              </div>
            </form>
          </div>
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
    <div class="row">
     <div class="col-md-11">
     </div>
     <div class="col-ms-1">
        <a href="<?php echo site_url('khs/proses_cetak_khs/'.$mahasiswa->nim); ?>" class="btn btn-success"><i class="fa fa-print"></i> CETAK</a>
     </div>
   </div>

    


  <div class="table-responsive">
    <table>
      <tr>
        <td>Nama</td>
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><b><?php echo $mahasiswa->nama_lengkap; ?></b></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><?php echo $mahasiswa->tmpt_lahir.", ".$mahasiswa->tgl_lahir; ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Mahasiswa</td>
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><?php echo $mahasiswa->nim; ?></td>
      </tr>
      <tr>
        <td>Tingkat/ Semester</td>
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><?php echo $mahasiswa->nama_semester; ?></td>
      </tr>
      <tr>
        <td>Tahun Akademik</td>
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><?php echo $mahasiswa->tahun_ajarancol; ?></td>
      </tr>
    </table>
    <br>
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
        <td width="7"><?php echo $no++; ?></td>
        <td width="120" align="center"><?php echo $r->nama_mapel; ?></td>
        <td width="120" align="center"><?php echo $r->sks; ?></td>
        <td width="120" align="center"><?php echo $r->nilai_mutu; ?></td>
        <td width="120" align="center"><?php echo $r->nilai_lambang; ?></td>
        <td width="120" align="center"><?php echo $r->nilai_sks; ?></td>
        
        
      </tr>
    <?php } ?>

        

  </tbody>

</table>  




</div>
<div class="col-md-11"></div>

</div>
</div>
</div>

  <?php
}

?>