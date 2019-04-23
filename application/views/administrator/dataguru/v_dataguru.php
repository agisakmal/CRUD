<table class="table table-bordered">
	<thead>
	<tr>
		<th>No.</th>
		<th>nip</th>
		<th>nama_guru</th>
		<th>id_ekskul</th>
		<th>password</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=0; foreach ($dataguru->result_array() as $k) { $no++; ?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $k['nip']; ?></td>
		<td><?php echo $k['nama_guru']; ?></td>
		<td><?php echo $k['id_ekskul']; ?></td>
		<td><?php echo $k['password']; ?></td>

		<td>
			<a href="<?php echo base_url('index.php/administrator/edit3/'.$k['nip']) ?>" class="btn btn-success">
				<span class="fa fa-edit"></span> Edit
			</a>
			<a href="<?php echo base_url('index.php/administrator/hapus3/'.$k['nip']) ?>" class="btn btn-danger">
				<span class="fa fa-trash"></span> Hapus
			</a>
		</td>
	</tr>
	</tbody>
	<?php } ?>
</table>
