<!DOCTYPE html>
<html>
<head>
	<title>Data Atlet</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">	
		<h1>Data Atlet</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){

?>
		<div class="alert alert-success">
			Penyimpanan Berhasil!
		</div>
	<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusBerhasil"){

?>
		<div class="alert alert-success">
			Data Berhasil Dihapus!
		</div>
	<?php

}

?>

<?php

if(@$_GET['pesan']=="editBerhasil"){

?>
		<div class="alert alert-success">
			Perubahan Berhasil!
		</div>
	<?php

}

?>
		<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
			<thead>
				<tr>
					<td>NIK</td><td>No. Registrasi</td><td>Nama Atlet</td><td>Tgl Lahir</td><td>Tempat Lahir</td><td>Jenis kelamin</td><td>Tingkatan</td><td>Agama</td><td>Golongan Darah</td><td>Provinsi</td><td>Alamat</td>
					<th>
						<a href="input-atlet.php">
							<button class="btn-info glyphicon glyphicon-plus"></button>
						</a>
				</tr>
			</thead>
			<tbody>
			<?php

	include "koneksi.php";
	$sql=$koneksi->query("select * from atlet order by NIK ASC");

	while($row= $sql->fetch_assoc()){
	?>

	<tr>
		<td><?php echo $row['NIK']?></td>
		<td><?php echo $row['No_registrasi']?></td>
		<td><?php echo $row['Nama']?></td>
		<td><?php echo $row['Tgl_lahir']?></td>
		<td><?php echo $row['Tempat_lahir']?></td>
		<td><?php echo $row['Jenis_kelamin']?></td>
		<td><?php echo $row['Tingkatan']?></td>
		<td><?php echo $row['Agama']?></td>
		<td><?php echo $row['Gol_darah']?></td>
		<td><?php echo $row['Provinsi']?></td>
		<td><?php echo $row['Alamat']?></td>
	<td>

		<a href="edit-atlet.php?id=<?php echo $row['NIK']?>">
			<button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
		</a>
		<a href="hapus-atlet.php?id=<?php echo $row['NIK']?>" onclick=" return confirm('Anda yakin menghapus data?')">
			<button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
		</a>


		</td>
	</tr>

<?php
	}
	?>
</tbody>
</table>
</div>
</div>
</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
</body>
</html>
</body>
</html>