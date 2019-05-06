<?php 

if (isset($kelas_mhs)) {
    $nama_kelas ="Kelas :".$kelas_mhs->nama_kelas;
}else{
    $nama_kelas = "";
}


?>

  <!--Start Page Title-->
                   <div class="page-title-box">
                        <h4 class="page-title">KHS MAHASISWA</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">KHS</a>
                            </li>
                            
                            <li class="active">
                                KHS MAHASISWA
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
           
        
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="white-box">
                                   <h2 class="header-title">KHS MAHASISWA</h2>
                                   <hr>
                                   <div class="row">
                                    <div class="col-md-8">
                                        <a href="<?php echo site_url('khs/input'); ?>" class="btn  btn-primary">Tambah</a>
                                    </div>
                                    <div class="col-md-4" >
                                        <form method="post" action="<?php echo site_url('khs/list_khs_kelas'); ?>">
                                            <div class="col-md-4">
                                            <select name="kelas" class="form-control">
                                                <?php foreach ($kelas as $k): ?>
                                                    
                                                
                                                <option value="<?php echo $k->id_kelas; ?>"><?php echo $k->nama_kelas; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select name="mapel" class="form-control">
                                                <?php foreach ($mapel as $m): ?>
                                                    
                                                
                                                <option value="<?php echo $m->id_mapel; ?>"><?php echo $m->nama_mapel; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                        </div>

                                        </form>


                                    </div>
                                    </div>
                                    
                                    <hr>
                                    <p><?php echo $nama_kelas; ?>
                                    </p>
                                    <p><?php if (isset($mapeli)) {
                                        echo $mapeli;
                                    }  ?></p>
                                    <div class="table-responsive">

                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Matkul</th>
                                            <th>UTS</th>
                                            <th>40%</th>
                                            <th>UAS</th>
                                            <th>40%</th>
                                            <th>TGS</th>
                                            <th>20%</th>
                                            <th>JML</th>
                                            <th>AM</th>
                                            <th >HN</th>
                                            <th>KETERANGAN</th>
                                            <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php $no=1; foreach ($tampil as $r): ?>
                                                    
                                                
                                                <tr>
                                                    <td><?php echo $no++; ?> </td>
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->nama_mapel; ?></td>

                                                    <td><?php echo $r->uts; ?></td>
                                                    <td><?php echo $r->uts40; ?></td>
                                                    <td><?php echo $r->uas; ?></td>
                                                    <td><?php echo $r->uas40; ?></td>
                                                    <td><?php echo $r->tugas; ?></td>
                                                    <td><?php echo $r->tugas20; ?></td>
                                                    <td><?php echo $r->jumlah; ?></td>
                                                    <td><?php echo $r->am; ?></td>
                                                    <td><?php echo $r->hm; ?></td>
                                                    <td class="text-center">
                                                        <?php if($r->keterangan =="1"){ ?>
                                                        <div class="label round label-table label-success label-large">LULUS</div>
                                                    <?php } ?>
                                                    <?php if($r->keterangan =="0"){ ?>
                                                        <div class="label round label-table label-danger label-large">TL</div>
                                                    <?php } ?>
                                                    </td>

                                                    <td class="text-center" width="100">
                                                        <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>
                       <!--End row-->
               
