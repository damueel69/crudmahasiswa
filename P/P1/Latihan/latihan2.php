<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="psb2.css">

</head>
<body >
    <h2>Pendaftaran Siswa Baru SD Maple</h2>
    <form action="proses_pendaftaran.php" method="POST" enctype="multipart/form-data">
        <div class="input_data_diri">
            <h2>Data Diri</h2>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan" required>
            <input type="text" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" required>
            <br><br>

            <label for="nama_panggilan">Nama Panggilan</label>
            <input type="text" id="nama_panggilan" name="nama_panggilan" required>
            <br><br>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="radio" id="laki-laki" name="jenis-kelamin" value="Laki-laki">
            <label for="laki-laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis-kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label>
            <br><br>
            
            <label for="asal-tk">Asal TK (Optional)</label>
            <input type="text" id="asal_tk" name="asal_tk">
            <br><br>

            <label for="tanggal_daftar">Calon Siswa yang mendaftar minimal
                 <strong>per 1 Juli 2023 Berumur 5 tahun 6 bulan</strong>
            </label>                
            
        </div>
        <br><br>

        <div class="input_data_kelahiran">
            <h2>Data Kelahiran</h2>
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir">
            <br><br>

            <label for="tanggal_kelahiran">Tanggal Kelahiran</label>
            <input type="date" id="tanggal_kelahiran" name="tanggal_kelahiran" required>
            <br><br>

            <label for="no_akta">No. Akta Lahir</label>
            <input type="number" id="no_akta" name="no_akta">
            <br><br>

            <label for="nik">NIK</label>
            <input type="number" id="nik" name="nik">
            <br><br>

            <label for="anak_ke">Anak Ke</label>
            <input type="text" id="sesuai_akta" name="sesuai_akta" placeholder="Sesuai Akta" required>
            <input type="text" id="sesuai_kk" name="sesuai_kk" placeholder="Sesuai KK" required>
            <br><br>

            <label for="status_anak">Status Anak</label>
            <select name="status_anak" id="status_anak">
            <option value="">Silahkan Pilih</option>
            <option value="Kandung">Kandung</option>
            <option value="Tiri">Tiri</option>
            <option value="Angkat">Angkat</option>
            <option value="Titipan">Titipan</option>
            </select>
            <br><br>
            
            <label for="jumlah_saudara_kandung">Jumlah Saudara Kandung</label>
            <input type="number" id="jumlah_saudara_kandung" name="jumlah_saudara_kandung" required>
            <br><br>

            <label for="kewarganegaraan">Kewarganegaraan</label>
            <select id="kewarganegaraan" name="kewarganegaraan" required>
            <option value="">Silahkan Pilih</option>
            <option value="WNI Keturunan">WNI Keturunan</option>
            <option value="WNI">WNI</option>
            </select>
            <br><br>

            <label for="berkebutuhan_khusus">Anak Berkebutuhan Khusus</label>
            <input type="radio" id="ya" name="berkebutuhan_khusus" value="Ya">
            <label for="ya">Ya</label>
            <input type="radio" id="tidak" name="berkebutuhan_khusus" value="Tidak">
            <label for="tidak">Tidak</label>
            <br><br>

            <label for="keadaan_jasmani">Keadaan Jasmani</label>
            <input type="text" id="diderita" name="diderita" placeholder="Riwayat Penyakit" requirerd>
            <br>
            <input type="text" id="bb" name="bb" placeholder="Berat Badan" required>
            <br>
            <input type="text" id="tb" name="tb" placeholder="Tinggi Badan" required>
            <br>
            <input type="text" id="gol_darah" name="gol_darah" placeholder="Golongan Darah" required>
            <br><br>

            <label for="alamat_kk">Alamat Sesuai KK</label>
            <input type="text" id="alamat" name="alamat" placeholder="Alamat (beserta RT/RW)" required>
            <br>
            <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
            <br>
            <input type="text" id="kelurahan" name="kelurahan" placeholder="Kelurahan" required>
            <br>
            <input type="text" id="kota_desa" name="kota_desa" placeholder="Kota/Desa" required>
            <br>
            <input type="number" id="kode_pos" name="kode_pos" placeholder="Kode Pos" required>
            <br><br>

            <label for="alamat_domisili">Alamat Domisili/Yang Ditinggali</label>
            <input type="text" id="alamat_domisili" name="alamat_domisili" placeholder="Alamat (beserta RT/RW)" required>
            <br>
            <input type="text" id="kecamatan_domisili" name="kecamatan_domisili" placeholder="Kecamatan" required>
            <br>
            <input type="text" id="kelurahan_domisili" name="kelurahan_domisili" placeholder="Kelurahan" required>
            <br>
            <input type="text" id="kota_desa_domisili" name="kota_desa_domisili" placeholder="Kota/Desa" required>
            <br>
            <input type="number" id="kode_pos_domisili" name="kode_pos_domisili" placeholder="Kode Pos" required>
        </div>
        <br><br>
        
        <div class="data_tambahan">
        <h2>Data Tambahan</h2>

            <label for="tinggal_bersama">Tinggal Bersama</label>
            <select name="tinggal_bersama" id="tinggal_bersama">
            <option value="">Silahkan Pilih</option>
            <option value="Orangtua">Orangtua</option>
            <option value="Wali">Wali</option>
            </select>
            <br><br>
            
            <label for="jenis_tinggal">Jenis Tinggal</label>
            <select name="jenis_tinggal" id="tinggal_bersama">
            <option value="">Silahkan Pilih</option>
            <option value="Rumah Sendiri">Rumah Sendiri</option>
            <option value="Kontrak">Kontrak</option>
            <option value="Kost">Kost</option>
            <option value="Panti Asuhan">Panti Asuhan</option>
            <option value="Asrama">Asrama</option>
            </select>
            <br><br>

            <label for="jarak_kesekolah">Jarak Kesekolah</label>
            <input type="text" id="jarak_kesekolah" name="jarak_kesekolah" placeholder="meter/kilometer" required>
            <br><br>

            <label for="transportasi">Alat Transportasi</label>
            <select name="transportasi" id="transportasi">
            <option value="">Please Select</option>
            <option value="Transportasi Umum (Bemo, Gojek, Grab, Taksi)">Transportasi Umum (Bemo, Gojek, Grab, Taksi)</option>
            <option value="Becak">Becak</option>
            <option value="Jalan Kaki">Jalan Kaki</option>
            <option value="Mobil">Mobil</option>
            <option value="Sepeda">Sepeda</option>
            <option value="Sepeda Motor">Sepeda Motor</option>
            </select>
            <br><br>

            <label for="penerima_bantuan">Penerima Bantuan</label>
            <input type="radio" id="Ya" name="penerima_bantuan" value="Ya">
            <label for="Ya">Ya</label>
            <input type="radio" id="Tidak" name="penerima_bantuan" value="Tidak">
            <label for="Tidak">Tidak</label>
            <br><br>

            <label for="jenis_bantuan">Penerima Bantuan</label>
            <br>
            <input type="radio" id="bsm" name="jenis_bantuan" value="BSM">
            <label for="bsm">BSM</label>
            <br>
            <input type="radio" id="bidak_misi" name="jenis_bantuan" value="Bidak Misi">
            <label for="bidak_misi">Bidak Misi</label>
            <br>
            <input type="radio" id="pip" name="jenis_bantuan" value="PIP">
            <label for="pip">PIP</label>
            <br>
            <input type="radio" id="kks" name="jenis_bantuan" value="KKS">
            <label for="kks">KKS</label>
            <br>
            <input type="radio" id="phk" name="jenis_bantuan" value="PHK">
            <label for="phk">PHK</label>
            <br>
            <input type="radio" id="lainnya" name="jenis_bantuan" value="">
<           <input type="text" id="lainnya_value" name="jenis_bantuan" placeholder="Lainnya">
            <br><br>

            <label for="no_tanda_bantuan">No Tanda Bantuan</label>
            <input type="text" id="no_tanda_bantuan" name="no_tanda_bantuan">
            <br><br>
        </div>

        <div class="data_father">
        <h2>Data Ayah</h2>
        <label for="data_ayah">Data Ayah</label>    
        <input type="text" id="nama_lengkap_ayah" name="nama_lengkap_ayah" placeholder="Nama Lengkap" required>
        <input type="text" id="nik_ayah" name="nik_ayah" placeholder="NIK" required>
        <input type="date" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" placeholder="Tanggal Lahir" required>
        <input type="text" id="pendidikan_akhir_ayah" name="pendidikan_akhir_ayah" placeholder="Pendidikan Akhir" required>
        <br><br>

        <label for="no_telpon_ayah">No Telpon</label>
        <input type="text" id="kode_area_ayah" name="kode_area_ayah" placeholder="Area Code (+62)" required>
        <input type="text" id="no_hp_ayah" name="no_hp_ayah" placeholder="No HP" required>
        <br><br>

        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
        <br>
            <input type="radio" id="buruh" name="pekerjaan_ayah" value="Buruh">
            <label for="buruh">Buruh</label>
            <br>
            <input type="radio" id="karyawan_swasta" name="pekerjaan_ayah" value="Karyawan Swasta">
            <label for="karyawan_swasta">Karyawan Swasta</label>
            <br>
            <input type="radio" id="pedagang_kecil" name="pekerjaan_ayah" value="Pedagang Kecil">
            <label for="pedagang_kecil">Pedagang Kecil</label>
            <br>
            <input type="radio" id="pedagang_besar" name="pekerjaan_ayah" value="Pedagang Besar">
            <label for="pedagang_besar">Pedagang Besar</label>
            <br>
            <input type="radio" id="pensiunan" name="pekerjaan_ayah" value="Pensiunan">
            <label for="pensiunan">Pensiunan</label>
            <br>
            <input type="radio" id="pns_tni_polri" name="pekerjaan_ayah" value="PNS/TNI/POLRI">
            <label for="pns_tni_polri">PNS/TNI/POLRI</label>
            <br>
            <input type="radio" id="sudah_meninggal" name="pekerjaan_ayah" value="Sudah Meninggal">
            <label for="sudah_meninggal">Sudah Meninggal</label>
            <br>
            <input type="radio" id="tidak_bekerja" name="pekerjaan_ayah" value="Tidak Bekerja">
            <label for="tidak_bekerja">Tidak Bekerja</label>
            <br>
            <input type="radio" id="wiraswasta" name="pekerjaan_ayah" value="Wiraswasta">
            <label for="wiraswasta">Wiraswasta</label>
            <br>
            <input type="radio" id="lainnya" name="pekerjaan_ayah" value="">
<           <input type="text" id="lainnya_value" name="pekerjaan_ayah" placeholder="Lainnya">
            <br><br>

            <label for="penghasilan_ayah">Penghasilan Ayah</label>
            <select name="penghasilan_ayah" id="penghasilan_ayah">
            <option value="">Silahkan dipilih</option>
            <option value="Tidak ada Penghasilan">Tidak ada Penghasilan</option>
            <option value="Rp 0 - Rp 500.000">Rp 0 - Rp 500.000</option>
            <option value="Rp 500.00 - Rp 1.000.000">Rp 500.00 - Rp 1.000.000</option>
            <option value="Rp 1.50.000 - Rp 2.500.000">Rp 1.50.000 - Rp 2.500.000</option>
            <option value="Rp 3.000.000 - Rp 5.000.000">Rp 3.000.000 - Rp 5.000.000</option>
            <option value="Diatas Rp 5.000.000">Diatas Rp 5.000.000</option>
            </select>
        </select>
        </div>

        <div class="data_mother">
        <h2>Data Ibu</h2>
        <label for="data_ibu">Data Ibu</label>    
        <input type="text" id="nama_lengkap_ibu" name="nama_lengkap_ibu" placeholder="Nama Lengkap" required>
        <input type="text" id="nik_ibu" name="nik_ibu" placeholder="NIK" required>
        <input type="date" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="Tanggal Lahir" required>
        <input type="text" id="pendidikan_akhir_ibu" name="pendidikan_akhir_ibu" placeholder="Pendidikan Akhir" required>
        <br><br>

        <label for="no_telpon_ibu">No Telpon</label>
        <input type="text" id="kode_area_ibu" name="kode_area_ibu" placeholder="Area Code (+62)" required>
        <input type="text" id="no_hp_ibu" name="no_hp_ibu" placeholder="No HP" required>
        <br><br>

        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
        <br>
            <input type="radio" id="buruh" name="pekerjaan_ibu" value="Buruh">
            <label for="buruh">Buruh</label>
            <br>
            <input type="radio" id="karyawan_swasta" name="pekerjaan_ibu" value="Karyawan Swasta">
            <label for="karyawan_swasta">Karyawan Swasta</label>
            <br>
            <input type="radio" id="pedagang_kecil" name="pekerjaan_ibu" value="Pedagang Kecil">
            <label for="pedagang_kecil">Pedagang Kecil</label>
            <br>
            <input type="radio" id="pedagang_besar" name="pekerjaan_ibu" value="Pedagang Besar">
            <label for="pedagang_besar">Pedagang Besar</label>
            <br>
            <input type="radio" id="pensiunan" name="pekerjaan_ibu" value="Pensiunan">
            <label for="pensiunan">Pensiunan</label>
            <br>
            <input type="radio" id="pns_tni_polri" name="pekerjaan_ibu" value="PNS/TNI/POLRI">
            <label for="pns_tni_polri">PNS/TNI/POLRI</label>
            <br>
            <input type="radio" id="sudah_meninggal" name="pekerjaan_ibu" value="Sudah Meninggal">
            <label for="sudah_meninggal">Sudah Meninggal</label>
            <br>
            <input type="radio" id="tidak_bekerja" name="pekerjaan_ibu" value="Tidak Bekerja">
            <label for="tidak_bekerja">Tidak Bekerja</label>
            <br>
            <input type="radio" id="wiraswasta" name="pekerjaan_ibu" value="Wiraswasta">
            <label for="wiraswasta">Wiraswasta</label>
            <br>
            <input type="radio" id="lainnya" name="pekerjaan_ibu" value="">
<           <input type="text" id="lainnya_value" name="pekerjaan_ibu" placeholder="Lainnya">
            <br><br>

            <label for="penghasilan_ibu">Penghasilan Ibu</label>
            <select name="penghasilan_ibu" id="penghasilan_ibu">
            <option value="">Silahkan dipilih</option>
            <option value="Tidak ada Penghasilan">Tidak ada Penghasilan</option>
            <option value="Rp 0 - Rp 500.000">Rp 0 - Rp 500.000</option>
            <option value="Rp 500.00 - Rp 1.000.000">Rp 500.00 - Rp 1.000.000</option>
            <option value="Rp 1.50.000 - Rp 2.500.000">Rp 1.50.000 - Rp 2.500.000</option>
            <option value="Rp 3.000.000 - Rp 5.000.000">Rp 3.000.000 - Rp 5.000.000</option>
            <option value="Diatas Rp 5.000.000">Diatas Rp 5.000.000</option>
            </select>
        </select>
        </div>
        
        
        <div class="data_wali_class">
        <h2>Data Wali</h2>
        <label for="data_wali">Data Wali</label>    
        <input type="text" id="nama_lengkap_wali" name="nama_lengkap_wali" placeholder="Nama Lengkap" required>
        <input type="text" id="nik_wali" name="nik_wali" placeholder="NIK" required>
        <input type="date" id="tanggal_lahir_wali" name="tanggal_lahir_wali" placeholder="Tanggal Lahir" required>
        <input type="text" id="pendidikan_akhir_wali" name="pendidikan_akhir_wali" placeholder="Pendidikan Akhir" required>
        <br><br>

        <label for="no_telpon_wali">No Telpon</label>
        <input type="text" id="kode_area_wali" name="kode_area_wali" placeholder="Area Code (+62)" required>
        <input type="text" id="no_hp_wali" name="no_hp_wali" placeholder="No HP" required>
        <br><br>

        <label for="pekerjaan_wali">Pekerjaan Wali</label>
        <br>
            <input type="radio" id="buruh" name="pekerjaan_wali" value="Buruh">
            <label for="buruh">Buruh</label>
            <br>
            <input type="radio" id="karyawan_swasta" name="pekerjaan_wali" value="Karyawan Swasta">
            <label for="karyawan_swasta">Karyawan Swasta</label>
            <br>
            <input type="radio" id="pedagang_kecil" name="pekerjaan_wali" value="Pedagang Kecil">
            <label for="pedagang_kecil">Pedagang Kecil</label>
            <br>
            <input type="radio" id="pedagang_besar" name="pekerjaan_wali" value="Pedagang Besar">
            <label for="pedagang_besar">Pedagang Besar</label>
            <br>
            <input type="radio" id="pensiunan" name="pekerjaan_wali" value="Pensiunan">
            <label for="pensiunan">Pensiunan</label>
            <br>
            <input type="radio" id="pns_tni_polri" name="pekerjaan_wali" value="PNS/TNI/POLRI">
            <label for="pns_tni_polri">PNS/TNI/POLRI</label>
            <br>
            <input type="radio" id="sudah_meninggal" name="pekerjaan_wali" value="Sudah Meninggal">
            <label for="sudah_meninggal">Sudah Meninggal</label>
            <br>
            <input type="radio" id="tidak_bekerja" name="pekerjaan_wali" value="Tidak Bekerja">
            <label for="tidak_bekerja">Tidak Bekerja</label>
            <br>
            <input type="radio" id="wiraswasta" name="pekerjaan_wali" value="Wiraswasta">
            <label for="wiraswasta">Wiraswasta</label>
            <br>
            <input type="radio" id="lainnya" name="pekerjaan_wali" value="">
<           <input type="text" id="lainnya_value" name="pekerjaan_wali" placeholder="Lainnya">
            <br><br>

            <label for="penghasilan_wali">Penghasilan Wali</label>
            <select name="penghasilan_wali" id="penghasilan_wali">
            <option value="">Silahkan dipilih</option>
            <option value="Tidak ada Penghasilan">Tidak ada Penghasilan</option>
            <option value="Rp 0 - Rp 500.000">Rp 0 - Rp 500.000</option>
            <option value="Rp 500.00 - Rp 1.000.000">Rp 500.00 - Rp 1.000.000</option>
            <option value="Rp 1.50.000 - Rp 2.500.000">Rp 1.50.000 - Rp 2.500.000</option>
            <option value="Rp 3.000.000 - Rp 5.000.000">Rp 3.000.000 - Rp 5.000.000</option>
            <option value="Diatas Rp 5.000.000">Diatas Rp 5.000.000</option>
            </select>
        </select>
        </div>
        <br>
        <div class="file">
        <ul> Ketentuan File
            <li>File yang diupload atau di unggah adalah file asli (bukan fotocopy-an)</li>
        </ul>
        <br>
        <label for="file_akta">Akta Kelahiran Calon Siswa [JPEG/JPG/PDF/PNG]:</label>
        <br>
        <input type="file" id="file_akta" name="file_akta" accept=".jpg, .jpeg, .png, .pdf" >
        <br><br>

        <label for="file_ksk">Kartu Sususan Keluarga(KSK) [JPEG/JPG/PDF/PNG]:</label>
        <br>
        <input type="file" id="file_ksk" name="file_ksk" accept=".jpg, .jpeg, .png, .pdf">
        <br><br>

        <label for="file_ktp">Kartu Tanda Penduduk (KTP)
            Orang Tua/ Wali [JPEG/JPG/PDF/PNG]:</label>
            <br>
        <input type="file" id="file_ktp" name="file_ktp" accept=".jpg, .jpeg, .png, .pdf">
        <br><br>

        <label for="file_surat_baptis">Surat Pemandian/Baptis bagi yang
            beragama Katolik [JPEG/JPG/PDF/PNG]:</label>
            <br>
        <input type="file" id="file_surat_baptis" name="file_surat_baptis" accept=".jpg, .jpeg, .png, .pdf">
        <br><br>
        </div>
        
        <div class="button">
    <button type="submit" name="upload" value="Upload">Submit </button>
            </div>
        
    </form>
</body>
</html>
