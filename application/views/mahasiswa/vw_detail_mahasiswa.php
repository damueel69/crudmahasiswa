
<section class="page-section" id="mahasiswaDetail">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<!-- Mahasiswa Detail Card-->
				<div class="card">
					<div class="card-header">
						Detail Mahasiswa
					</div>
					<div class="card-body">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Nama: <span id="namaMahasiswa">
									<?= $mahasiswa['nama'] ?>
								</span></li>
							<li class="list-group-item">NIM: <span id="nimMahasiswa">
									<?= $mahasiswa['nim'] ?>
								</span></li>
							<li class="list-group-item">Jenis Kelamin: <span id="jenisKelaminMahasiswa">
									<?= $mahasiswa['jenis_kelamin'] ?>
								</span></li>
							<li class="list-group-item">Email: <span id="emailMahasiswa">
									<?= $mahasiswa['email'] ?>
								</span></li>
							<li class="list-group-item">Program Studi: <span id="prodiMahasiswa">
									<?= $mahasiswa['nama_prodi'] ?>
								</span></li>
							<li class="list-group-item">Asal Sekolah: <span id="asalSekolahMahasiswa">
									<?= $mahasiswa['asal_sekolah'] ?>
								</span></li>
							<li class="list-group-item">No HP: <span id="noHpMahasiswa">
									<?= $mahasiswa['no_hp'] ?>
								</span></li>
							<li class="list-group-item">Alamat: <span id="alamatMahasiswa">
									<?= $mahasiswa['alamat'] ?>
								</span></li>
							<a href="<?= site_url('Mahasiswa/') ?>" class="btn btn-secondary">Tutup</a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
