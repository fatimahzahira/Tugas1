<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from atlet where NIK='$id'");

if($hapus==true){

	header("location:tampil-atlet.php?pesan=hapusBerhasil");
} else{

	echo "Error";
}

?>