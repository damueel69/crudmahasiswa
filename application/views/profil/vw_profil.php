
<section class="page-section portfolio" >
	<div class="container">
		<!-- Portfolio Section Heading-->
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Halaman Profil</h2>
		<!-- Icon Divider-->
		<div class="divider-custom">
			<div class="divider-custom-line"></div>
			<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
			<div class="divider-custom-line"></div>
		</div>
		</section>
	<div class="container-fluid" align="center" >
	<h1 class="h3 mb-4 text-gray-800">
		<?= $judul; ?>
	</h1>
	<div class="card mb-3" style="max-width: 540px;">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="card-img">
			</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">
							<?= $user['nama']; ?>
						</h5>
						<p class="card-text">
						<?= $user['email']; ?>
						</p>
						<p class="card-text"><small class="text-muted">Anggota sejak
								<?= date('d F Y', $user['data_created']); ?>
							</small></p>
					</div>
				</div>
			</div>
		</div>
	</div


