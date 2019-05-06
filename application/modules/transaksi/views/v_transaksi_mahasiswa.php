<style type="text/css">
  thead,th,td,{
    font-size: 12px;
  }
</style>
<div class="page-title-box">
                        <h4 class="page-title">TRANSAKSI MAHASISWA</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">KEUANGAN</a>
                            </li>
                            
                            <li class="active">
                                <th>TRANSAKSI MAHASISWA</th>
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Page Title-->          
           
        
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">

                               <div class="white-box">
                                   <h2 class="header-title">DATA TRANSAKSI MAHASISWA</h2>
                                   <div class="row">
                                   <div class="col-md-9">

                                    </div>
                                    <div class="col-md-2">
 
                                    </div>
                                  </div>
                                   <hr>
                                    <div class="table-responsive">
                                     <table id="example" class="display table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nim</th>
                                                    <th>Kode</th>
                                                    <th>Jenis Pembayaran</th>
                                                    <th>Nominal</th>
                                                    <th>Tanggal</th>
                                                    <th>Keterangan</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                 foreach ($tampil as $r) {
                                                    # code...
                                                ?>
                                                <tr>
                                                  <?php
                                                  $date=date_create($r->tanggal_transaksi);
                                                  $tanggal_transaksi = date_format($date,"d-m-Y");
                                                   ?>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $r->nama_lengkap; ?></td>
                                                    <td><?php echo $r->nim; ?></td>
                                                    <td><?php echo $r->kode_transaksi; ?></td>
                                                    <td><?php echo $r->nama_jp; ?></td>
                                                    <td><?php echo "Rp. ".$r->nominal_bayar; ?></td>
                                                    <td><?php $id = $r->id_transaksi; echo $tanggal_transaksi ?></td>
                                                    <td><?php echo $r->keterangan; ?></td>
                                                     <td class="text-center">
                                                      <?php 
                                                      if ($r->status == "LUNAS") {
                                                        ?>
                                                        <span class="label round label-success">LUNAS</span>
                                                        <?php
                                                      }else{
                                                        ?>
                                                        <span class="label round label-danger">BELUM LUNAS</span>
                                                        <?php
                                                      }
                                                      ?>
                                                    </td>

                                                    
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                           </table>  
                                    </div>
                               </div>
                           </div>
                       </div>
                       <!--End row-->
               
