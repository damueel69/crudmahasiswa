<div class="container">
    <h2 class="mt-5 text-center">Edit Data Hero</h2>
    <form action="" method="post">
        <div class="mb-3 col-6 mx-auto">
            <label for="nama_hero" class="form-label">Nama Hero</label>
            <input type="text" class="form-control" id="nama_hero" name="nama_hero" value="<?= set_value('nama_hero', $hero['nama_hero']) ?>">
            <?= form_error('nama_hero', '<div class="text-danger">', '</div'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="role" class a="form-label">Role</label>
            <select class="form-select" id="role" name="role">
                <option value="">Pilih Role</option>
                <option value="1" <?php if ($hero['role'] == 1) echo 'selected'; ?>>Weapon Master</option>
                <option value="2" <?php if ($hero['role'] == 2) echo 'selected'; ?>>Summoner</option>
                <option value="3" <?php if ($hero['role'] == 3) echo 'selected'; ?>>Archer</option>
                <option value="4" <?php if ($hero['role'] == 4) echo 'selected'; ?>>Elementalist</option>
                <option value="5" <?php if ($hero['role'] == 5) echo 'selected'; ?>>Mage</option>
                <option value="6" <?php if ($hero['role'] == 6) echo 'selected'; ?>>Guardian</option>
                <option value="7" <?php if ($hero['role'] == 7) echo 'selected'; ?>>Gunner</option>
                <option value="8" <?php if ($hero['role'] == 8) echo 'selected'; ?>>Wrestler</option>
                <option value="9" <?php if ($hero['role'] == 9) echo 'selected'; ?>>Swordsman</option>
            </select>
            <?= form_error('role', '<div class="text-danger">', '</div'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="synergy" class="form-label">Synergy</label>
            <select class="form-select" id="synergy" name="synergy">
                <option value="">Pilih Synergy</option>
                <option value="1" <?php if ($hero['synergy'] == 1) echo 'selected'; ?>>Nature Spirit</option>
                <option value="2" <?php if ($hero['synergy'] == 2) echo 'selected'; ?>>Ablaze Bounties</option>
                <option value="3" <?php if ($hero['synergy'] == 3) echo 'selected'; ?>>Astro Power</option>
                <option value="4" <?php if ($hero['synergy'] == 4) echo 'selected'; ?>>S.A.B.E.R</option>
                <option value="5" <?php if ($hero['synergy'] == 5) echo 'selected'; ?>>Prince</option>
                <option value="6" <?php if ($hero['synergy'] == 6) echo 'selected'; ?>>Cadia Riverlands</option>
                <option value="7" <?php if ($hero['synergy'] == 7) echo 'selected'; ?>>Wyrmslayer Warrior</option>
                <option value="8" <?php if ($hero['synergy'] == 8) echo 'selected'; ?>>Northern Vale</option>
                <option value="9" <?php if ($hero['synergy'] == 9) echo 'selected'; ?>>Forsaken Light</option>
                <option value="10" <?php if ($hero['synergy'] == 10) echo 'selected'; ?>>Necrokeep</option>
                <option value="11" <?php if ($hero['synergy'] == 11) echo 'selected'; ?>>Mystic Bureau</option>
            </select>
            <?= form_error('synergy', '<div class="text-danger">', '</div'); ?>
        </div>
        <input type="hidden" name="id" value="<?= $hero['id'] ?>">
        <div class="mb-3 col-6 mx-auto text-center">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>
