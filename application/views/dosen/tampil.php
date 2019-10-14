<?php
echo anchor('dosen/tampil','Tambah Baru'); 
?>

<table border="1">
	<tr><td>No</td> <td>Nama dosen</td> <td>Aksi</td>
	</tr>

	<?php foreach ($tampil as $key => $value) { ?>

		<tr>
			<td><?php echo $value->kode_dosen ?></td>
			<td><?php echo $value->nama_dosen ?></td>
			

			<td> <?php echo anchor('dosen/delete/'.$value->kode_dosen,'Hapus'); ?>
		<?php echo anchor('dosen/edit/'.$value->kode_dosen,'Edit'); ?>
		
			</td>
		</tr>
	<?php } ?>
</table>