
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
              <th rowspan="2">Aksi</th>
              
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
        <td width="110">
          <a href="" class="btn btn-warning">Edit</a>
          <a href="<?php echo site_url('khs/hapus_khs/'.$r->id_khs.'-'.$mahasiswa->nim); ?>" class="btn btn-danger">Hapus</a>
        </td>
        
      </tr>
    <?php } ?>

        

  </tbody>

</table>  




</div>
<div class="col-md-11"></div>
<div class="col-md-1"><button type="submit" class="btn btn-info">Simpan</button></form> </div>
</div>
</div>
</div>

