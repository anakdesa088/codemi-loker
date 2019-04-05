
<div class="page-title-box">
                        <h4 class="page-title">Data Krs</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Akademik</a>
                            </li>
                            
                            <li class="active">
                                Data Krs
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
                                   <h2 class="header-title">Data Krs</h2>
                                   
                                   <div class="row">

                                    <div class="col-md-10">
                                    <a href="<?php echo site_url('krs/tambah_krs'); ?>" class="btn btn-primary">Tambah</a>
                                </div>
                                    <div class="col-md-2">
<a href="<?php echo site_url('krs/cetak'); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
                                    </div>

                                   </div>
                                    

                                   
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Sks</th>
                                                    <th>Semester</th>
                                                    <th>Kelas</th>
                                                    <th>Dosen</th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                
                                                    <?php 
                                                        $no = 1;
                                                         foreach ($tampil as $r) {
                                                            
                                                         ?>
                                                         
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $r['nama_mapel']; ?></td>
                                                        <td><?php echo $r['sks']; ?></td>
                                                        <td><?php echo $r['semester']; ?></td>
                                                        <td><?php echo $r['nama_kelas']; ?></td>
                                                        <td><?php echo $r['nama_lengkap']; ?></td>
                                                        <?php $id = $r['id_krs']; ?>
                                                        <td><center>
                                                            <a href="<?php echo site_url('krs/edit_krs/'.$r['id_krs']); ?>" class="btn btn-warning">Edit</a>
                                                            <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal">Hapus</button>
                                                        </center></td>

                                                    </tr>
                                                    

                                                <?php } ?>
                                                   
                                                </tbody>
<style type="text/css">
  .jumlah{
    text-align: right;
  }
</style>
                                                <tfoot>
                                                  <tr>
                                                    <th></th>
                                                    <th class="jumlah"><b>Jumlah</b></th>
                                                    <th><?php echo $jumlah; ?></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                  </tr>
                                                </tfoot>

                                            
                                            
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
        <h4 class="modal-title">Hapus Data Krs</h4>
      </div>

      <form role="form" action="<?php echo site_url('krs/hapus_krs') ?>" method="post" id="removeForm">
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

function removeFunc(id_krs)


{



    
  if(id_krs) {


  $.ajax({
    url: 'krs/fetchKrsDataById/'+id_krs,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.id_krs
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_krs:id_krs}, 
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



