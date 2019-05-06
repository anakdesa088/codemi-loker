 <!--Start Page Title-->
                       <div class="page-title-box ">
                            <h4 class="page-title">LAPORAN TRANSAKSK</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">LAPORAN</a> </li>

                                <li class="active">LAPORAN TRANSAKSI </li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>

                       <!--End Page Title-->          

<div class="row">
  <div class="col-md-12">
                     
                     
                     
                           <div class="white-box">
                             <h2 class="header-title">LAPORAN TRANSAKSI TANGGAL</h2>
                                <form  method="post"  action="<?php echo site_url('laporan/laporan_transaksi'); ?>" class="form-horizontal">
                                 
                                 <div class="col-md-2">
                                 </div>
                                 <div class="col-md-8">
                                 
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">KODE </label>
                                    <div class="col-md-7">
                                      
                                      <div class="input-daterange input-group" id="date-range">
                                            <input type="text" class="form-control" name="start" />
                                            <span class="input-group-addon no-border ">to</span>
                                            <input type="text" class="form-control" name="end" />
                                        </div>


                                    </div>
                                    <div class="col-md-3">
                                      <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                  </div>
                                 </div>
                                 <div class="col-md-2">
                                  
                                 </div> 
                                  
                                 
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->

<div class="row">
  <div class="col-md-12">
                     
                     
                     
                           <div class="white-box">
                             <h2 class="header-title">LAPORAN TRANSAKSI STATUS</h2>
                                <form  method="post"  action="<?php echo site_url('laporan/laporan_transaksi_status'); ?>" class="form-horizontal">
                                 
                                 <div class="col-md-2">
                                 </div>
                                 <div class="col-md-8">
                                 
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">KODE </label>
                                    <div class="col-md-7">
                                      
                                      <div class="input-daterange input-group" id="date-range">
                                            <input type="text" class="form-control" name="start" />
                                            <span class="input-group-addon no-border ">to</span>
                                            <input type="text" class="form-control" name="end" />
                                        </div>


                                    </div>
                                    <div class="col-md-3">
                                      <select class="form-control" name="status">
                                        <option value="LUNAS">LUNAS</option>
                                        <option value="BELUM LUNAS">BELUM LUNAS</option>
                                      </select>
                                    </div>
                                  </div>
                                 </div>
                                 <div class="col-md-2">
                                  <button type="submit" class="btn btn-primary">SUBMIT</button>
                                 </div> 
                                  
                                 
                                  
                                </form>
                           </div>
                          </div>
                      </div>
                     <!--End row-->
  <div class="col-md-12">
                     
                     
                     
                           <div class="white-box">
                             <h2 class="header-title">LAPORAN TRANSAKSI KELAS</h2>
                                <form  method="post"  action="<?php echo site_url('laporan/laporan_transaksi_kelas'); ?>" class="form-horizontal">
                                 
                                 <div class="col-md-2">
                                 </div>
                                 <div class="col-md-8">
                                 
                                  <div class="form-group">
                                    <label class="col-md-2 control-label">KELAS </label>
                                    <div class="col-md-7">
                                      
                                      <select class="form-control" name="kelas">
                                        <?php foreach ($kelas as $r) {
                                          # code...
                                        ?>
                                        <option value="<?php echo $r->id_kelas; ?>"><?php echo $r->nama_kelas; ?></option>
                                      <?php } ?>
                                      </select>


                                    </div>
                                    <div class="col-md-3">
                                      <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </div>
                                  </div>
                                 </div>
                                 <div class="col-md-2">
                                  
                                 </div> 
                                  
                                 
                                  
                                </form>
                           </div>
                          </div>
                      </div>


                      