<div class="container">
    <h2 class="mt-5 text-center">Tambah Role</h2>
    <form method="post" action="<?= site_url('Role/role_tambah') ?>" class="col-6 mx-auto">
        <div class="mb-3">
            <label for="nama_role" class="form-label">Nama Role</label>
            <input type="text" class="form-control" id="nama_role" name="nama_role" required>
            <?= form_error('nama_role', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="mb-3">
            <label for="jmlh_hero" class="form-label">Jumlah Hero</label>
            <input type="number" class="form-control" id="jmlh_hero" name="jmlh_hero" required>
            <?= form_error('jmlh_hero', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('Role/role_index') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
