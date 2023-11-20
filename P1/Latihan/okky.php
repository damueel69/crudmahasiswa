<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa SD Gear 6</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Pendaftaran Siswa SD Gear 6</h2>
        <form action="proses_pendaftaran.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <h2>Data Diri</h2>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan" required>
                    </div> <br>
                    <div class="col-md-6">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text" id="nama_panggilan" name="nama_panggilan" required class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" id="laki-laki" name="jenis-kelamin" value="Laki-laki" class="form-check-input">
                        <label for="laki-laki" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="perempuan" name="jenis-kelamin" value="Perempuan" class="form-check-input">
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="asal_tk">Asal TK (Optional)</label>
                    <input type="text" id="asal_tk" name="asal_tk" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="tanggal_daftar">Calon Siswa yang mendaftar minimal
                        <strong>per 1 Juli 2023 Berumur 5 tahun 6 bulan</strong>
                    </label>
                </div>
            </div>
            <br>
           <!-- Lanjutan Form -->
<div class="form-group">
    <h2>Data Kelahiran</h2>
    <div class="form-row">
        <div class="col-md-6">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
        </div>
    </div>
</div>
<br>

<div class="form-group">
    <h2>Data Ayah</h2>
    <div class="form-row">
        <div class="col-md-6">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="alamat_ayah">Alamat Ayah</label>
        <textarea id="alamat_ayah" name="alamat_ayah" class="form-control" rows="3" required></textarea>
    </div>
</div>
<br>

<div class="form-group">
    <h2>Data Ibu</h2>
    <div class="form-row">
        <div class="col-md-6">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
            <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control" required>
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="alamat_ibu">Alamat Ibu</label>
        <textarea id="alamat_ibu" name="alamat_ibu" class="form-control" rows="3" required></textarea>
    </div>
</div>
<br>

<div class="form-group">
    <h2>Data Wali (Jika Ada)</h2>
    <div class="form-row">
        <div class="col-md-6">
            <label for="nama_wali">Nama Wali</label>
            <input type="text" id="nama_wali" name="nama_wali" class="form-control">
        </div>
        <div class="col-md-6">
            <label for="pekerjaan_wali">Pekerjaan Wali</label>
            <input type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="form-control">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="alamat_wali">Alamat Wali</label>
        <textarea id="alamat_wali" name="alamat_wali" class="form-control" rows="3"></textarea>
    </div>
</div>
<br>
<!-- Tambahkan data lainnya yang diperlukan pada form sesuai kebutuhan -->



            <div class="form-group">
                <button type="submit" name="upload" value="Upload" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- Add Bootstrap JS and jQuery (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
