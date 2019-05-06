<link href="<?php echo base_url('assets/dropify/css/dropify.css') ?>" rel="stylesheet" type="text/css" />
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
                                   <a href="<?php echo site_url('dosen/tambah_dosen'); ?>" class="btn btn-primary">Tambah Dosen</a>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>TTl</th>
                                                    <th>JK</th>
                                                    <th>Alamat</th>
                                                    <th>Tahun Masuk</th>
                                                    <th>Dosen Wali</th>
                                                    <th width="100"><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php $no = 1; foreach ($tampil as $r) {
                                                    # code...
                                                ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $r->nama_dosen; ?></td>
                                                        <?php $date = date_create($r->tgl_lahir); $tgl_lahir = date_format($date,"d-m-Y"); ?>
                                                        <td><?php echo $r->tmpt_lahir .", ".$tgl_lahir; ?></td>
                                                        <td><?php if($r->jk == "1"){
                                                            echo "Laki-laki";
                                                        }else{
                                                            echo "Perempuan";
                                                        } ?></td>
                                                        <td><?php echo $r->alamat; ?></td>
                                                        <td><?php echo $r->tahun_masuk; ?></td>
                                                        <td><?php echo $r->nama_kelas; ?></td>
                                                        <?php $id = $r->id_dosen; ?>
                                                        
                                                        <td align="center">
                                                            <a href="<?php echo site_url('dosen/edit_dosen/'.$r->id_dosen); ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                            <button type="button" class="btn btn-classic btn-danger mb-4 mr-2" onclick="removeFunc('<?php echo $id; ?>')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i> </button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                <tfoot>
                                                <?php 
                                                $sql = "SELECT count(id_dosen) as id_dosen from dosen";
                                                $data = $this->db->query($sql)->row()->id_dosen;
                                                ?>
                                              <tr>
                                                <th>s</th>
                                                
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th style="text-align: right; font-weight: bold;">Jumlah :</th>
                                                <th><?php echo $data; ?></th>
                                                <th></th>
                                                <th></th>
                                                
                                              </tr>
                                            </tfoot>
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
        <h4 class="modal-title">Hapus Data Dosen</h4>
      </div>

      <form role="form" action="<?php echo site_url('dosen/hapus_dosen') ?>" method="post" id="removeForm">
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

function removeFunc(id_dosen)


{



    
  if(id_dosen) {


  $.ajax({
    url: 'dosen/fetchDosenDataById/'+id_dosen,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      $("#nama_hapus").html(response.nama_dosen
            );
      
    $("#removeForm").on('submit', function() {


      var form = $(this);

      // remove the text-danger


      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { id:id_dosen}, 
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

<script src="<?php echo base_url().'assets/ui/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dropify/js/dropify.js') ?>"></script>  


<script>
    $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated

                // Used events
            });
    
        </script>

