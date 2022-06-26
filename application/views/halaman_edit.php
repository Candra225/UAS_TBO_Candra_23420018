<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Suplier</title>
</head>
<body>
	<h3>Form Edit Suplier</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
	<tr>
			<td>ID Suplier</td>
			<td>:</td>
			<td><input type="text" name="id_suplier" value="<?php echo $querySupDetail->id_suplier ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama_suplier" value="<?php echo $querySupDetail->nama_suplier ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $querySupDetail->alamat ?>"></td>
		</tr>
		<tr>
			<td>No. Telepon</td>
			<td>:</td>
			<td><input type="text" name="no_telp" value="<?php echo $querySupDetail->no_telp ?>"></td>
		</tr>
		<tr>
			<td colspan="3">
				<br>
				<button type="submit">Update Suplier</button></td>
		</tr>
	</table>
	</form>
</body>
</html>