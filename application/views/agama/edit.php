<?php echo form_open('agama/update') ?>
<?php echo $judul ?>
<table width="325" border="1">
  <tr>
    <td>Kode Jurusan</td>
    <td><input type="text" value="<?php echo $edit['id_agama'] ?>" name="id_agama" id="id_agama"></td>
  </tr>
  <tr>
    <td>Nama Jurusan</td>
    <td><input type="text" value="<?php echo $edit['nama_agama'] ?>" name="nama_agama" id="nama_agama"></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Simpan"></td>
    <td><input type="reset" name="button2" id="button2" value="Batal"></td>
  </tr>
</table>
<?php echo form_close() ?>