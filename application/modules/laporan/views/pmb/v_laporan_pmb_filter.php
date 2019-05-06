<style type="text/css">

</style>
<div class="page-title-box">
    <h4 class="page-title">Data Table</h4>
    <ol class="breadcrumb">
        <li>
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Table</a>
        </li>
        <li class="active">
            Data Table
        </li>
    </ol>
    <div class="clearfix"></div>
</div>
<!--End Page Title-->          
<?php echo $this->session->flashdata('sukses'); ?>
<div class="row">
  <div class="col-md-12">
                     
                     
                     
                           <div class="white-box">
                             <h2 class="header-title">LAPORAN TRANSAKSI TANGGAL</h2>
                                <form  method="post"  action="<?php echo site_url('laporan/pmb_filter'); ?>" class="form-horizontal">
                                 
                                 <div class="col-md-2">
                                 </div>
                                 <div class="col-md-8">
                                 
                                  <div class="form-group">
                                    <label class="col-md-3 control-label">Tahun Masuk </label>
                                    <div class="col-md-5">
                                      
                                      <select name="tahun_ajaran" class="form-control" >
                                        <?php foreach ($tahun_ajaran as $q): ?>
                                            
                                        
                                          <option value="<?php echo $q->id_tahun_ajaran; ?>"><?php echo $q->tahun_ajarancol; ?></option>
                                          <?php endforeach ?>
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
                     <!--End row-->

<!--Start row-->
<div class="row">
   <div class="col-md-12">
       <div class="white-box">
           <h2 class="header-title">Data Peserta Mahasiswa Baru</h2>
           <div class="table-responsive">
            
            <table id="example" class="display table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Email</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>No Hp</th>
                        <th>Tahun Ajaran</th>
                        
                        
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
                            <td><img src="<?php echo base_url('uploads/'.$r->foto_diri); ?>" width="60" ></td>
                            <td><?php echo $r->email; ?></td>
                            <td><?php echo $r->tmpt_lahir.", ".$r->tgl_lahir; ?></td>
                            <td><?php echo $r->jk; ?></td>
                            <td><?php echo $r->no_hp1; ?></td>
                            <td><?php echo $r->tahun_ajarancol; ?></td>
                            
                            

                            
                            <td>
                                





                            </td>
                        </tr>
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Jumlah : </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>  
        </div>
    </div>
</div>
</div>