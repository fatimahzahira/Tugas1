<?php

$NIK=$_POST['NIK'];
$No_registrasi=$_POST['No_registrasi'];
$Nama=$_POST['Nama'];
$Tgl_lahir=$_POST['Tgl_lahir'];
$Tempat_lahir=$_POST['Tempat_lahir'];
$Jenis_kelamin=$_POST['Jenis_kelamin'];
$Tingkatan=$_POST['Tingkatan'];
$Agama=$_POST['Agama'];
$Gol_darah=$_POST['Gol_darah'];
$Provinsi=$_POST['Provinsi'];
$Alamat=$_POST['Alamat'];


include "koneksi.php";

$simpan=$koneksi->query("insert into atlet(NIK,No_registrasi,Nama,Tgl_lahir,Tempat_lahir,Jenis_kelamin,Tingkatan,Agama,Gol_darah,Provinsi,Alamat)
				values ('$NIK', '$No_registrasi', '$Nama', '$Tgl_lahir', '$Tempat_lahir', '$Jenis_kelamin', '$Tingkatan', '$Agama', '$Gol_darah', '$Provinsi', '$Alamat')");

if ($simpan==true){

	header("location:tampil-atlet.php?pesan=inputBerhasil");
} else{
	echo "Error";
}


?>
