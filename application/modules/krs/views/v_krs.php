
<div class="page-title-box">
                        <h4 class="page-title">Data Dosen</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Akademik</a>
                            </li>
                            
                            <li class="active">
                                Data Dosen
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
                                   <h2 class="header-title">Data Dosen</h2>
                                   <button data-toggle="modal" data-target="#addModal" class="btn btn-primary">Tambah Dosen</button>
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
                                            
                                            
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Category</h4>
      </div>

      <form role="form" action="<?php echo site_url('krs/tambah_krs') ?>" method="post" id="createForm">

        <div class="modal-body">

          
          <div class="form-group">
            <label for="active">Mata Kuliah</label>
            <select class="form-control" id="nama_mapel" name="nama_mapel">
              
            <?php  foreach ($mapel as $k) {
                # code...
              ?>
              <option value="<?php echo $k['id_mapel']; ?>"><?php echo $k['nama_mapel']; ?></option>
          <?php } ?>
            </select>
          </div>
        
        <div class="form-group">
            <label for="brand_name">Sks</label>
            <input type="text" class="form-control" id="nama_mapel" name="sks" placeholder="Enter category name" autocomplete="off">
          </div>

          

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Category</h4>
      </div>

      <form role="form" action="<?php echo base_url('krs/edit_krs') ?>" method="post" id="updateForm">

        <div class="modal-body">
          <div id="messages"></div>


          <div class="form-group">
            <label for="edit_nama_mapel">Status</label>
            <select class="form-control" id="edit_nama_mapel" name="nama_mapel">
              <?php  foreach ($mapel as $k => $value) {
                  # code...
              ?>
              <option value="<?php echo $k['id_mapel']; ?>"><?php echo $k['nama_mapel']; ?></option>
              <?php } ?>
            </select>
          </div>


            <div class="form-group">
            <label for="edit_brand_name">Sks</label>
            <input type="text" class="form-control" id="edit_sks" name="edit_sks" placeholder="Enter category name" autocomplete="off">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
var manageTable;

$(document).ready(function() {
  
  
  // initialize the datatable  example
  manageTable = $('#example').DataTable({
    'ajax': 'krs/fetchKrsData',
    'order': []
  });

  // submit the create from 
  $("#createForm").unbind('submit').on('submit', function() {
    var form = $(this);

    // remove the text-danger
    $(".text-danger").remove();

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');


          // hide the modal
          $("#addModal").modal('hide');

          // reset the form
          $("#createForm")[0].reset();
          $("#createForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {

          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);

              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              
              id.after(value);

            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
          }
        }
      }
    }); 

    return false;
  });







function editFunc(id)
{ 
  $.ajax({
    url: 'krs/fetchKrsDataById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#edit_nama_mapel").val(response.nama_lengkap);
      $("#edit_sks").val(response.sks);

      // submit the edit from 
      $("#updateForm").unbind('submit').bind('submit', function() {
        var form = $(this);

        // remove the text-danger
        $(".text-danger").remove();

        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {

            manageTable.ajax.reload(null, false); 

            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');


              // hide the modal
              $("#editModal").modal('hide');
              // reset the form 
              $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');

            } else {

              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);

                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  
                  id.after(value);

                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
              }
            }
          }
        }); 

        return false;
      });

    }
  });
}




});


  



// remove functions 


</script>
