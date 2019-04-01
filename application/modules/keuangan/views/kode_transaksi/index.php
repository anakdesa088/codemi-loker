<div class="page-title-box">
                        <h4 class="page-title">Data Kode Transaksi</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo site_url('keuangan/dashboard');?>">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Keuangan</a>
                            </li>
                            <li class="active">
                                Data Transaksi
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
                                   <h2 class="header-title">Data Kode Transaksi</h2>
                                   <a href="<?php echo site_url('keuangan/kode_transaksi/tambah'); ?>" class="btn btn-primary">Tambah Kode Transaksi</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Nama</th>
                                                    <th>Tujuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Deskripsi</th>
                                                    <th style="text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>                   
                                            <tbody>
                                                <?php foreach ($kode_transaksi as $r): ?>
                                                <?php $no = 1; ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $r->kode_transaksi; ?></td>
                                                        <td><?php echo $r->nama_transaksi; ?></td>
                                                        <td><?php echo $r->tujuan_transaksi === 'mhs'?'Mahasiswa':'Dosen'; ?></td>
                                                        <td><?php echo rp_converter($r->jumlah_transaksi); ?></td>
                                                        <td><?php echo $r->deskripsi_transaksi; ?></td>
                                                        <?php $id = $r->id_kode_transaksi; ?>
                                                        <td align="center">
                                                            <a href="<?php echo site_url('keuangan/kode_transaksi/edit_kode_transaksi/'.$r->id_kode_transaksi); ?>" class="btn btn-warning">Edit</a>
                                                            <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal">Hapus</button>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
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
        <h4 class="modal-title">Hapus Data Kode Transaksi</h4>
      </div>

      <form role="form" action="<?php echo site_url('keuangan/kode_transaksi/hapus_kode_transaksi') ?>" method="post" id="removeForm">
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

function removeFunc(id_kode_transaksi)


{



    
  if(id_kode_transaksi) {


  $.ajax({
    url: 'kode_transaksi/fetchKodeTransaksiDataById/'+id_kode_transaksi,
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
        data: { id:id_kode_transaksi}, 
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