<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="<?php echo site_url('backend/keuangan/c_kirim/'.$tampil->id_pmb); ?>">
	<input type="text" value="<?php echo $tampil->nama_lengkap; ?>" name="name_lengkap">
	<button>Simpan</button>
</form>
</body>
</html>