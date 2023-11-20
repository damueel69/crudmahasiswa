<br><br><br><br>
<section class="page-section portfolio" id="table_prodi">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Table Prodi</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="text-center mb-3">
            <a href="<?= base_url('index.php/') ?>Prodi/tambah" class="btn btn-primary">Tambah Prodi</a>
        </div>
        <?= $this->session->flashdata('message');?>
        <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Ruangan</th>
                <th>Jurusan</th>
                <th>Akreditasi</th>
                <th>Nama Kaprodi</th>
                <th>Tahun Berdiri</th>
                <th>Output Lulusan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($prodi)) : ?>
                <?php foreach ($prodi as $index => $prd) : ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $prd->nama_prodi ?></td>
                        <td><?= $prd->ruangan ?></td>
                        <td><?= $prd->jurusan ?></td>
                        <td><?= $prd->akreditasi ?></td>
                        <td><?= $prd->nama_kaprodi ?></td>
                        <td><?= $prd->tahun_berdiri ?></td>
                        <td><?= $prd->output_lulusan ?></td>
                        <td><img src="<?=base_url('assets/img/prodi/') . $prd->gambar?>" style="width: 100px;"></td>
                     <!-- Tautan ke halaman detail -->
                     <td>
                                    <a href="<?= base_url('index.php/') ?>Prodi/detail/<?= $prd->id ?>" class="btn btn-info btn-sm">Detail</a>

											<!-- Tautan ke halaman edit -->
											<a href="<?= base_url('index.php/') ?>Prodi/edit/<?= $prd->id ?>" class="btn btn-warning btn-sm">Edit</a>

                                    <!-- Tautan ke halaman konfirmasi hapus -->
                                    <a href="<?= base_url('index.php/') ?>Prodi/hapus/<?= $prd->id ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="9">Tidak ada data program studi.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
                                  
    </div>
</section>

 