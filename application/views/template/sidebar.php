            <div class="main-container">
                <div class="sidebar-main">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="side-menu">
                             <li class="active">
                              <a href="javascript:void(0)"><i class="ti-dashboard"></i> <span class="menu-label">Dashboard</span></a>
                                
                            </li>
                        <?php if ($this->session->userdata('level') !=='keuangan') {
                    # code...
                  ?>
                          <li>
                         <a href="javascript:void(0)"><i class="ti-new-window"></i> <span class="menu-label">Akademik</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('backend/akademik/index'); ?>">PMB</a></li>
                                <li><a href="apa.html">DATA KELAS</a></li>
                                <li><a href="apa.html">DATA MAHASISWA</a></li>
                                <li><a href="apa.html">DATA DOSEN</a></li>
                                <li><a href="apa.html">DATA MATA KULIAH</a></li>
                                <li><a href="apa.html">CETAK KRS</a></li>
                                <li><a href="apa.html">CETAK KHS</a></li>
                                    
                                </ul>
                            </li>

                <?php } if ($this->session->userdata('level') !=='akademik') {
                    # code...
                  ?>
                            <li>
                                <a href="javascript:void(0)"><i class="ti-email"></i> <span class="menu-label">Keuangan</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('backend/keuangan/index'); ?>">PMB</a></li>
                                <li><a href="APA.HTML">JENIS BIAYA</a></li>
                                <li><a href="APA.HTML">PEMBAYARAN MAHASISWA</a></li>
                                <li><a href="APA.HTML">GAJI DOSEN</a></li>
                                
                                </ul>
                            </li>
                        <?php } ?>


                        <li>
                           <a href="javascript:void(0)"><i class="icon-location-pin"></i> <span class="menu-label">PMB</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="google-map.html"> MAHASISWA</a></li>
                                <li><a href="vector-map.html"> INFORMASI</a></li>
                               </ul>
                            </li>
                        <li>
                           <a href="javascript:void(0)"><i class="ti-email"></i> <span class="menu-label">Layanan Surat</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-sub collapse">
                                <li><a href="<?php echo site_url('backend/surat/pengaturan/index') ?>"> PENGATURAN</a></li>
                                <li><a href="vector-map.html"> INFORMASI</a></li>
                               </ul>
                        </li>

                            <li><a href="widget.html"><i class="icon-docs"></i>  <span class="menu-label">USER </span></a></li>
                            <li><a href="calendar.html"><i class="fa fa-calendar"></i>  <span class="menu-label">DATA USER</span></a></li>
                            
                            
                        </ul>
                    </nav>
                </div>
               <!-- End Sidebar Main-->

                <!--Start wrapperr-->
