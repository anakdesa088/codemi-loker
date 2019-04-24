                   <div class="page-title-box">
                        <h4 class="page-title">EDIT JENIS PEMBAYARAN</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">KEUANGAN</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('jenis_pembayaran'); ?>">JENIS PEMBAYARAN</a>
                            </li>
                            
                            <li class="active">
                                EDIT JENIS PEMBAYARAN
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>



<div class="row">
                         <div class="col-md-12">
                           <div class="white-box">
                             <h2 class="header-title">EDIT JENIS PEMBAYARAN</h2>
                                <form  method="post" class="form-horizontal" action="<?php echo site_url('jenis_pembayaran/proses_edit_jenis_pembayaran/'.$tampil->id_jp);  ?>" >
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">JENIS PEMBAYARAN</label>
                                    <div class="col-md-9">
                                      <input class="form-control" value="<?php echo $tampil->nama_jp; ?>" name="nama_jp"  type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">NOMINAL</label>
                                    <div class="col-md-9">
                                      <input class="form-control" value="<?php echo $tampil->nominal; ?>" name="nominal"  type="text">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="col-md-3 control-label">KODE</label>
                                    <div class="col-md-9">
                                      <input class="form-control" value="<?php echo $tampil->kode_jp; ?>" name="kode_jp"  type="text">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">KETERANGAN</label>
                                    <div class="col-md-9">
                                      <input class="form-control" value="<?php echo $tampil->keterangan_jp; ?>" name="keterangan_jp"  type="text">
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
