

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

       <form method="post" action="<?php site_url('khs/filter_khs'); ?>" >
        <div class="col-md-4">
         
        </div>
        <div class="col-md-4">
            <div class="form-group">

                <select class="form-control" name="namasiswa">
                    <?php 
                    foreach ($mahasiswa as $r) {
                                                # code...

                        ?>
                        <option value="<?php echo $r->nim; ?>"><?php echo $r->nim; ?></option>
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
 <div class="col-md-12">
   <div class="white-box">
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
 
echo tgl_indo(date('Y-m-d')); 
 

?>
<table>
  <tr>
    <td>Nama</td>
    <td>&ensp;:&ensp;</td>
    <td>Saefudin Hardi</td>
  </tr>
  <tr>
    <td>Tempat, Tanggal Lahir</td>
    <td>&ensp;:&ensp;</td>
    <td>Cirebon, 20-Februari-2019</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>&ensp;:&ensp;</td>
    <td>Laki-laki</td>
  </tr>
  <tr>
    <td>Nomor Induk Mahasiswa</td>
    <td>&ensp;:&ensp;</td>
    <td>9393829</td>
  </tr>
  <tr>
    <td>Tingkat/ Semester</td>
    <td>&ensp;:&ensp;</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Tahun Akademik</td>
    <td>&ensp;:&ensp;</td>
    <td>2019/2010</td>
  </tr>
</table>


  <table class="table table-bordered" id="myTable" data-freezecolumns="2">
          <thead>
            <tr>
              <th style="margin-top: 10px;" rowspan="2"><center>No</center></th>
              <th rowspan="2"><center> Mata Kuliah</th></center>
              <th rowspan="2"><center>SKS</center> </th>
              <th colspan="2"><center>NILAI</center> </th>
              <th rowspan="2"><center> SKS x Nilai</center> </th>
              
            </tr>
            <tr>
              <th><center> Mutu </center></th>
              
              <th><center>Lambang</center> </th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>23</td>
              <td>06</td>
              
              <td>Malea</td>
              
            </tr>
             <tr>
              <td>1</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>23</td>
              <td>06</td>
              
              <td>Malea</td>
              
            </tr>
             <tr>
              <td>1</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>23</td>
              <td>06</td>
              
              <td>Malea</td>
              
            </tr>
           
          </tbody>
        </table>
      

</div>
</div>
</div>    