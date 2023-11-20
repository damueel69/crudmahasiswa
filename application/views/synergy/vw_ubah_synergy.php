<div class="container">
    <h2 class="mt-5 text-center">Edit Synergy</h2>
    <form method="post" action="<?= site_url('Synergy/synergy_edit/' . $synergy->id) ?>" class="col-6 mx-auto">
        <div class="mb-3">
            <label for="nama_synergy" class="form-label">Nama Synergy</label>
            <input type="text" class="form-control" id="nama_synergy" name="nama_synergy" value="<?= $synergy->nama_synergy ?>" required>
            <?= form_error('nama_synergy', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="mb-3">
            <label for="jmlh_hero" class="form-label">Jumlah Hero</label>
            <input type="number" class="form-control" id="jmlh_hero" name="jmlh_hero" value="<?= $synergy->jmlh_hero ?>" required>
            <?= form_error('jmlh_hero', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Edit Synergy</button>
            <a href="<?= site_url('Synergy/synergy_index') ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
