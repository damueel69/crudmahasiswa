<?php
// Periksa apakah tombol "Upload" ditekan
if(isset($_POST["upload"])) {
    // Periksa apakah tidak ada kesalahan saat unggah file
    if($_FILES["filename"]["error"] == 0) {
        // Ambil nama file yang diunggah
        $filename = $_FILES["filename"]["name"];

        // Baca isi file yang diunggah
        $file_data = file_get_contents($_FILES["filename"]["tmp_name"]);

        // Buat koneksi ke database MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "pendaftaran_tk_t";

        $conn = mysqli_connect($servername, $username, $password, $database);

        // Periksa apakah koneksi berhasil
        if (!$conn) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        // Siapkan pernyataan SQL untuk menyimpan data ke dalam tabel
        $insert_query = "INSERT INTO uploaded_files (file_name, file_data) VALUES (?, ?)";

        // Persiapkan pernyataan SQL
        $stmt = mysqli_prepare($conn, $insert_query);

        // Bind parameter
        mysqli_stmt_bind_param($stmt, "ss", $filename, $file_data);

        // Eksekusi pernyataan SQL
        if (mysqli_stmt_execute($stmt)) {
            echo "File berhasil diunggah dan data disimpan ke dalam database.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Tutup pernyataan SQL dan koneksi
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    } else {
        echo "Error saat mengunggah file.";
    }
}
?>
