
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

     <div class="row">

      <div class="col-md-10">
        <a href="<?php echo site_url('khs/tambah_khs'); ?>" class="btn btn-primary">Tambah</a>
      </div>
      <div class="col-md-2">
       <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
        View KHS <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">

          <?php 
          foreach ($kelas as $a ) {
          
          
          ?>
          <li><a href="<?php echo site_url('KHS/filter_KHS/'); ?>">></a></li>
        <?php } ?>
        </ul>
      </div>

    </div>

  </div>



  <hr>
  <div class="table-responsive">
  <table class="table table-bordered" id="myTable" data-freezecolumns="2">
    <thead>
            <tr>
              <th rowspan="2"><center>No</center></th>
              <th rowspan="2"><center> Mata Kuliah</th></center>
              <th rowspan="2"><center>SKS</center> </th>
              <th colspan="2"><center>NILAI</center> </th>
              <th rowspan="2"><center> SKS x Nilai</center> </th>
              <th rowspan="2"><center> Aksi</center> </th>
            </tr>
            <tr>
              <th><center> Mutu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></th>
              
              <th><center>Lambang</center> </th>
              
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
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Data KHS</h4>
      </div>

      <form role="form" action="<?php echo site_url('khs/hapus_khs') ?>" method="post" id="removeForm">
        <div class="modal-body">



          <p>Apakah anda yakin ingin menghapus <b id="nama_hapus"></b>? </p>



          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                   


<script type="text/javascript">
  var example;

  function removeFunc(id_khs)


  {




    if(id_khs) {


      $.ajax({
        url: 'khs/fetchKhsDataById/'+id_khs,
        type: 'post',
        dataType: 'json',
        success:function(response) {

          $("#nama_hapus").html(response.id_khs
            );

          $("#removeForm").on('submit', function() {


            var form = $(this);




            $.ajax({
              url: form.attr('action'),
              type: form.attr('method'),
              data: { id_khs:id_khs}, 
              dataType: 'json',
              success:function(response) {

                location.reload();

                if(response.success === true) {
                  response.messages



                  $("#removeModal").modal('hide');


                } else {

                  $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                    '</div>'); 
                }
              }
            }); 

            return false;
          });

        }





      });

    }

  }



</script>



