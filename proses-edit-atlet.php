<?php

include "koneksi.php";

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

$Ubah=$koneksi->query("UPDATE atlet set NIK='$NIK', No_registrasi='$No_registrasi', Nama='$Nama', Tgl_lahir='$Tgl_lahir', Tempat_lahir='$Tempat_lahir', Jenis_kelamin='$Jenis_kelamin', Tingkatan='$Tingkatan', Agama='$Agama', Gol_darah='$Gol_darah', Provinsi='$Provinsi', Alamat='$Alamat' where NIK='$id'");

if ($Ubah==true){

	header("location:tampil-atlet.php?pesan=editBerhasil");
} else{
	echo "Error";
}


?>
