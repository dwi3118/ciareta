<?php echo anchor('jurusan/input','Tambah Baru'); ?>
<table border="1">
	<tr><td>No</td> <td>Nama jurusan</td> <td>Aksi</td> </tr>
	<?php foreach ($tampil as $key => $value) { ?>

		<tr>
			<td><?php echo $value->kode_jurusan ?> </td> <td><?php echo $value->nama_jurusan ?> </td> 
			<td> <?php echo anchor('jurusan/delete/'.$value->kode_jurusan,'Hapus'); ?>
		<?php echo anchor('jurusan/edit/'.$value->kode_jurusan,'Edit'); ?>
		
		 </td>
		</tr>

	<?php } ?>

</table>