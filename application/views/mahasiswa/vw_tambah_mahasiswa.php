
<div class="container">
    <h2 class="mt-5 text-center">Tambah Data Mahasiswa</h2>
    <form action="" method="post">
        <div class="mb-3 col-6 mx-auto">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
			<?= form_error('nama', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim') ?>" >
			<?= form_error('nim', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" >
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
			<?= form_error('jenis_kelamin', '<div class="text-danger">', '</div>') ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" >
			<?= form_error('email', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="prodi" class="form-label">Program Studi</label>
            <select class="form-select" id="nama_prodi" name="nama_prodi" value="<?= set_value('nama_prodi') ?>" >
                <option value="" disabled selected>Pilih Program Studi</option>
                <!-- Daftar program studi bisa di-generate dari database -->
                <option value="1">Informatika</option>
                <option value="2">Sistem Informasi</option>
                <option value="3">Teknik Elektro</option>
                <!-- Tambahkan lebih banyak program studi sesuai kebutuhan -->
            </select>
			<?= form_error('nama_prodi', '<div class="text-danger">', '</div>') ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= set_value('asal_sekolah'); ?>" >
			<?= form_error('asal_sekolah', '<div class="text-danger">', '</div>') ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= set_value('no_hp'); ?>" >
			<?= form_error('no_hp', '<div class="text-danger">', '</div>') ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" value="<?= set_value('alamat'); ?>"></textarea>
			<?= form_error('alamat', '<div class="text-danger">', '</div>')?>
        </div>
        <div class="mb-3 col-6 mx-auto text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>


