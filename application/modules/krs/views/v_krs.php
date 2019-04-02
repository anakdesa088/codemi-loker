
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
                                   <button data-toggle="modal" data-target="#addModal" class="btn btn-primary">Tambah Dosen</button>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Sks</th>
                                                    <th>Semester</th>
                                                    <th>Kelas</th>
                                                    <th>Dosen</th>
                                                    

                                                    
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    <?php 
                                                        $no = 1;
                                                         foreach ($tampil as $r) {
                                                            
                                                         ?>
                                                         
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $r['nama_mapel']; ?></td>
                                                        <td><?php echo $r['sks']; ?></td>
                                                        <td><?php echo $r['semester']; ?></td>
                                                        <td><?php echo $r['nama_kelas']; ?></td>
                                                        <td><?php echo $r['nama_lengkap']; ?></td>
                                                        <td><center>
                                                            <a href="" class="btn btn-warning">Edit</a>
                                                            <a href="" class="btn btn-danger">Hapus</a>
                                                        </center></td>

                                                    </tr>

                                                <?php } ?>
                                                </tbody>
                                            
                                            
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>

