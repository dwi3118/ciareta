<?php echo form_open('agama/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
  <tr>
    <td>Kode Agama</td>
    <td><input type="text" name="kode_agama" id="kode_agama"></td>
  </tr>
  <tr>
    <td>Nama Agama</td>
    <td><input type="text" name="nama_agama" id="nama_agama"></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Simpan"></td>
    <td><input type="reset" name="button2" id="button2" value="Batal"></td>
  </tr>
</table>
<?php echo form_close() ?>