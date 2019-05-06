 <div class="page-title-box">
                        <h4 class="page-title">SET SEMESTER</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">PENGATURAN</a>
                            </li>
                            
                            <li class="active">
                                SET SEMESTER
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
           <?php echo $this->session->flashdata('sukses'); ?>
        
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">SEMESTER</h2>
                                   <a href="<?php echo site_url('semester/tambah_semester'); ?>" class="btn btn-primary">Tambah</a><hr>
                                    <div class="table-responsive">

                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>NAMA SEMESTER</th>
                                                    <th>KETERANGAN</th>
                                                    <th><center>AKSI</center></th>
                                                    
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
                                                    <td><?php echo $r->nama_semester; ?></td>
                                                    <td><?php echo $r->keterangan; ?></td>
                                                    <?php $id = $r->id_semester; ?>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('semester/edit_semester/'.$r->id_semester); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
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
                       <!--End row-->

<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Semester</h4>
      </div>

      <form role="form" action="<?php echo site_url('semester/hapus_semester') ?>" method="post" id="removeForm">
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

function removeFunc(id_semester)


{



    
  if(id_semester) {


  $.ajax({
    url: 'semester/fetchSemesterlDataById/'+id_semester,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.nama_semester
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_semester:id_semester}, 
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


