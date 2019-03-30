<style type="text/css">

</style>
<div class="page-title-box">
    <h4 class="page-title">Data Table</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Table</a>
        </li>
        <li class="active">
            Data Table
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
           <h2 class="header-title">Data Peserta Mahasiswa Baru</h2>
           <div class="table-responsive">
            
            <table id="example" class="display table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                    $no = 1; 
                    foreach ($tampil as $r) {



                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $r->nama_lengkap; ?></td>
                            <td><?php echo $r->email; ?></td>
                            <td><?php echo $r->tmpt_lahir.", ".$r->tgl_lahir; ?></td>
                            <td><?php echo $r->jk; ?></td>
                            <?php $btn_validasi_pembayaran = $r->validasi_pembayaran==='0'?'btn-danger':'btn-success'; ?>
                            <?php  $id = $r->id_pmb; ?>  
                                <center>
                                    <td class="btn-group">
                                        <div class="dropup">
                                        <button type="button" class="btn <?php echo $btn_validasi_pembayaran ?> dropdown-toggle" 
                                        data-toggle="dropdown"aria-expanded="false">
                                            <?php echo ($r->validasi_pembayaran==='0')?'Invalid':'Valid'; ?> 
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropup" role="menu">
                                            <li><a href="<?php echo site_url('keuangan/c_status_valid/'.$r->id_pmb); ?>">Valid</a></li>
                                            <li><a href="<?php echo site_url('keuangan/c_status_invalid/'.$r->id_pmb); ?>">Invalid</a></li>
                                        </ul>
                                        </div>
                                    </td>
                                </center>

                            

                            
                            <td>
                                <a href="<?php echo site_url('keuangan/detail/'.$r->id_pmb); ?>" class="btn btn-info">Detail</a>
                                <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal">Hapus</button>





                            </td>
                        </tr>
                    <?php  } ?>
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
        <h4 class="modal-title">Hapus Data Kelas</h4>
      </div>

      <form role="form" action="<?php echo site_url('keuangan/hapus_keuangan') ?>" method="post" id="removeForm">
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

function removeFunc(id_pmb)


{



    
  if(id_pmb) {


  $.ajax({
    url: 'keuangan/fetchKeuanganDataById/'+id_pmb,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.nama_lengkap
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_pmb:id_pmb}, 
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

