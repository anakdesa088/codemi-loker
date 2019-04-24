

 <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">TAMBAH TRANSAKSI</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">KEUANGAN</a> </li>
                                <li> <a href="#">TRANSAKSI </a> </li>
                                <li class="active">TAMBAH TRANSAKSI </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH TRANSAKSI</h2>
                                <form action="<?php echo site_url('transaksi/proses_tambah_transaksi'); ?>"  method="post" class="form-horizontal">

                                   <div class="form-group">
                                    <label class="col-md-2 control-label">JENIS PEMBAYARAN</label>
                                    <div class="col-md-10">
                                      <select class="form-control" name="jp"  id="jp">
                                        <?php foreach ($jenis_pembayaran as $js): ?>
                                            
                                        
                                          <option value="<?php echo $js->id_jp; ?>"><?php echo $js->nama_jp; ?></option>
                                          <?php endforeach ?>
                                      </select>
                                    </div>
                                  </div> 

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">NIM</label>
                                    <div class="col-md-10">
                                      <input class="form-control" name="nim" type="number">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Nominal Bayar</label>
                                    <div class="col-md-10">
                                      <input class="form-control" class="subkategori" name="nominal_bayar" type="number">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Tanggal</label>
                                    <div class="col-md-10">
                                      <input  name="tanggal" id="hapus_nama" class="form-control default-date-picker-autoclose">
                                    </div>
                                  </div>

                                  
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">Keterangan</label>
                                    <div class="col-md-10">
                                      <textarea class="form-control" class="subkategori" name="keterangan" rows="5"></textarea>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2"><button type="submit" class="btn btn-primary">SIMPAN</button></div>
                                    
                                </div>


                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->

<script type="text/javascript">
    $(document).ready(function(){
        $('#jp').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url('transaksi/coba');?>",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<b>'+data[i].nominal_bayar+'</b>';
                    }
                    $('.subkategori').html(html);
                     
                }
            });
        });
    });
</script>