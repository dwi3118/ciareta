<?php echo form_open('jurusan/save') ?>
<?php echo $judul ?>
<table width="325" border="1">
  <tr>
    <td>Kode Jurusan</td>
    <td><input type="text" name="kode_jurusan" id="kode_jurusan"></td>
  </tr>
  <tr>
    <td>Nama Jurusan</td>
    <td><input type="text" name="nama_jurusan" id="nama_jurusan"></td>
  </tr>
  <tr>
    <td><input type="submit" name="button" id="button" value="Simpan"></td>
    <td><input type="reset" name="button2" id="button2" value="Batal"></td>
  </tr>
</table>
<?php echo form_close() ?>