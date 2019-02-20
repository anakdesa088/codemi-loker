<?php
$this->load->view($header);
$this->load->view($sidebar);
?>
 <div class="wrapper">
                    <div class="content-main container">
                    
                  <!--Start Page Title-->
               
               

        	<?php  $this->load->view($content,$data); ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
          </div>
<?php 
$this->load->view($footer);
?>