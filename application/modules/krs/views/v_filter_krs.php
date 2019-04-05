
                   <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          


<div class="row">
                   <!-- Start  Bordered  Table-->
                    <div class="col-md-12">
                     <div class="white-box">
                        <h2 class="header-title"> KRS Semester </h2>


                        <div class="row">

                            <div class="col-md-11">
                                <button onclick="kembali()" class="btn btn-warning">Kembali</button>
                            </div>
                            <div class="col-ms-1">
                                <a href="<?php echo site_url('krs/cetak'); ?>" class="btn btn-primary"><i class="fa fa-print"></i> Cetak</a>
                            </div>

                        </div>
                        <br>

                         <div class="table-wrap">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                                    <th>No</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Sks</th>
                                                    <th>Semester</th>
                                                    <th>Kelas</th>
                                                    <th>Dosen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach ($filter as $r) {
                                            # code...
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $r['nama_mapel']; ?></td>
                                            <td><?php echo $r['sks']; ?></td>
                                            <td><?php echo $r['semester']; ?></td>
                                            <td><?php echo $r['nama_kelas']; ?></td>
                                            <td><?php echo $r['nama_lengkap']; ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>


                             </div>
                        </div>
                     </div>
                   <!-- End  Bordered Table-->
                     
                    
                     
                    </div> <!--/row-->   
<script>
function kembali() {
  window.history.back();
}
</script>