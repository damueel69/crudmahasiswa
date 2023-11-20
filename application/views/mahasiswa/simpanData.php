<?php
// Pastikan Anda telah memiliki koneksi ke database sebelumnya

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Ambil data dari form
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$email = $_POST['email'];
	$prodi = $_POST['prodi'];
	$asal_sekolah = $_POST['asal_sekolah'];
	$no_hp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];

	// Lakukan validasi data sesuai kebutuhan

	// Selanjutnya, jalankan query SQL untuk melakukan insert
	$query = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, email, prodi, asal_sekolah, no_hp, alamat) 
              VALUES ('$nama', '$nim', '$jenis_kelamin', '$email', '$prodi', '$asal_sekolah', '$no_hp', '$alamat')";

	// Eksekusi query
	$result = mysqli_query($koneksi, $query);

	if ($result) {
		// Jika insert berhasil, bisa redirect atau menampilkan pesan sukses
		echo "Data mahasiswa berhasil disimpan.";
		// Anda bisa tambahkan kode redirect jika diperlukan
	} else {
		// Jika terjadi error saat insert, tampilkan pesan error
		echo "Error: " . mysqli_error($koneksi);
	}

	// Tutup koneksi ke database jika sudah tidak digunakan
	mysqli_close($koneksi);
}
?>
