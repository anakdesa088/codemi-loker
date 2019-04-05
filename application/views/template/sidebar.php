            <div class="main-container">
                <div class="sidebar-main">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="side-menu">
                        
                            <li class="<?php  echo ($this->uri->segment(1) == 'dashboard') ?  'active' : '' ?>">
                              <a href="<?php echo site_url('dashboard'); ?>"><i class="ti-dashboard"></i> <span class="menu-label">Dashboard</span></a>
                                
                            </li>


                            <li class="<?php echo($this->uri->segment(1) == 'akademik' OR $this->uri->segment(1) == 'kelas' OR $this->uri->segment(1) == 'mahasiswa' OR $this->uri->segment(1) == 'dosen' OR $this->uri->segment(1) == 'mapel' OR $this->uri->segment(1) == 'krs' OR $this->uri->segment(1) == 'khs') ? 'active' : '' ?>">
                                <a href="javascript:void(0)"><i class="fa fa-university"></i> <span class="menu-label">Akademik</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li class="sub-active"><a href="<?php echo site_url('akademik'); ?>">PMB</a></li>

                                <li><a href="<?php echo site_url('kelas');  ?>">DATA KELAS</a></li>
                                <li class="active"><a href="<?php echo site_url('mahasiswa'); ?>">DATA MAHASISWA</a></li>
                                <li><a href="<?php echo site_url('dosen'); ?>">DATA DOSEN</a></li>
                                <li><a href="<?php echo site_url('mapel'); ?>">DATA MATA KULIAH</a></li>
                                <li>
                                    <a href="#"><span class="menu-label">KRS</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <li>  <a href="<?php echo site_url('krs'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> DATA KRS</a></li>
                                        <li>  <a href="<?php echo site_url('cetak_krs'); ?>"> <i class="fa fa-circle-o" aria-hidden="true"></i> CETAK KRS</a></li>
                                        
                                    </ul>
                                 </li> 

                                 <li>
                                    <a href="#"><span class="menu-label">KHS</span> <span class="fa arrow"></span></a>
                                    <ul class="nav nav-sub nav-third-level collapse">                                            
                                        <li>  <a href="#"> <i class="fa fa-circle-o" aria-hidden="true"></i> DATA KHS</a></li>
                                        <li>  <a href="#"> <i class="fa fa-circle-o" aria-hidden="true"></i> CETAK KHS</a></li>
                                        
                                    </ul>
                                 </li> 

                                
                                    
                                </ul>
                            </li>

                
                
                            <li >
                                <a href="javascript:void(0)"><i class="fa fa-money"></i> <span class="menu-label">Keuangan</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('keuangan'); ?>">PMB</a></li>
                                <li><a href="APA.HTML">JENIS BIAYA</a></li>
                                <li><a href="APA.HTML">PEMBAYARAN MAHASISWA</a></li>
                                <li><a href="APA.HTML">GAJI DOSEN</a></li>


                                <li><a href="<?php echo site_url('backend/bau/kode_transaksi'); ?>">KODE TRANSAKSI</a></li>
                                <li><a href="<?php echo site_url('backend/bau/transaksi'); ?>">TRANSAKSI</a></li>                                
                                </ul>
                            </li>
                        


                        <li>
                           <a href="javascript:void(0)"><i class="fa fa-users"></i> <span class="menu-label">PMB</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="google-map.html"> MAHASISWA</a></li>
                                <li><a href="vector-map.html"> INFORMASI</a></li>
                               </ul>
                            </li>
                        <li>
                           <a href="javascript:void(0)"><i class="ti-email"></i> <span class="menu-label">Layanan Surat</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('surat/pengaturan/index') ?>"> PENGATURAN</a></li>
                                <li><a href="vector-map.html"> INFORMASI</a></li>
                               </ul>
                        </li>

                        <li>
                           <a href="javascript:void(0)"><i class="fa fa-clipboard"></i> <span class="menu-label">Laporan</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('surat/pengaturan/index') ?>"> Mahasiswa</a></li>
                                <li><a href="vector-map.html"> PMB</a></li>
                               </ul>
                        </li>

                            <li><a href="widget.html"><i class="icon-docs"></i>  <span class="menu-label">USER </span></a></li>
                            <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="menu-label">DATA USER</span></a></li>
                            
                            
                        </ul>
                    </nav>
                </div>
               <!-- End Sidebar Main-->

                <!--Start wrapperr-->
