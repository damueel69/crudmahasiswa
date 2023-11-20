<br><br><br><br>
<div class="container">
	<h2 class="mt-5 text-center">Edit Data Program Studi</h2>
	<form action="<?= site_url('Prodi/updateData') ?>" method="post">
		<div class="mb-3 col-6 mx-auto">
			<label for="nama_prodi" class="form-label">Nama Program Studi</label>
			<input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="<?= $prodi->nama_prodi ?>"
				required>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="ruangan" class="form-label">Ruangan</label>
			<input type="text" class="form-control" id="ruangan" name="ruangan" value="<?= $prodi->ruangan ?>" required>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="jurusan" class="form-label">Jurusan</label>
			<input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $prodi->jurusan ?>" required>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="akreditasi" class="form-label">Akreditasi</label>
			<input type="text" class="form-control" id="akreditasi" name="akreditasi" value="<?= $prodi->akreditasi ?>"
				required>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="nama_kaprodi" class="form-label">Nama Kaprodi</label>
			<input type="text" class="form-control" id="nama_kaprodi" name="nama_kaprodi"
				value="<?= $prodi->nama_kaprodi ?>" required>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
			<input type="number" class="form-control" id="tahun_berdiri" name="tahun_berdiri"
				value="<?= $prodi->tahun_berdiri ?>" required>
		</div>
		<div class="mb-3 col-6 mx-auto">
			<label for="output_lulusan" class="form-label">Output Lulusan</label>
			<input type="number" class="form-control" id="output_lulusan" name="output_lulusan"
				value="<?= $prodi->output_lulusan ?>" required>
		</div>
		<div class="mb-3 col-6 mx-auto text-center">
			<input type="hidden" name="id" value="<?= $prodi->id ?>">
			<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
		</div>
	</form>
</div>
