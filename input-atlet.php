<!doctype HTML>
<html>
<head>
	<title>Menampilkan hasil inputan form</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
				<form action="proses-input-atlet.php" method="post">
				  <div class="form-group">
				  	<label for="NIK">NIK</label>
				  	<input type="number"
				  	 name="NIK" class="form-control" placeholder="Isikan Nik">
				  </div>
				 <div class="form-group">
				  	<label for="No_registrasi">No. registrasi</label>
				  	<input type="number" name="No_registrasi" class="form-control" placeholder="Isikan No.registrasi">
				  </div>
				  <div class="form-group">
				  	<label for="Nama">NAMA</label>
				  	<input type="text" name="Nama" class="form-control" placeholder="Isikan Nama">
				  </div>
				  <div class="form-group">
				  	<label for="Tgl_lahir">Tanggal Lahir</label>
				  	<input type="date" name="Tgl_lahir" class="form-control" placeholder="Isikan Tgl lahir">
				  </div>
				  <div class="form-group">
				  	<label for="Tempat_lahir">Tempat Lahir</label>
				  	<input type="text" name="Tempat_lahir" class="form-control" placeholder="Isikan Tempat lahir">
				  </div>
				  <div class="form-group">
				  	<label for="Jenis_kelamin">Jenis Kelamin</label>
				  	<select name="Jenis_kelamin" class="form-control">
				  		<option value="Laki-laki">Laki-laki</option>
				  		<option value="Perempuan">Perempuan</option>
				  	</select>
				  </div>
				  <div class="form-group">
				  	<label for="Tingkatan">Tingkatan</label>
				  	<select name="Tingkatan" class="form-control">
				  		<option value="GEUP_10">GEUP 10|PUTIH</option>
				  		<option value="GEUP_9<">GEUP 9|KUNING</option>
				  		<option value="GEUP_8">GEUP 8|KUNNG STRIP</option>
				  		<option value="GEUP_7">GEUP 7|HIJAU</option>
				  		<option value="GEUP_6">GEUP 6|HIJAU STRIP</option>
				  		<option value="GEUP_5">GEUP 5|BIRU</option>
				  		<option value="GEUP_4">GEUP 4|BIRU STRIP</option>
				  		<option value="GEUP_3">GEUP 3|MERAH</option>
				  		<option value="GEUP_2">GEUP 2|MERAH STRIP I</option>
				  		<option value="DAN_1">DAN 1|HITAM</option>
				  	</select>	
				  </div>
				  <div class="form-group">
				  	<label for="Agama">Agama</label>
				  	<select name="Agama" class="form-control">
				  		<option value="Islam">ISLAM</option>
				  		<option value="Kristen">KRISTEN</option>
				  		<option value="Hindu">HINDU</option>
				  		<option value="Budha">BUDHA</option>
				  		<option value="Konghuchu">KONGHUCHU</option>
				  	</select>
				  </div>
				   <div class="form-group">
				  	<label for="Gol_darah">Golongan Darah</label>
				  	<select name="Gol_darah" class="form-control">
				  		<option value="O">O</option>
				  		<option value="A">A</option>
				  		<option value="B">B</option>
				  		<option value="AB">AB</option>
				  	</select>
				  </div>
				  <div class="form-group">
				  	<label for="Provinsi">Provinsi</label>
				  	<input type="text" name="Provinsi" class="form-control" placeholder="Isikan Provinsi">
				  </div>
				 <div class="form-group">
				  	<label for="Alamat">Alamat</label>
				  	<textarea name="Alamat" class="form-control" placeholder="Isikan Alamat"></textarea>
				  </div>

				  <input type="submit" name="Kirim" value="Simpan" class="btn btn-info">
				  <input type="reset" name="Batal" value="Hapus" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>