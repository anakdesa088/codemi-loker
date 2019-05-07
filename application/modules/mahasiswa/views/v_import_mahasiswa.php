<div class="page-title-box ">
                            <h4 class="page-title">IMPORT MAHASISWA</h4>
                            <ol class="breadcrumb">
                                <li> <a href="index.html">AKADEMIK</a> </li>
                                <li> <a href="#">DATA MAHASISWA</a> </li>
                                <li class="active">IMPORT MAHASISWA</li>
                            </ol>
                            <div class="clearfix"></div>
                         </div>


<div class="row">
                           <div class="col-md-12">
                              <div class="white-box">

         							<div class="button-wrap">
                                        
                                        <div class="col-md-4">
                                        	<a href="<?php echo base_url('excel/format.xlsx'); ?>" class="btn btn-info"><i class="fa fa-download"></i> Download</a>
                                        
                                        </div>
                                        <div class="col-md-4">
                                        	<form method="post" action="<?php echo base_url("mahasiswa/import"); ?>" enctype="multipart/form-data">
                                        	<div class="fileupload btn btn-success">
                                            <span><i class="fa fa-upload"></i> Upload</span>
                                            <input type="file" name="file" class="upload">
                                        	</div> 
                                        	<input class="btn btn-primary" type="submit" name="preview" value="submit">
                                        	</form>
                                        </div>
                                        
                                     </div>




</div>
</div>
</div>


<?php
	if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
		if(isset($upload_error)){ // Jika proses upload gagal
			echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
			die; // stop skrip
		}
		   echo "<div class='row'>
                  <div class='col-md-12'>
                     <div class='white-box'>";
	
		// Buat sebuah tag form untuk proses import data ke database
		echo "<form method='post' action='".base_url("mahasiswa/proses_import")."'>";
		
		// Buat sebuah div untuk alert validasi kosong
		
		
		echo "<div class='table-responsive'>
                                <table class='table table-bordered'>
                              <thead>
                                <tr>
<th>NIM</th>
<th>NAMA LENGKAP</th>
<th>EMAIL</th>
<th>PASSWORD</th>
<th>KEWARGANEGARAAN</th>
<th>JK</th>
<th>TINGGI BADAN</th>
<th>BERAT BADAN</th>
<th>ALAMAT</th>
<th>KODE POS</th>
<th>TMPT LAHIR</th>
<th>TGL LAHIR</th>
<th>NAMA AYAH</th>
<th>NAMA IBU</th>
<th>NO_HP</th>
<th>NO_HP2</th>
<th>INFO DARI</th>
<th>NAMA ASAL SEKOLAH</th>
<th>ALAMAT ASAL SEKOLAH</th>
<th>LEVEL</th>
<th>ID_TAHUN_AJARAN</th>
<th>TAHUN_MASUK</th>
<th>ID_KELAS</th>
<th>ID_DOSEN</th>
<th>ID_SEMESTER</th>

                                </tr>
                              </thead>
";
		
		$numrow = 1;
		$kosong = 0;
		
		// Lakukan perulangan dari data yang ada di excel
		// $sheet adalah variabel yang dikirim dari controller
		foreach($sheet as $row){ 
			// Ambil data pada excel sesuai Kolom
			$nim = $row['A'];
$nama_lengkap = $row['B'];
$email = $row['C'];
$password = $row['D'];
$kewarganegaraan = $row['E'];
$jk = $row['F'];
$tinggi_badan = $row['G'];
$berat_badan = $row['H'];
$alamat = $row['I'];
$kode_pos = $row['J'];
$tmpt_lahir = $row['K'];
$tgl_lahir = $row['L'];
$nama_ayah = $row['M'];
$nama_ibu = $row['N'];
$no_h1 = $row['O'];
$no_hp2 = $row['P'];
$info_dari = $row['Q'];
$nama_asal_sekolah = $row['R'];
$alamat_asal_sekolah = $row['S'];
$level = $row['T'];
$id_tahun_ajaran = $row['U'];
$tahun_masuk = $row['V'];
$id_kelas = $row['W'];
$id_dosen = $row['Q'];
$id_semester = $row['Y'];
			
			// Cek jika semua data tidak diisi
			if(empty($nim) &&
empty($nama_lengkap) &&
empty($email) &&
empty($password) &&
empty($kewarganegaraan) &&
empty($jk) &&
empty($tinggi_badan) &&
empty($berat_badan) &&
empty($alamat) &&
empty($kode_pos) &&
empty($tmpt_lahir) &&
empty($tgl_lahir) &&
empty($nama_ayah) &&
empty($nama_ibu) &&
empty($no_h1) &&
empty($no_hp2) &&
empty($info_dari) &&
empty($nama_asal_sekolah) &&
empty($alamat_asal_sekolah) &&
empty($level) &&
empty($id_tahun_ajaran) &&
empty($tahun_masuk) &&
empty($id_kelas) &&
empty($id_dosen) &&
empty($id_semester) )
				continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
			
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Validasi apakah semua data telah diisi
				$nim_td  = ( ! empty($nim))? "" : " style='background: #E07171;'";
$nama_lengkap_td  = ( ! empty($nama_lengkap))? "" : " style='background: #E07171;'";
$email_td  = ( ! empty($email))? "" : " style='background: #E07171;'";
$password_td  = ( ! empty($password))? "" : " style='background: #E07171;'";
$kewarganegaraan_td  = ( ! empty($kewarganegaraan))? "" : " style='background: #E07171;'";
$jk_td  = ( ! empty($jk))? "" : " style='background: #E07171;'";
$tinggi_badan_td  = ( ! empty($tinggi_badan))? "" : " style='background: #E07171;'";
$berat_badan_td  = ( ! empty($berat_badan))? "" : " style='background: #E07171;'";
$alamat_td  = ( ! empty($alamat))? "" : " style='background: #E07171;'";
$kode_pos_td  = ( ! empty($kode_pos))? "" : " style='background: #E07171;'";
$tmpt_lahir_td  = ( ! empty($tmpt_lahir))? "" : " style='background: #E07171;'";
$tgl_lahir_td  = ( ! empty($tgl_lahir))? "" : " style='background: #E07171;'";
$nama_ayah_td  = ( ! empty($nama_ayah))? "" : " style='background: #E07171;'";
$nama_ibu_td  = ( ! empty($nama_ibu))? "" : " style='background: #E07171;'";
$no_h1_td = ( ! empty($no_h1))? "" : " style='background: #E07171;'";
$no_hp2_td  = ( ! empty($no_hp2))? "" : " style='background: #E07171;'";
$info_dari_td  = ( ! empty($info_dari))? "" : " style='background: #E07171;'";
$nama_asal_sekolah_td  = ( ! empty($nama_asal_sekolah))? "" : " style='background: #E07171;'";
$alamat_asal_sekolah_td  = ( ! empty($alamat_asal_sekolah))? "" : " style='background: #E07171;'";
$level_td  = ( ! empty($level))? "" : " style='background: #E07171;'";
$id_tahun_ajaran_td  = ( ! empty($id_tahun_ajaran))? "" : " style='background: #E07171;'";
$tahun_masuk_td  = ( ! empty($tahun_masuk))? "" : " style='background: #E07171;'";
$id_kelas_td  = ( ! empty($id_kelas))? "" : " style='background: #E07171;'";
$id_dosen_td  = ( ! empty($id_dosen))? "" : " style='background: #E07171;'";
$id_semester_td  = ( ! empty($id_semester))? "" : " style='background: #E07171;'";
				
				// Jika salah satu data ada yang kosong
				if(empty($nim) or
empty($nama_lengkap) or
empty($email) or
empty($password) or
empty($kewarganegaraan) or
empty($jk) or
empty($tinggi_badan) or
empty($berat_badan) or
empty($alamat) or
empty($kode_pos) or
empty($tmpt_lahir) or
empty($tgl_lahir) or
empty($nama_ayah) or
empty($nama_ibu) or
empty($no_h1) or
empty($no_hp2) or
empty($info_dari) or
empty($nama_asal_sekolah) or
empty($alamat_asal_sekolah) or
empty($level) or
empty($id_tahun_ajaran) or
empty($tahun_masuk) or
empty($id_kelas) or
empty($id_dosen) or
empty($id_semester) ){
					$kosong++; // Tambah 1 variabel $kosong
				}
				
				echo "<tr>";
				echo "<td".$nim_td.">".$nim."</td>";
				echo "<td".$nama_lengkap_td.">".$nama_lengkap."</td>";
				echo "<td".$email_td.">".$email."</td>";
				echo "<td".$password_td.">".$password."</td>";
				echo "<td".$kewarganegaraan_td.">".$kewarganegaraan."</td>";
				echo "<td".$jk_td.">".$jk."</td>";
				echo "<td".$tinggi_badan_td.">".$tinggi_badan."</td>";
				echo "<td".$berat_badan_td.">".$berat_badan."</td>";
				echo "<td".$alamat_td.">".$alamat."</td>";
				echo "<td".$kode_pos_td.">".$kode_pos."</td>";
				echo "<td".$tmpt_lahir_td.">".$tmpt_lahir."</td>";
				echo "<td".$tgl_lahir_td.">".$tgl_lahir."</td>";
				echo "<td".$nama_ayah_td.">".$nama_ayah."</td>";
				echo "<td".$nama_ibu_td.">".$nama_ibu."</td>";
				echo "<td".$no_h1_td.">".$no_h1."</td>";
				echo "<td".$no_hp2_td.">".$no_hp2."</td>";
				echo "<td".$info_dari_td.">".$info_dari."</td>";
				echo "<td".$nama_asal_sekolah_td.">".$nama_asal_sekolah."</td>";
				echo "<td".$alamat_asal_sekolah_td.">".$alamat_asal_sekolah."</td>";
				echo "<td".$level_td.">".$level."</td>";
				echo "<td".$id_tahun_ajaran_td.">".$id_tahun_ajaran."</td>";
				echo "<td".$tahun_masuk_td.">".$tahun_masuk."</td>";
				echo "<td".$id_kelas_td.">".$id_kelas."</td>";
				echo "<td".$id_dosen_td.">".$id_dosen."</td>";
				echo "<td".$id_semester_td.">".$id_semester."</td>";
				echo "</tr>";
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
		
		echo "</table>";
		
		// Cek apakah variabel kosong lebih dari 0
		// Jika lebih dari 0, berarti ada data yang masih kosong
		if($kosong > 0){
		?>	
			<script>
			$(document).ready(function(){
				// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
				$("#jumlah_kosong").html('<?php echo $kosong; ?>');
				
				$("#kosong").show(); // Munculkan alert validasi kosong
			});
			</script>
		<?php
		}else{ // Jika semua data sudah diisi
			echo "<hr>";
			
			// Buat sebuah tombol untuk mengimport data ke database
			echo "<button type='submit' class='btn btn-info' name='import'>Import</button>";
			echo "<a href='".base_url("index.php/Siswa")."' class='btn btn-warning'>Cancel</a>";
		}
		
		echo "</form>";
	}
	?>
	</div>
</div>
</div>
</div>