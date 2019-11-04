<?php
echo anchor('dosen/input','Tambah Baru'); 
?>

<table border="1">
	<tr><td>Nik</td> <td>Kode dosen</td> <td>nama dosen</td> <td>Jenis Kelamin</td> <td>Email</td> <td>Status</td> <td colspan="2" style="text-align: center">Aksi</td>
	</tr>

	<?php foreach ($tampil as $key => $value) { ?>

		<tr>
			<td><?php echo $value->nik ?></td>
			<td><?php echo $value->kode_dosen ?></td>
			<td><?php echo $value->nama_dosen ?></td>
			<td><?php echo $value->jk ?></td>
			<td><?php echo $value->email ?></td>
			<td><?php echo $value->status ?></td>

			<td> <?php echo anchor('dosen/delete/'.$value->nik,'Hapus'); ?>
		<?php echo anchor('dosen/edit/'.$value->nik,'Edit'); ?>
		
			</td>
		</tr>
	<?php } ?>
</table>