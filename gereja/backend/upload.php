<?php
// Koneksi ke database MySQL
$koneksi = mysqli_connect("localhost", "root", "", "tes");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['gambar'])) {
    $namaFile = $_FILES['gambar']['name']; // nama file asli
    $tmpFile = $_FILES['gambar']['tmp_name']; // path sementara
    $tujuanFile = 'D:/uploads/' . $namaFile; // path tujuan di server

    // Memindahkan file ke lokasi tujuan
    move_uploaded_file($tmpFile, $tujuanFile);

    // Menghasilkan URL gambar
    $urlGambar = 'https://example.com/path/ke/direktori/tujuan/' . $namaFile; // URL lengkap ke file gambar

    // Menyimpan data gambar ke dalam tabel pada database
    $query = "INSERT INTO gambar (nama_gambar, url_gambar) VALUES ('$namaFile', '$urlGambar')";
    mysqli_query($koneksi, $query);

    // Menampilkan gambar pada dashboard
    echo '<h1>Gambar yang diunggah:</h1>';
    echo '<img src="' . $urlGambar . '" alt="Gambar">';
}
?>
