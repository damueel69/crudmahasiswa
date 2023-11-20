<section class="page-section portfolio" id="table">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Table Synergy</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="text-center mb-3">
            <a href="<?= base_url('Synergy/synergy_tambah') ?>" class="btn btn-primary">Tambah Synergy</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Synergy</th>
                        <th>Jumlah Hero</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($synergies)): ?>
                        <?php foreach ($synergies as $index => $synergy): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $synergy->nama_synergy ?></td>
                                <td><?= $synergy->jmlh_hero ?></td>
                                <td>
                                    <a href="<?= base_url('Synergy/synergy_detail/' . $synergy->id) ?>" class="btn btn-info btn-sm">Detail</a>
                                    <a href="<?= base_url('Synergy/synergy_edit/' . $synergy->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('Synergy/synergy_hapus/' . $synergy->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Tidak ada data synergy.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
