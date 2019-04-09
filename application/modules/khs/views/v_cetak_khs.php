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

<div class="table-responsive">
   <table id="example" class="display table">
    <thead>
      <tr>
        <th>No</th>
        <th>Mata Kuliah</th>
        <th>Sks</th>
        <th>Nilai Mutu</th>
        <th>Lambang Nilai </th>
        <th>Nilai Sks</th>
        <th><center>Aksi</center></th>
      </tr>
    </thead>
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
        <td><?php echo $r->nilai_mutu; ?></td>
        <td><?php echo $r->nilai_lambang; ?></td>
        <td><?php echo $r->nilai_sks; ?></td>
        <?php $id = $r->id_khs; ?>
        <td><center>
          <a href="<?php echo site_url('khs/edit_khs/'.$r->id_khs); ?>" class="btn btn-warning">Edit</a>
          <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal">Hapus</button>
        </center></td>

      </tr>
      <?php } ?>  


    

  </tbody>
  



</table>  
</div>
</div>
</div>    