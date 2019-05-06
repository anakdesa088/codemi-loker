            <div class="main-container">
                <div class="sidebar-main">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="side-menu">

                            <li class="<?php  echo ($this->uri->segment(1) == 'dashboard') ?  'active' : '' ?>">
                              <a href="<?php echo site_url('dashboard'); ?>"><i class="ti-dashboard"></i> <span class="menu-label">Dashboard</span></a>

                          </li>


                          <li class="<?php echo($this->uri->segment(1) == 'akademik' OR $this->uri->segment(1) == 'kelas' OR $this->uri->segment(1) == 'mahasiswa' OR $this->uri->segment(1) == 'dosen' OR $this->uri->segment(1) == 'mapel' OR $this->uri->segment(1) == 'krs' OR $this->uri->segment(1) == 'khs' ) ? 'active' : '' ?>">
                            <a href="javascript:void(0)"><i class="fa fa-university"></i> <span class="menu-label">Akademik</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-sub collapse">
                                <li class="sub-active"><a href="<?php echo site_url('akademik'); ?>">PMB</a></li>

                                <li><a href="<?php echo site_url('kelas');  ?>">DATA KELAS</a></li>
                                <li class="active"><a href="<?php echo site_url('mahasiswa'); ?>">DATA MAHASISWA</a></li>
                                <li>

                                    <a href="#"><span class="menu-label">DATA DOSEN</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <a href="<?php echo site_url('dosen'); ?>"><i class="fa fa-circle-o" aria-hidden="true"></i> DATA DOSEN</a>
                                        <li>  <a href="<?php echo site_url('dosen_wali'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> DOSEN WALI</a></li>
                                        
                                    </ul>
                                </li>
                                <li>

                                    <a href="#"><span class="menu-label">MATA KULIAH</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <a href="<?php echo site_url('mapel'); ?>"><i class="fa fa-circle-o" aria-hidden="true"></i> MATA KULIAH</a>
                                        <li>  <a href="<?php echo site_url('pembagian_matkul'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> PEMBAGIAN MATKUL</a></li>
                                        
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#"><span class="menu-label">KRS</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <li>  <a href="<?php echo site_url('krs'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> DATA KRS</a></li>
                                        <li>  <a href="<?php echo site_url('krs/cetak_krs'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> CETAK KRS</a></li>
                                        
                                    </ul>
                                </li> 

                                <li>
                                    <a href="#"><span class="menu-label">KHS</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <li>  <a href="<?php echo site_url('khs'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> DATA KHS</a></li>
                                        <li>  <a href="<?php echo site_url('khs/cetak_khs'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> CETAK KHS</a></li>
                                        
                                    </ul>
                                </li> 

                                

                            </ul>
                        </li>

                        <li >
                            <a href="javascript:void(0)"><i class="fa fa-money"></i> <span class="menu-label">Keuangan</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('keuangan'); ?>">PMB</a></li>
                                <li><a href="<?php echo site_url('jenis_pembayaran'); ?>">JENIS PEMBAYARAN</a></li>
                                <li><a href="<?php echo site_url('pembayaran_mhs'); ?>">PEMBAYARAN MAHASISWA</a></li>
                                <li><a href="<?php echo site_url('kode_transaksi'); ?>">KODE TRANSAKSI</a></li>
                                <li><a href="<?php echo site_url('transaksi'); ?>">TRANSAKSI</a></li>                                
                            </ul>
                        </li>

                        
                    <li>
                     <a href="javascript:void(0)"><i class="ti-email"></i> <span class="menu-label">LAYANAN SURAT</span><span class="fa arrow"></span></a>
                     <ul class="nav nav-sub collapse">
                        <li><a href="<?php echo site_url('surat/pengaturan/index') ?>"> PENGATURAN</a></li>
                        <li><a href="vector-map.html"> INFORMASI</a></li>
                    </ul>
                </li>

                <li>
                 <a href="javascript:void(0)"><i class="fa fa-clipboard"></i> <span class="menu-label">LAPORAN</span><span class="fa arrow"></span></a>
                 <ul class="nav nav-sub collapse">
                    <li><a href="<?php echo site_url('surat/pengaturan/index') ?>"> MAHASISWA</a></li>
                    <li><a href="<?php echo site_url('laporan/pmb'); ?>"> PMB</a></li>
                    <li><a href="<?php echo site_url('laporan/transaksi'); ?>">Lap Transaksi</a></li>
                </ul>
            </li>

            <li class="<?php echo($this->uri->segment(1) == 'pengumuman' ) ? 'active' : '' ?>"><a href="<?php echo site_url('pengumuman'); ?>"><i class="fa fa-bullhorn"></i>  <span class="menu-label">PENGUMUMAN</span></a></li>

            <li class="<?php echo($this->uri->segment(1) == 'pengumuman' ) ? 'active' : '' ?>"><a href="<?php echo site_url('pengumuman'); ?>"><i class="fa fa-user"></i>  <span class="menu-label">PENGGUNA</span></a></li>
            
            <li>
                     <a href="javascript:void(0)"><i class="fa fa-wrench"></i>  <span class="menu-label">PENGATURAN</span><span class="fa arrow"></span></a>
                     <ul class="nav nav-sub collapse">
                        <li><a href="<?php echo site_url('semester') ?>"> SET SEMESTER</a></li>
                        <li><a href="<?php echo site_url('tahun_ajaran') ?>"> SET TAHUN AJARAN</a></li>
                    </ul>
                </li>



        </ul>
    </nav>
</div>
<!-- End Sidebar Main-->

<!--Start wrapperr-->
