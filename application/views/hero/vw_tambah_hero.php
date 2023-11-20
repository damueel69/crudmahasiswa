<div class="container">
    <h2 class="mt-5 text-center">Tambah Data Hero</h2>
    <form action="" method="post">
        <div class="mb-3 col-6 mx-auto">
            <label for="nama_hero" class="form-label">Nama Hero</label>
            <input type="text" class="form-control" id="nama_hero" name="nama_hero" value="<?= set_value('nama_hero') ?>">
            <?= form_error('nama_hero', '<div class="text-danger">', '</div'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" value="<?= set_value('role') ?>">
                <option value="">Pilih Role</option>
                <option value="1">Weapon Master</option>
                <option value="2">Summoner</option>
                <option value="3">Archer</option>
                <option value="4">Elementalist</option>
                <option value="5">Mage</option>
                <option value="6">Guardian</option>
                <option value="7">Gunner</option>
                <option value="8">Wrestler</option>
                <option value="9">Swordsman</option>
            </select>
            <?= form_error('role', '<div class="text-danger">', '</div'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto">
            <label for="synergy" class="form-label">Synergy</label>
            <select class="form-select" id="synergy" name="synergy" value="<?= set_value('synergy') ?>">
                <option value="">Pilih Synergy</option>
                <option value="1">Nature Spirit</option>
                <option value="2">Ablaze Bounties</option>
                <option value="3">Astro Power</option>
                <option value="4">S.A.B.E.R</option>
                <option value="5">Prince</option>
                <option value="6">Cadia Riverlands</option>
                <option value="7">Wyrmslayer Warrior</option>
                <option value="8">Northern Vale</option>
                <option value="9">Forsaken Light</option>
                <option value="10">Necrokeep</option>
                <option value="11">Mystic Bureau</option>
            </select>
            <?= form_error('synergy', '<div class="text-danger">', '</div'); ?>
        </div>
        <div class="mb-3 col-6 mx-auto text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
