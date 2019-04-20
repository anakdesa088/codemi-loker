
<!--Start Page Title-->
<div class="page-title-box ">
  <h4 class="page-title">PAMBAGIAN MATKUL</h4>
  <ol class="breadcrumb">
    <li> <a href="index.html">AKADEMIK</a> </li>

    <li class="active">PEMBAGIAN MATUKUL</li>
  </ol>
  <div class="clearfix"></div>
</div>
<!--End Page Title-->          



<div class="row">
 <div class="col-md-12">
  <div class="white-box">
    <h2 class="header-title"> PEMBAGIAN MATKUL</h2>


    <table class="table">
      <thead>
        <tr>

      
          
        </tr>


      </thead>

      <tbody>
        
        <tr>
          <?php foreach ($tampil as $r) {
            # code...
          ?>
          <td><?php echo $r->id_kelas; ?></td>
          <?php } ?>
        </tr>
      
      </tbody>
      </table>
      <button type="submit" class="btn btn-info">Simpan</button>

    </form>
  </div>
</div>
</div>
<!-- End  Striped Table-->



<!--End row-->
<script type="text/javascript">
  $('#custom7').on('change', function(){
   $('#hdncustom7').val(this.checked ? 1 : 0);
 });
</script>
