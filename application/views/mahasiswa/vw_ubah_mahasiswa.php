
<div class="container">
    <h2 class="mt-5 text-center">Edit Data Mahasiswa</h2>
    <form action="" method="post">
		<input type="hidden" name="id" value="<?=$mahasiswa['id'];?>">
		<div class="mb-3 col-6 mx-auto">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama" value="<?=$mahasiswa['nama'];?>" >
			<?= form_error('nama', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="nim" class="form-label">NIM</label>
			<input type="text" class="form-control" id="nim" name="nim" value="<?=$mahasiswa['nim'];?>">
			<?= form_error('nim', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
			<select class="form-select" id="jenis_kelamin" name="jenis_kelamin" >
				<option value="L" <?= ($mahasiswa['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>Laki-Laki</option>
				<option value="P" <?= ($mahasiswa['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
			</select>
			<?= form_error('jenis_kelamin', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" id="email" name="email" value="<?=$mahasiswa['email'];?>">
			<?= form_error('email', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="prodi" class="form-label">Program Studi</label>
			<select class="form-select" id="nama_prodi" name="nama_prodi" >
				<option value="1" <?= ($mahasiswa['nama_prodi'] == 1) ? 'selected' : ''; ?>>Informatika</option>
				<option value="2" <?= ($mahasiswa['nama_prodi'] == 2) ? 'selected' : ''; ?>>Sistem Informasi</option>
				<option value="3" <?= ($mahasiswa['nama_prodi'] == 3) ? 'selected' : ''; ?>>Teknik Elektro</option>
				<!-- Tambahkan lebih banyak program studi sesuai kebutuhan -->
			</select>
			<?= form_error('nama_prodi', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="asal_sekolah" class="form-label">Asal Sekolah</label>
			<input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
			value="<?=$mahasiswa['asal_sekolah'];?>">
			<?= form_error('asal_sekolah', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="no_hp" class="form-label">No HP</label>
			<input type="text" class="form-control" id="no_hp" name="no_hp"  value="<?=$mahasiswa['no_hp'];?>">
			<?= form_error('no_hp', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto">
    		<label for="alamat" class="form-label">Alamat</label>
    		<textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $mahasiswa['alamat']; ?></textarea>
			<?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>
		</div>
		<div class="mb-3 col-6 mx-auto text-center">
			<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
		</div>
	</form>
</div>
