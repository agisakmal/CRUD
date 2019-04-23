<table class="table table-bordered">
	<thead>
	<tr>
		<th>No.</th>
		<th>nis</th>
		<th>nama_siswa</th>
		<th>usernama</th>
		<th>jenis_kelamin</th>
		<th>tempat_lahir</th>
		<th>tanggal_lahir</th>
		<th>kelas</th>
		<th>alamat</th>
		<th>no_hp</th>
		<th>semester</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=0; foreach ($datasiswa->result_array() as $k) { $no++; ?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $k['nis']; ?></td>
		<td><?php echo $k['nama_siswa']; ?></td>
		<td><?php echo $k['username']; ?></td>
		<td><?php echo $k['jenis_kelamin']; ?></td>
		<td><?php echo $k['tempat_lahir']; ?></td>
		<td><?php echo $k['tanggal_lahir']; ?></td>
		<td><?php echo $k['kelas']; ?></td>
		<td><?php echo $k['alamat']; ?></td>
		<td><?php echo $k['no_hp']; ?></td>
		<td><?php echo $k['semester']; ?></td>

		<td>
			<a href="<?php echo base_url('index.php/administrator/edit2/'.$k['nis']) ?>" class="btn btn-success">
				<span class="fa fa-edit"></span> Edit
			</a>
			<a href="<?php echo base_url('index.php/administrator/hapus2/'.$k['nis']) ?>" class="btn btn-danger">
				<span class="fa fa-trash"></span> Hapus
			</a>
		</td>
	</tr>
	</tbody>
	<?php } ?>
</table>

