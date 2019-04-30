<form action="<?php echo base_url() ?>index.php/administrator/update2" method="post">
	<input type="hidden" name="nis" value="<?php echo $id ?>">
	<div class="form-group">
		<label>Nama Guru</label><br>
		<input type="text" name="nama_siswa" class="form-control" placeholder="Nama Siswa" value="<?php echo $nama_siswa ?>">
	</div>
	<div class="form-group">
		<label>Username</label><br>
		<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label><br>
		<input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin ?>">
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label><br>
		<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label><br>
		<input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir ?>">
	</div>

	<div class="form-group">
		<label>Alamat</label><br>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $alamat ?>">
	</div>
	<div class="form-group">
		<label>No Hp</label><br>
		<input type="text" name="no_hp" class="form-control" placeholder="No Hp" value="<?php echo $no_hp ?>">
	</div>

	<div class="form-group">
		<input type="submit" name="update2" class="btn btn-primary" value="Update">
	</div>

</form>
