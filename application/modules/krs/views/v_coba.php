<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      font-size: 12px;
    }
    .alamat{
      font-family: serif;
    }
    h1{
      font-size: 20px;
    }
    p{
      line-height: 1.3
    }
    p,h1,h2{
      margin: 0
    }
    .wrapper{
      width: 100%;
      float: left;
    }
    .rows{
      width: 90%;
      margin: 0 auto;
    }
    header{
      width: 100%;
      float: left;
      position: relative;
      padding : 25px 0;
      border-bottom: 10px solid blue;
    }
    .logo{
      width: 9%;
      position: absolute;
      left: 20;
      top: 20;
    } .logo img{
      max-width: 100%;
    }
    .judul{
      position: relative;
    }
    .judul p, .judul h1, .judul h2{
      text-align: center;
    }
    .wrap_opsi_data{
      width: 100%;
      float: left;
    }
    .wrap_opsi_data h1{
      text-align: center;
    }
    .wrap_opsi_data p{
      width: 100%;
      float: left;
    }
    .wrap_opsi_data label{
      width: 20%;
      float: left;
    }
    .wrap_table{
      width: 100%;
      float: left;
    }
    table{
      width: 100%;
      border-collapse: collapse;

    }
    table, th, td{
      border: 1px solid #000;
    }
    thead tr td{
      padding: 5px;
      text-align: center;
      font-weight: bold;
    }
    tbody tr td{
      padding: 3px;
      text-align: center;
    }
    .table_left{
      text-align: left;
    }
    header, .wrap_opsi_data, .wrap_table{
      margin-bottom: 20px;
    }
    .footer{
      width: 100%;
      float: left;
    }
    .kiri{
      width: 30%;
      float: left;
    } .kiri p, .kanan p{
      text-align: center;
    }
    .kanan{
      width: 30%;
      float: right;
    }

    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="rows">
        <header>
          <div class="logo">
            <img src="<?php echo base_url('assets/images/logo_akper.png'); ?>">
          </div>
          <div class="judul">
            <h2>AKADEMI KEPERAWATAN BUNTET PESANTREN CIREBON</h2>
            <h1>( AKPER BPC )</h1>
            <p>UIN MENDIKNAS RI NOMOR 47/D/0/2005</p>
            <p>AKREDITASI LAM-PTKes No.0228/LAM-PTKes/Akr/Dip/IV/2017</p>
            <p class="alamat">Jl. Buntet Pesantren Astanajapura PO BOX 251/CN CIREBON 45102 Telp. (0231) 635747 - 636985</p>
          </div>
        </header>
        <div class="wrap_opsi_data">
          <h1 class="krs">KARTU RENCANA STUDI</h1>
          <p><label>Nama</label><span>:</span></p>
          <p><label>NIM</label><span>:</span></p>
          <p><label>Dosen Wali</label><span>:</span></p>
          <p><label>Tingkat/ Semester</label><span>:</span></p>
          <p><label>Tahun Akademik</label><span>: III / V</span></p>
        </div>
        <div class="wrap_table">
          <table>
            <thead>
              <tr>
                <td>No</td>
                <td>Mata Kuliah</td>
                <td>SKS</td>
                <td>Semester</td>
                <td>Kelas</td>
                <td>Deosen</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class="table_left">Keperawatan Medikal Bedah II</td>
                <td>3</td>
                <td>V</td>
                <td></td>
                <td class="table_left">Tim Dosen</td>
              </tr>
              <tr>
                <td>2</td>
                <td class="t
                able_left">Keperawatan Keluarga</td>
                <td>3</td>
                <td>V</td>
                <td></td>
                <td class="table_left">Tim Dosen</td>
              </tr>
            </tbody>
          </table>
        </div>
        <footer>
          <div class="kiri">
            <p>Mahasiswa</p>
          </div>
          <div class="kanan">
            <p><span>Cirebon,</span>2019</p>
            <p>Mengetahui dan Menyetujui</p>
            <p>Dosen Wali</p>
          </div>
        </footer>
      </div>
    </div>
  </body>
</html>
