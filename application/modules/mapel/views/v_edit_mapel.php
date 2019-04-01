 
<!--Start Page Title-->
<div class="page-title-box ">
	<h4 class="page-title">Mata Kuliah</h4>
	<ol class="breadcrumb">
		<li> <a href="index.html">Mata Kuliah</a> </li>
		
		<li class="active">Edit Mata Kuliah</li>
	</ol>
	<div class="clearfix"></div>
</div>
<!--End Page Title-->         


<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<h2 class="header-title">Edit Mata Kuliah</h2>
			<form method="post"  action="<?php echo site_url('mapel/proses_edit_mapel/'.$tampil->id_mapel); ?>"  class="form-horizontal">
				<div class="form-group">
					<label class="col-md-2 control-label">Nama</label>
					<div class="col-md-9">
						<input class="form-control" value="<?php echo $tampil->nama_mapel; ?>" name="nama_mapel" type="text">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Kode </label>
					<div class="col-md-9">
						<input class="form-control" value="<?php echo $tampil->kode_mapel; ?>" name="kode_mapel" placeholder="Kode Mata Pelajran" type="text">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Keterangan </label>
					<div class="col-md-9">
						<textarea class="form-control" name="keterangan_mapel" placeholder="Keterangan Mata Kuliah" rows="5"><?php echo $tampil->keterangan_mapel; ?></textarea>
					</div>
				</div>
				<div class="form-group">  
					<div class="col-md-12">
						<div class="col-md-9">
						</div>
						<div class="col-md-3">

							<a href="javascript:history.back()" class="btn btn-warning">Kembali</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>

					</div>
				</div>                                  
			</form>
		</div>
	</div>
</div>
<!--End row-->
