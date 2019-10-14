<!DOCTYPE html>
<html>
<head>
	<title>Input Data Diri</title>
</head>
<body>
	<?php echo form_open('siswa/proses'); ?>
	<table>
		<tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
		<tr><td>Alamat</td><td><textarea name="alamat"></textarea></td></tr>
		<tr><td>No Hp</td><td><input type="text" name="nohp"></td></tr>
		<tr><td><input type="submit" name="" value="SIMPAN"></td><td><input type="reset" name="" value="BATAL"></td></tr>
	</table>
<?php echo form_close(); ?>
</body>
</html>