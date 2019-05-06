
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

<?php $this->session->flashdata('sukses'); ?>


<div id="messages"></div>
<!--Start row-->










<div class="row">
 <div class="col-md-12">
   <div class="white-box">
    <div class="row">
     <div class="col-md-11">
     </div>
     <div class="col-ms-1">
        <a href="" class="btn btn-success"><i class="fa fa-print"></i> CETAK</a>
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
        <td>Nomor Induk 
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><?php echo $mahasiswa->nim; ?></td>
      </tr>
      <tr>
        <td>Tingkat/ Semester</td>
        <td >&nbsp; :&nbsp;&nbsp; </td>
        <td><?php echo $mahasiswa->nama_kelas." / ".$mahasiswa->nama_semester; ?></td>
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

      
      <?php $no = 1; foreach ($tampil as $r): ?>
        
      
      <tr>
        <td width="7"><?php echo $no++; ?></td>
        <td width="120" align="center"><?php echo $r->nama_mapel; ?></td>
        <td width="120" align="center"><?php echo $r->sks; ?></td>
        <td width="120" align="center"><?php echo $r->jumlah; ?></td>
        <td width="120" align="center"><?php echo $r->hm; ?></td>
        <td width="120" align="center"><?php echo $r->am; ?></td>
        
        
      </tr>
    <?php endforeach ?>

        

  </tbody>

</table>  




</div>
<div class="col-md-11"></div>

</div>
</div>
</div>

