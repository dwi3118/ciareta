<?php echo form_open('dosen/save') ?>
<?php echo $judul ?>
<tate
ble width="325" border="1">
	<tr>
		<td>NIK</td>
		<td><input type="text" name="nik" id="nik"></td>
	</tr>

	<tr>
		<td>Kode Dosen</td>
		<td><input type="text" name="kode_dosen" id="kode_dosen"></td>
	</tr>

	<tr>
		<td>Nama Dosen</td>
		<td><input type="text" name="nama_dosen" id="nama_dosen"></td>
	</tr>

	<tr>
		<td>JK</td>
		<td><input type="text" name="jk" id="jk"></td>
	</tr>

	<tr>
		<td>Eamil</td>
		<td><input type="text" name="email" id="email"></td>
	</tr>

	<tr>
		<td>Status</td>
		<td><input type="text" name="status" id="status"></td>
	</tr>

	<tr>
    <td><input type="submit" name="button" id="button" value="Simpan"></td>
    <td><input type="reset" name="button2" id="button2" value="Batal"></td>
  </tr>
</table>