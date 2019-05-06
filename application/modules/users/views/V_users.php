

<!--Start Page Title-->
<div class="page-title-box">
  <h4 class="page-title">MANAGE USERS</h4>
  <ol class="breadcrumb">

    <li>
      <a href="#">PENGGUNA</a>
    </li>
    <li class="active">
      MANAGE USERS
    </li>
  </ol>
  <div class="clearfix"></div>
</div>
<!--End Page Title-->          
<?php echo $this->session->flashdata('sukses'); ?>
<?php echo validation_errors(); ?>
<!--Start row-->
<div class="row">
 <div class="col-md-12">
   <div class="white-box">
     <h2 class="header-title">MANAGE USERS</h2>
     <a href="<?php echo site_url('users/tambah_users'); ?>" class="btn btn-primary">Tambah</a><hr>
     <div class="table-responsive">
       <table id="example" class="display table">
        <thead>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Group</th>

            <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>


            <th width="100"><center> Aksi</center></th>
          <?php endif; ?>                                                                                      
        </tr>
      </thead>

      <tbody>
        <?php $no = 1; if($user_data): ?>                  
        <?php foreach ($user_data as $k => $v): ?>
          <tr>
           <td><?php echo $no++; ?></td>
           <td><?php echo $v['user_info']['username']; ?></td>
           <td><?php echo $v['user_info']['email']; ?></td>
           <td><?php echo $v['user_info']['firstname'] .' '. $v['user_info']['lastname']; ?></td>
           <td><?php echo $v['user_info']['phone']; ?></td>
           <td><?php echo $v['user_group']['group_name']; ?></td>
           <?php $id = $v['user_info']['id']; ?>

           <?php if(in_array('updateUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>

           <td>
            <?php if(in_array('updateUser', $user_permission)): ?>
              <a href="<?php echo base_url('users/edit/'.$v['user_info']['id']) ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
            <?php endif; ?>
            <?php if(in_array('deleteUser', $user_permission)): ?>
              <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
            <?php endif; ?>
          </td>
        <?php endif; ?>
      </tr>
    <?php endforeach ?>
  <?php endif; ?>
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
        <h4 class="modal-title">Hapus User</h4>
      </div>

      <form role="form" action="<?php echo site_url('users/hapus_users') ?>" method="post" id="removeForm">
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

function removeFunc(id_users)


{



    
  if(id_users) {


  $.ajax({
    url: 'users/fetchUsersDataById/'+id_users,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.username
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_users:id_users}, 
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




