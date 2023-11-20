<section class="page-section" id="roleDetail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Role Detail Card -->
                <div class="card">
                    <div class="card-header">
                        Detail Role
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama Role: <span id="namaRole">
                                <?= $role->nama_role ?>
                            </span></li>
                            <li class="list-group-item">Jumlah Hero: <span id="jmlhHero">
                                <?= $role->jmlh_hero ?>
                            </span></li>
                            <a href="<?= site_url('Role/role_index') ?>" class="btn btn-secondary">Tutup</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
