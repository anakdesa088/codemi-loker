   
                  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">MANAGE GROUP</h4>
                        <ol class="breadcrumb">
                            
                            <li>
                                <a href="#">PENGGUNA</a>
                            </li>
                            <li class="active">
                                MANAGE GROUP
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
           
        <?php echo validation_errors(); ?>
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">MANAGE GROUP</h2>
                                   <a href="<?php echo site_url('group/tambah_group'); ?>" class="btn btn-primary">Tambah</a><hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Group</th>
                                                    <th width="200"><center> Aksi</center></th>
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php 
                                                $no =1;
                                                foreach ($tampil as $r) {
                                                    # code...
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r['group_name']; ?></td>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('group/edit/'.$r['id']); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $r['id']; ?>')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>

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
        <h4 class="modal-title">Hapus User Group</h4>
      </div>

      <form role="form" action="<?php echo site_url('group/hapus_group') ?>" method="post" id="removeForm">
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

 
  
 

function removeFunc(id_group)


{



    
  if(id_group) {


  $.ajax({
    url: 'group/fetchGroupDataById/'+id_group,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.group_name
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_group:id_group}, 
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

