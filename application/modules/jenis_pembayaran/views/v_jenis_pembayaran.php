                   <div class="page-title-box">
                        <h4 class="page-title">JENIS PEMBAYARAN</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">KEUANGAN</a>
                            </li>
                            
                            <li class="active">
                                JENIS PEMBAYARAN
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
           <?php echo $this->session->flashdata('sukses'); ?>
        
                    <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH JENIS PEMBAYARAN</h2>
                                <form  method="post" class="form-horizontal" action="<?php echo site_url('jenis_pembayaran/tambah_jenis_pembayaran'); ?>">
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">JENIS PEMBAYARAN</label>
                                    <div class="col-md-9">
                                      <input class="form-control"  name="nama_jp"  type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">NOMINAL</label>
                                    <div class="col-md-9">
                                      <input class="form-control" name="nominal"  type="text">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label">KODE</label>
                                    <div class="col-md-9">
                                      <input class="form-control" name="kode_jp"  type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">KETERANGAN</label>
                                    <div class="col-md-9">
                                      <input class="form-control" name="keterangan_jp"  type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-11 control-label"></label>
                                    <div class="col-md-">
                                      <button type="submit" class="btn btn-info">SIMPAN</button>
                                    </div>
                                  </div>
                                  
                                  
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->

                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">JENIS PEMBAYARAN</h2>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Jenis Pembayaran</th>
                                                    <th>Nominal</th>
                                                    <th>Kode</th>
                                                    <th>Keterangan</th>
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
                                                    <td><?php echo $r->nama_jp; ?></td>
                                                    <td>Rp. <?php echo $r->nominal; ?></td>
                                                    <td><?php echo $r->kode_jp; ?></td>
                                                    <td><?php echo $r->keterangan_jp; ?></td>
                                                    <?php $id = $r->id_jp; ?>
                                                    <td align="center">
                                                        <a href="<?php echo site_url('jenis_pembayaran/edit_jenis_pembayaran/'.$r->id_jp); ?>" class="btn btn-warning">Edit</a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Hapus Jenis Pembayaran</h4>
      </div>

      <form role="form" action="<?php echo site_url('jenis_pembayaran/hapus_jenis_pembayaran') ?>" method="post" id="removeForm">
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

function removeFunc(id_jp)


{



    
  if(id_jp) {


  $.ajax({
    url: 'jenis_pembayaran/fetchJenisPembayaranDataById/'+id_jp,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.nama_jp
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id_jp:id_jp}, 
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

