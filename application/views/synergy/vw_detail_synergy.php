<section class="page-section" id="synergyDetail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Synergy Detail Card-->
                <div class="card">
                    <div class="card-header">
                        Detail Synergy
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama Synergy: <span id="namaSynergy">
                                <?= $synergy->nama_synergy ?>
                            </span></li>
                            <li class="list-group-item">Jumlah Hero: <span id="jmlhHero">
                                <?= $synergy->jmlh_hero ?>
                            </span></li>
                            <a href="<?= site_url('Synergy/synergy_index') ?>" class="btn btn-secondary">Tutup</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
