                       <div class="page-title-box ">
                            <h4 class="page-title">EDIT TRANSAKSI</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">KEUANGAN</a> </li>
                                <li> <a href="#">TRANSAKSI </a> </li>
                                <li class="active">EDIT TRANSAKSI </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          

           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">EDIT TRANSAKSI</h2>
                                <form action="<?php echo site_url('transaksi/proses_edit_transaksi/'.$tampil->id_transaksi); ?>"  method="post" class="form-horizontal">

                                   <div class="form-group">
                                    <label class="col-md-3 control-label">JENIS PEMBAYARAN</label>
                                    <div class="col-md-9">
                                      <select class="form-control" name="jp"  id="jp">
                                        <option value="<?php echo $tampil->id_jp; ?>" selected=""><?php echo $tampil->nama_jp; ?></option>
                                        <?php foreach ($jenis_pembayaran as $js): ?>
                                            
                                        
                                          <option value="<?php echo $js->id_jp; ?>"><?php echo $js->nama_jp; ?></option>
                                          <?php endforeach ?>
                                      </select>
                                    </div>
                                  </div> 
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Jumlah Bayar</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control apa  numeric" readonly="" name="kembalian" id="jumlah" onfocus="startCalculate()" onblur="stopCalc()"> 
                                </div>
                                  </div>


                                  <div class="form-group">
                                    <label class="col-md-3 control-label">NIM</label>
                                    <div class="col-md-9">
                                      <input class="form-control" value="<?php echo $tampil->nim; ?>" name="nim" type="number">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Nominal Bayar</label>
                                    <div class="col-md-9">
                                      <input class="form-control " id="bayar" onfocus="startCalculate()" onblur="stopCalc()" class="subkategori" name="nominal_bayar" value="<?php echo $tampil->nominal_bayar; ?>" type="number">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Hutang</label>
                                    <div class="col-md-9">
                                    <input type="text" class="form-control  numeric" readonly="" name="hutang" id="kembalian" onblur="stopCalc()"></div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Tanggal</label>
                                    <div class="col-md-9">
                                      <input  name="tanggal" id="hapus_nama" <?php echo $tampil->tanggal_transaksi; ?> class="form-control default-date-picker-autoclose">
                                    </div>
                                  </div>

                                  
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Keterangan</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control" class="subkategori" name="keterangan" rows="5"><?php echo $tampil->keterangan; ?></textarea>
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
            
                            </script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#jp').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>transaksi/coba",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var coba = 'Rp. ';
                    var apajeh = '';
                    
                    var i;
                    for(i=0; i<data.length; i++){
                        coba +=  +data[i].nominal;
                    }
                    $('.apa').val(coba);

                    
                    
                }
            });
        });
    });
   function startCalculate(){
                interval=setInterval("Calculate()",10);
            }

            function Calculate() {
                                    var numberHarga = $('#jumlah').val(); // a string
                                    numberHarga = numberHarga.replace(/\D/g, '');
                                    numberHarga = parseInt(numberHarga, 10);

                                    var numberBayar = $('#bayar').val(); // a string
                                    numberBayar = numberBayar.replace(/\D/g, '');
                                    numberBayar = parseInt(numberBayar, 10);

                                    var total = numberBayar - numberHarga;
                                    $('#kembalian').val(total);
                                }

                                function stopCalc(){
                                    clearInterval(interval);
                                }
</script>

</body>
</html>