<!DOCTYPE html>
<html>
<head>
	<title>Input Data Diri</title>
</head>
<body>
		<?php echo form_open('siswa/proses'); ?>
			<table border="1">
					<tr>
						<td>Nama</td>
							<td> 
								<input type="text" name="nama" value="" placeholder="Masukan nama anda">
							</td>
					</tr>
					<tr>
						<td>Alamat</td>
							<td>
								<textarea name="alamat" value="alamat" placeholder="Masukan Alamat anda"></textarea>
							</td>
					</tr>
					<tr>
						<td>No HP</td>
							<td>
								<input type="text" name="nohp" value="" placeholder="Masukan nomor hp anda">
							</td>
					</tr>
				  	<tr>
					  		<td>
					  			<input type="submit" value="Simpan">
					  		</td>
					  		<td>
					  			<input type="reset" value="Batal">
					  		</td>
				  	</tr>
			</table>
		<?php echo form_close(); ?>
</body>
</html>