    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    
                  <!--Start Pketerangan_kelas Title-->
                   <div class="pketerangan_kelas-title-box">
                        <h4 class="pketerangan_kelas-title">Table Editable</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Table</a>
                            </li>
                            <li class="active">
                               Table Editable
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                     </div>
                      <!--End Pketerangan_kelas Title-->          


                    <!--Start row-->
                    <div class="row">
                        <div class="col-md-12">
                         <div class="white-box">
                            <h2 class="header-title">Table Editable</h2>
                             <div class="table-responsive">
                                 <table id="edit_table" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Cost</th>
                                            <th>Profit</th>
                                            <th>Fun</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                        
                                    </table>
                                </div>
                             </div>
                         </div>
                    </div>
                    <!--End row-->

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>test_kelas/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        html += '<td id="nama_kelas" contenteditable placeholder="Masukan Nama Kelas"></td>';
        html += '<td id="kode_kelas" contenteditable placeholder="Masukan Kode Kelas"></td>';
        html += '<td id="keterangan_kelas" contenteditable></td>';
        html += '<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-plus"></span></button></td></tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-id_kelas="'+data[count].id_kelas+'" data-column_name="nama_kelas" contenteditable>'+data[count].nama_kelas+'</td>';
          html += '<td class="table_data" data-id_kelas="'+data[count].id_kelas+'" data-column_name="kode_kelas" contenteditable>'+data[count].kode_kelas+'</td>';
          html += '<td class="table_data" data-id_kelas="'+data[count].id_kelas+'" data-column_name="keterangan_kelas" contenteditable>'+data[count].keterangan_kelas+'</td>';
          html += '<td><button type="button" name="delete_btn" id="'+data[count].id_kelas+'" class="btn btn-xs btn-danger btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td></tr>';
        }
        $('tbody').html(html);
      }
    });
  }

  load_data();

  $(document).on('click', '#btn_add', function(){
    var nama_kelas = $('#nama_kelas').text();
    var kode_kelas = $('#kode_kelas').text();
    var keterangan_kelas = $('#keterangan_kelas').text();
    if(nama_kelas == '')
    {
      alert('Masukan Nama Kelas');
      return false;
    }
    if(kode_kelas == '')
    {
      alert('Masukan Kode Kelas');
      return false;
    }
    $.ajax({
      url:"<?php echo base_url(); ?>test_kelas/insert",
      method:"POST",
      data:{nama_kelas:nama_kelas, kode_kelas:kode_kelas, keterangan_kelas:keterangan_kelas},
      success:function(data){
        load_data();
      }
    })
  });

$(document).on('blur', '.table_data', function(){
    var id_kelas = $(this).data('id_kelas');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>test_kelas/update",
      method:"POST",
      data:{id_kelas:id_kelas, table_column:table_column, value:value},
      success:function(data)
      {
        load_data();
      }
    })
  });
  $(document).on('click', '.btn_delete', function(){
    var id_kelas = $(this).attr('id');
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"<?php echo base_url(); ?>test_kelas/delete",
        method:"POST",
        data:{id_kelas:id_kelas},
        success:function(data){
          load_data();
        }
      })
    }
  });
  
});
</script>