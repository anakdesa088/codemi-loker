
                      <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">PAMBAGIAN MATKUL</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">AKADEMIK</a> </li>
                                
                                <li class="active">PEMBAGIAN MATUKUL</li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>
                       <!--End Page Title-->          



                  <div class="row">
                         <div class="col-md-12">
                          <div class="white-box">
                            <h2 class="header-title"> PEMBAGIAN MATKUL</h2>

                            
                            <table class="table">
                              <thead>
                                <tr>
                                  
                                <th></th>
                                  <?php foreach ($kelas as $k) {
                                    # code...
                                  ?>
                                <th><?php echo $k->nama_kelas; ?></th>
                              <?php } ?>
                                </tr>
                               

                              </thead>
                                
                              <tbody>
                                <form action="<?php echo site_url('pembagian_matkul/insert'); ?>" method="post">
                                <?php foreach ($mapel as $m) {
                                  # code...
                                ?>
                                  <tr>
                                  
                                    <td><?php echo $m->nama_mapel; ?></td>
                                      <?php foreach ($kelas as $ke ) {
                                        # code...
                                          ?>
                                      <td>
                                                             
         
                                 <div class="checkbox success">
                                  <input name="data_kelas[]" id="custom7" value="<?php echo $ke->id_kelas; ?>" type="checkbox">
                                  <label><?php echo $ke->nama_kelas;  ?></label>
                                </div>

                                      </td>
                                        <?php } ?><input type="hidden" name="data_mapel[]" id="hdncustom7" checked="" value="<?php echo $m->id_mapel; ?>" >
                                  </tr>
                                  <?php } ?>                                      
                              </tbody>
                            </table>
                            <button type="submit" class="btn btn-info">Simpan</button>
                              
</form>
                          </div>
                        </div>
                     </div>
                   <!-- End  Striped Table-->
                   


                     <!--End row-->
<script type="text/javascript">
  $('#custom7').on('change', function(){
   $('#hdncustom7').val(this.checked ? 1 : 0);
});
</script>