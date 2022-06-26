<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Candra Nugraha</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>CRUD CI Sederhana Daftar Suplier Toko "De Waroeng"</h1>
	<br>
	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Suplier</a>
	<br>
	<br>
	<table border="2">
		<tr>
			<td>No</td>
			<td>ID Suplier</td>
			<td>Nama Suplier</td>
			<td>Alamat</td>
			<td>No. Telp</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryAllSup as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->id_suplier ?></td>
			<td><?php echo $row->nama_suplier ?></td>
			<td><?php echo $row->alamat ?></td>
			<td><?php echo $row->no_telp ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id_suplier ?>">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id_suplier ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	<br>
	
</body>
</html>