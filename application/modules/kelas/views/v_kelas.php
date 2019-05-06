<div class="page-title-box">
                        <h4 class="page-title">Data Kelas</h4>
                        <ol class="breadcrumb">
                            
                            <li>
                                <a href="#">Akademik</a>
                            </li>
                            <li class="active">
                                Data Kelas
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>

        <?php echo


         $this->session->flashdata('sukses');?>
          
        
        <div id="messages"></div>
<!--Start row-->

                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">Data Kelas</h2>
                                   
                                   <a href="<?php echo site_url('kelas/tambah_kelas'); ?>" class="btn btn-primary">Tambah</a>
                                  
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kelas</th>
                                                    <th>Kode Kelas</th>
                                                    <th>Keterangan Kelas</th>
                                            
                                            
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
                                                    
                                                    <td><?php echo $r->nama_kelas; ?></td>
                                                    <td><?php echo $r->kode_kelas; ?></td>
                                                    <td><?php echo $r->keterangan_kelas; ?></td>
                                                    
                                                    <?php $id = $r->id_kelas; ?>
                                                    
                                                    <td align="center">
                                                    

                                                        <a href="<?php echo site_url('kelas/edit_kelas/'.$r->id_kelas); ?>" class="btn btn-warning">Edit</a>
                                                    

                                                        <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal">Hapus</button>
                                                      

                                                    </td>

                                                  
                                                </tr>
                                                <?php } ?>
                                                
                                            </tbody>
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>
                   <!-- End  hover Table-->

<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Data Kelas</h4>
      </div>

      <form role="form" action="<?php echo site_url('kelas/hapus_kelas') ?>" method="post" id="removeForm">
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

 
  
 

function removeFunc(id_kelas)


{



    
  if(id_kelas) {


  $.ajax({
    url: 'kelas/fetchKelasDataById/'+id_kelas,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.nama_kelas
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_kelas:id_kelas}, 
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

