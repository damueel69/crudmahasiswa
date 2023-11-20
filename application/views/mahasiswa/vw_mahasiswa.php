<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">
			<!-- Masthead Avatar Image-->
			<!-- Masthead Heading-->
			<h1 class="masthead-heading text-uppercase mb-0">Damuel University</h1>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Masthead Subheading-->
			<p class="masthead-subheading font-weight-light mb-0">Hendecagram</p>
		</div>
	</header>

<section class="page-section portfolio" id="table">
	<div class="container">
		<!-- Portfolio Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Table Mahasiswa</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>

		<div class="text-center mb-3">
			<a href="<?= base_url('index.php/') ?>Mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
<?= $this->session->flashdata('message');?>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mahasiswa)): ?>
				<?php foreach ($mahasiswa as $index => $mhs): ?>
					 <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $mhs['nama'] ?></td>
                            <td><?= $mhs['nim'] ?></td>
                            <td><?= $mhs['email'] ?></td>
                            <td>
							<!-- Tombol Detail -->
							 <a href="<?= base_url('Mahasiswa/detail/' . $mhs['id']) ?>" class="btn btn-info btn-sm">Detail</a>
                                <a href="<?= base_url('Mahasiswa/edit/' . $mhs['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('Mahasiswa/hapus/' . $mhs['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>

										</td>
									</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="5">Tidak ada data mahasiswa.</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>


		</div>
	</div>
</section>

