<div class="page-title-box">
                        <h4 class="page-title">Mata Kuliah</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Akademik</a>
                            </li>
                            
                            <li class="active">
                                Mata Kuliah
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
                                   <h2 class="header-title">Mata Kuliah</h2>
                                   <a href="<?php echo site_url('mapel/tambah_mapel'); ?>" class="btn btn-primary">Tambah</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Pelajaran</th>
                                                    <th>Kode Pelajaran</th>
                                                    <th>Keterangan</th>
                                                    
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
                                                    
                                                    <td><?php echo $r->nama_mapel; ?></td>
                                                    <td><?php echo $r->kode_mapel ?></td>
                                                    <td><?php echo $r->keterangan_mapel; ?></td>
                                                    
                                                    <?php $id = $r->id_mapel; ?>
                                                    
                                                    <td align="center">
                                                        <a href="<?php echo site_url('mapel/edit_mapel/'.$r->id_mapel); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>

                                                    </td>
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
        <h4 class="modal-title">Hapus Mata Kuliah</h4>
      </div>

      <form role="form" action="<?php echo site_url('mapel/hapus_mapel') ?>" method="post" id="removeForm">
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

function removeFunc(id_mapel)


{



    
  if(id_mapel) {


  $.ajax({
    url: 'mapel/fetchMapelDataById/'+id_mapel,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.nama_mapel
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_mapel:id_mapel}, 
        dataType: 'json',
        success:function(response) {

          location.reload();

          if(response.success === true) {
            response.messages
            

            // hide the modal
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

