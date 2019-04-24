<div class="page-title-box">
                        <h4 class="page-title">TRANSAKSI</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">KEUANGAN</a>
                            </li>
                            
                            <li class="active">
                                <th>TRANSAKSI</th>
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
                                   <h2 class="header-title">DATA TRANSAKSI</h2>
                                   <a href="<?php echo site_url('transaksi/tambah_transaksi'); ?>" class="btn btn-primary" >TAMBAH</a>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nim</th>
                                                    <th>Kode</th>
                                                    <th>Jenis Pembayaran</th>
                                                    <th>Nominal</th>
                                                    <th>Tanggal</th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nim</th>
                                                    <th>Kode</th>
                                                    <th>Jenis Pembayaran</th>
                                                    <th>Nominal</th>
                                                    <th>Tanggal</th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                 foreach ($tampil as $r) {
                                                    # code...
                                                ?>
                                                <tr>
                                                  <?php
                                                  $date=date_create($r->tanggal_transaksi);
                                                  $tanggal_transaksi = date_format($date,"d-m-Y");
                                                   ?>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->nim; ?></td>
                                                    <td><?php echo $r->kode_transaksi; ?></td>
                                                    <td><?php echo $r->nama_jp; ?></td>
                                                    <td><?php echo "Rp. ".$r->nominal_bayar; ?></td>
                                                    <td><?php $id = $r->id_transaksi; echo $tanggal_transaksi ?></td>

                                                    <td align="center">
                                                        <a href="<?php echo site_url('transaksi/edit_transaksi/'.$r->id_transaksi); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button>
                                                        <a href="" class="btn btn-success"><i class="fa fa-print"></i></a>
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
        <h4 class="modal-title">Hapus Data Transaksi</h4>
      </div>

      <form role="form" action="<?php echo site_url('transaksi/hapus_transaksi') ?>" method="post" id="removeForm">
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

function removeFunc(id_transaksi)


{



    
  if(id_transaksi) {


  $.ajax({
    url: 'transaksi/fetchTransaksiDataById/'+id_transaksi,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.kode_transaksi
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id:id_transaksi}, 
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
