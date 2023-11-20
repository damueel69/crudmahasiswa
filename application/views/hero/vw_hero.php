<section class="page-section portfolio" id="table">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Table Hero</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="text-center mb-3">
            <a href="<?= base_url('Hero/hero_tambah') ?>" class="btn btn-primary">Tambah Hero</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Hero</th>
                        <th>Role</th>
                        <th>Synergy</th>    
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($heroes)): ?>
                        <?php foreach ($heroes as $index => $hero): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $hero->nama_hero ?></td>
                                <td><?= $hero->nama_role ?></td>
                                <td><?= $hero->nama_synergy ?></td>
                                <td>
                                    <a href="<?= base_url('Hero/hero_detail/' . $hero->id) ?>" class="btn btn-info btn-sm">Detail</a>
                                    <a href="<?= base_url('Hero/hero_edit/' . $hero->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('Hero/hero_hapus/' . $hero->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">Tidak ada data hero.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
