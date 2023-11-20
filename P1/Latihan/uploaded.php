<?php
if (isset($_GET['id'])) {
    $file_id = $_GET['id'];

    // Mengambil data file dari database berdasarkan ID
    $query = "SELECT file_name, file_data FROM uploaded_files WHERE id = $file_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Mengatur header untuk pengunduhan file
        header("Content-Disposition: attachment; filename=" . $row['file_name']);
        header("Content-Type: application/octet-stream");
        header("Content-Length: " . strlen($row['file_data']));

        // Mengirimkan data file ke output
        echo $row['file_data'];
    } else {
        echo "File tidak ditemukan.";
    }
} else {
    echo "ID file tidak valid.";
}

// Tutup koneksi
mysqli_close($conn);
?>