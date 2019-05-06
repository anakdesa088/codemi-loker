<link href="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.css'); ?>" rel="stylesheet"/>
      <script src="<?php echo base_url('assets/jquery/dist/jquery.js');  ?>"></script>
        <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js');  ?>"></script>
        <script type="text/javascript">
        $(document).ready(function(){

          $('#nim').autocomplete({
            source: "<?php echo site_url('transaksi/mahasiswa/?'); ?>"
          });

        });
    </script>                       <div class="page-title-box ">
                            <h4 class="page-title">TAMBAH TRANSAKSI</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">KEUANGAN</a> </li>
                                <li> <a href="#">TRANSAKSI </a> </li>
                                <li class="active">TAMBAH TRANSAKSI </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          
<?php echo $this->session->flashdata('gagal'); ?>
           
                     <!--Start row-->
                     <div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">TAMBAH TRANSAKSI</h2>
                                <form action="<?php echo site_url('transaksi/proses_tambah_transaksi'); ?>"  method="post" class="form-horizontal">

                                   <div class="form-group">
                                    <label class="col-md-3 control-label">JENIS PEMBAYARAN</label>
                                    <div class="col-md-9">
                                      <select class="form-control" name="jp"  id="jp">
                                        <option value="0" selected="">PILIH JENIS PEMBAYARAN</option>
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
                                      <input class="form-control" id="nim" name="nim" type="number">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Kode transaksi</label>
                                    <div class="col-md-9">
                                      <input class="form-control" name="kode_transaksi" readonly="" value="<?php echo $kode_transaksi; ?>" type="text">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Nominal Bayar</label>
                                    <div class="col-md-9">
                                      <input class="form-control " id="bayar" onfocus="startCalculate()" onblur="stopCalc()" class="subkategori" name="nominal_bayar" type="number">
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
                                      <input  name="tanggal" id="hapus_nama" class="form-control default-date-picker-autoclose">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3  control-label">Status</label>
                                    <div class="col-md-9">
                                      <select name="status" class="form-control" >
                                        <option value="LUNAS">LUNAS</option>
                                        <option value="BELUM LUNAS">BELUM LUNAS</option>
                                      </select>
                                    </div>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Keterangan</label>
                                    <div class="col-md-9">
                                      <textarea class="form-control"  name="keterangan" rows="5"></textarea>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2"><button type="submit" class="btn btn-primary">BAYAR</button></div>
                                    
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