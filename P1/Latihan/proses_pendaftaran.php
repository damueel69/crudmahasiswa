<?php
require 'koneksi.php';

//Mengambil Data
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$nama_panggilan = $_POST['nama_panggilan'];
$jenis_kelamin = $_POST['jenis-kelamin'];
$asal_tk = $_POST['asal_tk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_kelahiran = $_POST['tanggal_kelahiran'];
$no_akta = $_POST['no_akta'];
$nik = $_POST['nik'];
$sesuai_akta = $_POST['sesuai_akta'];
$sesuai_kk = $_POST['sesuai_kk'];
$status_anak = $_POST['status_anak'];
$jumlah_saudara_kandung = $_POST['jumlah_saudara_kandung'];
$kewarganegaraan = $_POST['kewarganegaraan'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
$diderita = $_POST['diderita'];
$bb = $_POST['bb'];
$tb = $_POST['tb'];
$gol_darah = $_POST['gol_darah'];
$alamat = $_POST['alamat'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];
$kota_desa = $_POST['kota_desa'];
$kode_pos = $_POST['kode_pos'];
$alamat_domisili = $_POST['alamat_domisili'];
$kecamatan_domisili = $_POST['kecamatan_domisili'];
$kelurahan_domisili = $_POST['kelurahan_domisili'];
$kota_desa_domisili = $_POST['kota_desa_domisili'];
$kode_pos_domisili = $_POST['kode_pos_domisili'];
$tinggal_bersama = $_POST['tinggal_bersama'];
$jenis_tinggal = $_POST['jenis_tinggal'];
$jarak_kesekolah = $_POST['jarak_kesekolah'];
$transportasi = $_POST['transportasi'];
$penerima_bantuan = $_POST['penerima_bantuan'];
$jenis_bantuan = $_POST['jenis_bantuan'];
$no_tanda_bantuan = $_POST['no_tanda_bantuan'];
$nama_lengkap_ayah = $_POST['nama_lengkap_ayah'];
$nik_ayah = $_POST['nik_ayah'];
$tanggal_lahir_ayah = $_POST['tanggal_lahir_ayah'];
$pendidikan_akhir_ayah = $_POST['pendidikan_akhir_ayah'];
$kode_area_ayah = $_POST['kode_area_ayah'];
$no_hp_ayah = $_POST['no_hp_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_ayah = $_POST['penghasilan_ayah'];
$nama_lengkap_ibu = $_POST['nama_lengkap_ibu'];
$nik_ibu = $_POST['nik_ibu'];
$tanggal_lahir_ibu = $_POST['tanggal_lahir_ibu'];
$pendidikan_akhir_ibu = $_POST['pendidikan_akhir_ibu'];
$kode_area_ibu = $_POST['kode_area_ibu'];
$no_hp_ibu = $_POST['no_hp_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$nama_lengkap_wali = $_POST['nama_lengkap_wali'];
$nik_wali = $_POST['nik_wali'];
$tanggal_lahir_wali = $_POST['tanggal_lahir_wali'];
$pendidikan_akhir_wali = $_POST['pendidikan_akhir_wali'];
$kode_area_wali = $_POST['kode_area_wali'];
$no_hp_wali = $_POST['no_hp_wali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$penghasilan_wali = $_POST['penghasilan_wali'];

//Query
$query = "INSERT INTO data_gabungan (
    nama_depan, nama_belakang, nama_panggilan, jenis_kelamin, asal_tk, tempat_lahir, tanggal_kelahiran, no_akta, nik, sesuai_akta,
     sesuai_kk, status_anak, jumlah_saudara_kandung, kewarganegaraan, berkebutuhan_khusus, diderita, bb, tb, gol_darah, alamat, kecamatan, 
     kelurahan, kota_desa, kode_pos, alamat_domisili, kecamatan_domisili, kelurahan_domisili, kota_desa_domisili, kode_pos_domisili, tinggal_bersama, 
     jenis_tinggal, jarak_kesekolah, transportasi, penerima_bantuan, jenis_bantuan, no_tanda_bantuan, nama_lengkap_ayah, nik_ayah, tanggal_lahir_ayah, 
     pendidikan_akhir_ayah, kode_area_ayah, no_hp_ayah, pekerjaan_ayah, penghasilan_ayah, nama_lengkap_ibu, nik_ibu, tanggal_lahir_ibu, pendidikan_akhir_ibu,
    kode_area_ibu, no_hp_ibu, pekerjaan_ibu, penghasilan_ibu, nama_lengkap_wali, nik_wali, tanggal_lahir_wali, pendidikan_akhir_wali, kode_area_wali, no_hp_wali,
    pekerjaan_wali, penghasilan_wali)
     VALUES
    ('$nama_depan', '$nama_belakang', '$nama_panggilan', '$jenis_kelamin', '$asal_tk', '$tempat_lahir', '$tanggal_kelahiran', '$no_akta', '$nik', '$sesuai_akta', 
    '$sesuai_kk', '$status_anak', '$jumlah_saudara_kandung', '$kewarganegaraan', '$berkebutuhan_khusus', '$diderita', '$bb', '$tb', '$gol_darah', '$alamat', '$kecamatan',
     '$kelurahan', '$kota_desa', '$kode_pos', '$alamat_domisili', '$kecamatan_domisili', '$kelurahan_domisili', '$kota_desa_domisili', '$kode_pos_domisili', 
     '$tinggal_bersama', '$jenis_tinggal', '$jarak_kesekolah', '$transportasi', '$penerima_bantuan', '$jenis_bantuan', '$no_tanda_bantuan', '$nama_lengkap_ayah',
      '$nik_ayah', '$tanggal_lahir_ayah', '$pendidikan_akhir_ayah', '$kode_area_ayah', '$no_hp_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$nama_lengkap_ibu', 
      '$nik_ibu', '$tanggal_lahir_ibu', '$pendidikan_akhir_ibu', '$kode_area_ibu', '$no_hp_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$nama_lengkap_wali', '$nik_wali', 
      '$tanggal_lahir_wali', '$pendidikan_akhir_wali', '$kode_area_wali', '$no_hp_wali', '$pekerjaan_wali', '$penghasilan_wali')";

if ($conn->query($query) === TRUE) {
    echo "Data berhasil disimpan ke dalam tabel data_gabungan.";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}

// Tutup koneksi
mysqli_close($conn);
?>
