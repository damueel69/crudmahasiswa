<br><br><br><br>
<section class="page-section portfolio" id="detail_prodi">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Detail Program Studi</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="text-center mb-3">
            <!-- Tautan untuk kembali ke halaman sebelumnya -->
            <a href="<?= base_url('index.php/Prodi'); ?>" class="btn btn-primary">Kembali</a>
        </div>

        <!-- Menampilkan detail Program Studi -->
        <div class="row">
            <div class="col-lg-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nama Prodi</th>
                            <td><?= $prodi['nama_prodi'] ?></td>
                        </tr>
                        <tr>
                            <th>Ruangan</th>
                            <td><?= $prodi['ruangan']?></td>
                        </tr>
                        <tr>
                            <th>Jurusan</th>
                            <td><?= $prodi['jurusan']?></td>
                        </tr>
                        <tr>
                            <th>Akreditasi</th>
                            <td><?= $prodi['akreditasi'] ?></td>
                        </tr>
                        <tr>
                            <th>Nama Kaprodi</th>
                            <td><?= $prodi['nama_kaprodi'] ?></td>
                        </tr>
                        <tr>
                            <th>Tahun Berdiri</th>
                            <td><?= $prodi['tahun_berdiri'] ?></td>
                        </tr>
                        <tr>
                            <th>Output Lulusan</th>
                            <td><?= $prodi['output_lulusan'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <!-- Menampilkan gambar Program Studi -->
                <img src="<?= base_url('assets/img/prodi/') . $prodi['gambar']?>" style="max-width: 100%;">
            </div>
        </div>
    </div>
</section>
