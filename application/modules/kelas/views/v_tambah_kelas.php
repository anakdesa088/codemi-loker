        
    <!--Start Page Title-->
               <div class="page-title-box">
                    <h4 class="page-title">Tambah Kelas</h4>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Kelas</a>
                        </li>
                        <li class="active">
                            Tambah Kelas
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                 </div>
                  <!--End Page Title-->          

                  <div class="row">
                         <div class="col-md-8">
                            <div class="white-box">
                              <h2 class="header-title">Tambah Kelas</h2>
                            <form method="post" action="<?php echo site_url('kelas/proses_tambah_kelas'); ?>">
                              <div class="form-group">
                                <label>Nama Kelas</label>
                                <input class="form-control" name="nama_kelas"  type="text">
                              </div>
                              
                              <div class="form-group">
                                <label>Kode Kelas</label>
                                <input class="form-control" name="kode_kelas"  type="text">
                              </div>
                              
                              <div class="form-group">
                                <label>Keterangan Kelas</label>
                                <textarea name="keterangan_kelas" class="form-control"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                          </div>
                       </div> <!--/.col-md-6-->
                </div>
