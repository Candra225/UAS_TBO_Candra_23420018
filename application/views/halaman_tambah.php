<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Isi Form Data Suplier</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>ID Suplier</td>
			<td>:</td>
			<td><input type="text" name="id_suplier"></td>
		</tr>
		<tr>
			<td>Nama Suplier</td>
			<td>:</td>
			<td><input type="text" name="nama_suplier"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>No. Telepon</td>
			<td>:</td>
			<td><input type="text" name="no_telp"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Tambah Suplier</button></td>
		</tr>
	</table>
	</form>
</body>
</html>