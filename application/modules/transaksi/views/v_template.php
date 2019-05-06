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
     <CENTER><h4>BUKTI PEMBAYARAN</h4></CENTER>
     <br>
     <div class="row">
      <div class="yo" style="width: 100%">
        <h5 align="right"><?php echo $tampil->kode_transaksi; ?></h5>
          
      </div>



      <div class="amal" style="width: 100%">
      <table style="width: 45%; float: left;" >
       <tr>
                              <td>Nama Lengkap</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nama_lengkap; ?></td>
                            </tr>
                            <tr>
                              <td>NIM</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nim; ?></td>
                            </tr>
                            <?php $tanggal = $mahasiswa->tgl_lahir; $date = date_create($tanggal); $tgl = date_format($date,"d-m-Y"); ?>
                            <tr>
                              <td>Tempat, Tanggal Lahir</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->tmpt_lahir.', '.$tgl; ?></td>
                            </tr>
                            <tr>
                              <td>Alamat</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->alamat; ?></td>
                            </tr>
    </table>

    <table style="width: 10%; float: left;" >

    </table>
    <table style="width: 45%; float: left;" >
                            <tr>
                              <td>Kelas</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nama_kelas; ?></td>
                            </tr>
                            
                            <tr>
                              <td>Semester</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->nama_semester; ?></td>
                            </tr>
                            <tr>
                              <td>Tahun Ajaran</td>
                              <td>:</td>
                              <td><?php echo $mahasiswa->tahun_ajarancol; ?></td>
                            </tr>
                            
                          </table>
            </div>

    <br>
    <br>
    <br>
    <br><br>
    <br>
    



    <div class="table_krs">		
     <table class="table table-bordered" style="width:100%">
       
      <tr>
                                  <th>Jenis Pembayaran</th>
                                  <th>Jumlah </th>
                                  <th>Di Bayar</th>
                                  <th>HUtang</th>
                                  <th>Tanggal</th>
                                  <th>Keterangan</th>
      </tr>
      <tbody>
        
          
          <tr>
                                  <td><?php echo $tampil->nama_jp; ?></td>
                                  <td><?php echo $tampil->nominal; ?></td>
                                  <td><?php echo $tampil->nominal_bayar; ?></td>
                                  <td><?php echo $tampil->hutang; ?></td>
                                  <td><?php echo $tampil->tanggal_transaksi; ?></td>
                                  <td><?php echo $tampil->keterangan; ?></td>  
          </tr>
        
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


<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
  
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}




?>



</div>	
</div>
<br>

<div class="coba" style="width: 90%; font-family: serif;">
  <center><p style="width: 40%; float: left;"></p></center>
  <p style="width: 20%; float: left;"></p>
  <center><p style="width: 40%; float: left;">Cirebon, <?php echo tgl_indo(date('Y-m-d'));  ?></p></center>
  

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
    BENDAHARA
    <br>
    <br>
    <br>
    <br>
    <u>-----------------------------</u>
  </p></center>
</div>  



</body>
</html>