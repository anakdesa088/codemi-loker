
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
               
                   
                       <!--Start row-->
                       <div class="row">
                           <div class="col-md-12">
                               <div class="row">
                               
                                   <div class="col-md-3 col-sm-6">
                                       <div class="tiles-style1 white-box">
                                           <div class="tiles-icon text-primary"> <i class="fa fa-users"></i>  </div>
                                           <div class="tiles-text text-right">
                                            <?php 
                                            $query = $this->db->query('SELECT * FROM pmb');

                                             $pmb = $query->num_rows();
                                            ?>
                                               <h4>PMB</h4>
                                               <span><?php echo $pmb; ?></span>
                                           </div>
                                     </div>
                                   </div><!-- /.col-md-3-->
                                   
                                  <div class="col-md-3 col-sm-6">
                                        <div class="tiles-style1 white-box">
                                           <div class="tiles-icon text-success"> <i class="fa fa-graduation-cap"></i>  </div>
                                           <div class="tiles-text text-right">
                                               <?php 
                                            $query = $this->db->query('SELECT * FROM mahasiswa');

                                             $mahasiswa = $query->num_rows();
                                            ?>
                                               <h4>Mahasiswa</h4>
                                               <span><?php echo $mahasiswa; ?></span>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-3-->

                                  <div class="col-md-3 col-sm-6">
                                       <div class="tiles-style1 white-box">
                                            <div class="tiles-icon  text-warning "> <i class="icon-user"></i>  </div>
                                           <div class="tiles-text text-right">
                                            <?php 
                                            $query = $this->db->query('SELECT * FROM dosen');

                                             $dosen = $query->num_rows();
                                            ?>
                                               <h4>Dosen</h4>
                                               <span><?php echo $dosen; ?></span>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-3-->

                                  <div class="col-md-3 col-sm-6">
                                        <div class="tiles-style1 white-box">
                                            <div class="tiles-icon text-danger"> <i class="fa fa-list"></i>  </div>
                                           <div class="tiles-text text-right">
                                            <?php 
                                            $query = $this->db->query('SELECT * FROM kelas');

                                             $kelas = $query->num_rows();
                                            ?>
                                               <h4>Kelas</h4>
                                               <span><?php echo $kelas; ?></span>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-3-->
                                   
                               </div>
                           </div>
                       </div>
                       <!--End row-->
               
               
                 <!--End row-->
                  <div class="row"> 
                       <div class="col-md-8">
                           <div class="white-box">
                              <h2  class="header-title m-b-10">Kehadiran Siswa</h2 >
                                 <ul class="list-inline text-right">
                                  <li>
                                    <h5 class="font-normal"><i class="fa fa-circle m-r-5" style="color:#3CB7EB"></i></h5>
                                  </li>
                                  <li>
                                    <h5 class="font-normal"><i class="fa fa-circle m-r-5" style="color:#6E8CD7"></i></h5>
                                  </li>
                                  <li>
                                    <h5 class="font-normal"><i class="fa fa-circle m-r-5" style="color:#00A5A8"></i></h5>
                                  </li>
                                </ul>
                                 <div id="morris-sales-dash" style="height:320px;"></div>
                            </div>
                       </div><!-- /col-md-6-->
                    
                       <div class="col-md-4">
                          <div class="white-box">
                              <h2 class="header-title">Total </h2>
                              <div id="morris-dash1"></div>
                          </div>
                      </div><!-- /col-md-6-->
                    
                     </div>
                  <!--End row-->
               
              
               <!--Start row-->
               <div class="row">
                  <div class="col-md-6">
                    <div class="white-box">
                          <h2 class="header-title"> Last orders </h2>
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                  <thead>
                                    <tr>
                                      <th>Order ID</th>
                                      <th>Date</th>
                                      <th>Customer</th>
                                      <th class="text-center">Status</th>
                                      <th class="text-right">Price</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>#8564</td>
                                      <td> 2016/01/07 </td>
                                      <td>Jonathan Doe</td>
                                      <td class="text-center"><span class="label round label-primary">Completed</span></td>
                                      <td class="text-right"> $ 580 </td>
                                    </tr>
                                    <tr>
                                      <td>#3528</td>
                                      <td> 2016/01/07 </td>
                                      <td>Jonathan Doe</td>
                                      <td class="text-center"><span class="label round label-warning">On hold</span></td>
                                      <td class="text-right"> $ 967 </td>
                                    </tr>
                                    <tr>
                                      <td>#9654</td>
                                      <td> 2016/01/07 </td>
                                      <td>Anthony</td>
                                      <td class="text-center"><span class="label round label-info">Pending</span></td>
                                      <td class="text-right"> $ 5820 </td>
                                    </tr>
                                    <tr>
                                      <td>#7528</td>
                                      <td> 2016/01/07 </td>
                                      <td>Jonathan Doe</td>
                                      <td class="text-center"><span class="label round label-danger">Cancelled</span></td>
                                      <td class="text-right"> $ 203 </td>
                                    </tr>
                                    <tr>
                                      <td>#3526</td>
                                      <td> 2016/01/07 </td>
                                      <td>Jonathan Doe</td>
                                      <td class="text-center"><span class="label round label-primary">Completed</span></td>
                                      <td class="text-right"> $ 864 </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                   </div> <!--/.col-md-8-->
                 
                   <div class="col-md-6">
                      <div class="white-box">
                          <h2 class="header-title">Total Sales</h2>
                            <ul class="list-inline text-center m-t-10">
                              <li>
                                <h5 class="font-normal"><i class="fa fa-circle m-r-5" style="color:#00A5A8;"></i>Laptops</h5>
                              </li>
                              <li>
                                <h5 class="font-normal"><i class="fa fa-circle m-r-5" style="color: #3CB7EB;"></i>Mobiles</h5>
                              </li>
                            </ul>
                            <div id="total-revenue"  style="height:260px;"></div>
                        </div>
                  </div><!-- /col-md-6-->

              </div>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/morris-chart/raphael-min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/morris-chart/morris.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/pages/dashboard2.js') ?>"></script>  