<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	    body{
      margin: 0;
      padding: 0;
      background-color: white;
      
      font-size: 12px;
    }
    .alamat{
      font-family: serif;
    }
    h2{
      font-size: 20px;
    }
    p{
      line-height: 1.3
    }
    p,h2,h3,th,td{
      margin: 0;
      font-family: serif;
    }
    
    .rows{
      width: 90%;
      margin: 0 auto;
    }
    .rows{
      width: 94%;
      margin: 0 auto;
    }
    .info{
    	width: 90%;
    	margin: 0 auto;
    }
    header{
      font-family: serif;
      width: 100%;
      float: left;
      position: relative;
      padding : 15px 0;
      border-bottom: 10px solid blue;
    }
    .logo{
      width: 12%;
      position: absolute;
      left: 10;
      top: 50;
    } .logo img{
      max-width: 100%;
    }
    .judul{
      position: relative;
      font-family: serif;
    }
    .judul p, .judul h2, .judul h3{
      text-align: center;
    }
    .batas{
    	height: 160px;
    }
    .bungkus{
    	width: 100%;
    }
    .kiri{
    	width: 40%;
    	
    }
    .kanan{
    	width: 40%;
    	float: left;
    }
    .tengah{
    	width: 20%;
    	float: left;
    }
    
  

</style>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
 
      <div class="rows">
        <header>
          <div class="logo">
            <img src="assets/images/logo_akper.png" width="175">
          </div>
          <div class="judul">
            <center><h4 style="font-size: 16px;">AKADEMI KEPERAWATAN BUNTET PESANTREN CIREBON</h4></center>
            <h3>( AKPER BPC )</h3>
            <p>UIN MENDIKNAS RI NOMOR 47/D/0/2005</p>
            <p>AKREDITASI LAM-PTKes No.0228/LAM-PTKes/Akr/Dip/IV/2017</p>
            <p class="alamat" style="font-size: 12px;">Jl. Buntet Pesantren Astanajapura PO BOX 251/CN CIREBON 45102 Telp. (0231) 635747 - 636985</p>
          </div>


</header>

</div>
<div class="rows batas">
	
</div><br>
<div class="rows">
<div class="tabel">
	<CENTER><h4>KARTU RENCANA STUDI</h4></CENTER>
	<br>
	<div class="row">
		<table>
			<tr>
				<td>Nama </td>
				<td> :</td>
				<td> <?php echo $mahasiswa->nama_lengkap; ?></td>
				
			</tr>
			<tr>
				<td> NIM</td>
				<td> :</td>
				<td> <?php echo $mahasiswa->nim; ?></td>
				
			</tr>
			<tr>
				<td> Dosen Wali</td>
				<td> :</td>
				<td> <?php echo $mahasiswa->nama_dosen; ?></td>
				
			</tr>
			<tr>
				<td> Tingkat/ Semester</td>
				<td> :</td>
				<td> <?php echo $mahasiswa->nama_kelas." / ".$mahasiswa->nama_semester; ?></td>
			</tr>
			<tr>
				<td> Tahun Akademik</td>
				<td> :</td>
				<td> <?php echo $mahasiswa->tahun_ajarancol; ?></td>
			</tr>
		</table>
		<br>
		<br>



<div class="table_krs">		
 <table class="table table-bordered" style="width:100%">
 
  <tr>
    <th>No</th>
    <th>Matah Kuliah</th>
    <th>SKS</th>
    <th>Semester</th>
    <th>Kelas</th>
    <th>Dosen</th>
  </tr>
  <tbody>
    <?php
    $no = 1;
    foreach ($tampil as $r) {
      # code...
    
      ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $r->nama_mapel; ?></td>
    <td><?php echo $r->sks; ?></td>
    <td><?php echo $r->semester; ?></td>
    <td><?php echo $r->nama_kelas; ?></td>
    <td><?php echo $r->nama_mapel; ?></td>
  </tr>
<?php } ?>
</tbody>
</table>

<br>






</div>




	</div>

<div class="rows">
  <div style="width: 100%">
    <div style="width: 40%; float: left;">
      
    </div>
    <div style="width: 20%; float: left;">
      
    </div>
    <div style="width: 40%; float: left;">
      <cemter><p></p></cemter>
    </div>

  </div>


</div>    
<br>



  

</div>    






</div>	
</div>
<br>

<div class="coba" style="width: 90%; font-family: serif;">
  <center><p style="width: 40%; float: left;"></p></center>
  <p style="width: 20%; float: left;"></p>
  <center><p style="width: 40%; float: left;">Cirebon, 04 Februari 2019</p></center>
  

</div>  

<br>
<div class="coba" style="width: 90%; font-family: serif;">
  <center><p style="width: 40%; float: left;">Mahasiswa<br>
    <br>
    <br>
    <br>
    <br>
    <u>-----------------------------</u>
  </p></center>
  <p style="width: 20%; float: left;"></p>
  <center><p style="width: 40%; float: left;">Mengetahui dan Menyetujui<br>
    Dosen Wali
    <br>
    <br>
    <br>
    <br>
    <u>-----------------------------</u>
  </p></center>
</div>  



</body>
</html>