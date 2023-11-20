<section class="page-section" id="heroDetail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Hero Detail Card-->
                <div class="card">
                    <div class="card-header">
                        Detail Hero
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">ID: <span id="heroId">
                                <?= $hero['id'] ?>
                            </span></li>
                            <li class="list-group-item">Nama Hero: <span id="namaHero">
                                <?= $hero['nama_hero'] ?>
                            </span></li>
                            <li class="list-group-item">Role: <span id="roleHero">
                                <?= $hero['role'] ?>
                            </span></li>
                            <li class="list-group-item">Synergy: <span id="synergyHero">
                                <?= $hero['synergy'] ?>
                            </span></li>
                            <a href="<?= site_url('Hero/hero_index') ?>" class="btn btn-secondary">Kembali</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
