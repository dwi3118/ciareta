<?php echo form_open('dosen/update') ?>
<?php echo $judul ?>
<table widht="325" dorder="1">
	<tr>
		<td>NIK</td>
		<td><input type="text" value="<?php echo $edit['nik'] ?>" name="nik" id="nik"></td>
	</tr>

	<tr>
		<td>Kode Dosen</td>
		<td><input type="text" value="<?php echo $edit['kode_dosen'] ?>" name="kode_dosen" id="kode_dosen"></td>
	</tr>

	<tr>
		<td>Nama Dosen</td>
		<td><input type="text" value="<?php echo $edit['nama_dosen'] ?>" name="nama_dosen" id="nama_dosen"></td>
	</tr>

	<tr>
		<td>JK</td>
		<td><input type="text" value="<?php echo $edit['jk'] ?>" name="jk" id="jk"></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input type="text" value="<?php echo $edit['email'] ?>" name="email" id="email"></td>
	</tr>

	<tr>
		<td>Status</td>
		<td><input type="text" value="<?php echo $edit['status'] ?>" name="status" id="status"></td>
	</tr>

	<tr>
		<td><input type="submit" name="button" id="button" value="Simpan"></td>
		<td><input type="reset" name="button2" id="button2" value="Batal"></td>
	</tr>
</table>
<?php echo form_close() ?>