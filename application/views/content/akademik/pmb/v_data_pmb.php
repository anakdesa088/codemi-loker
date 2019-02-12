<div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Table basic</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Table basic</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>

                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <a href="" class="btn btn-info">Tambah</a>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama </th>
                                                <th>TTL</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Hp</th>
                                                <th>Foto Ijazah</th>
                                                <th>Foto Kesehatan</th>
                                                <th>Foto Peserta</th>
                                                <th>Status</th>
                                                <center><th>Aksi</th></center>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                         <?php 
                                         
                                         $no = 1;
                                         foreach ($tampil as $r) {
                                             
                                         
                                         ?>   
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $r->nama_lengkap; ?></td>
                                                <td><?php echo $r->tmpt_lahir ." ".$r->tgl_lahir; ?></td>
                                                <td><?php echo $r->jk; ?></td>
                                                <td><?php echo $r->no_hp1; ?></td>
                                                <td><a href="">Aktip</a><a href="">Tidak</a></td>
                                                <td><?php ?></td>
                                                <td><?php  ?></td>
                                                <td></td>
                                                <td>
                                                    <a href="" class="btn btn-warning">Edit</a>

                                                    <a href="" class="btn btn-warning">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        

                    </div>