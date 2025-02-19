<?php
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "crud-bnsp");

// Periksa koneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
}


// Query untuk mengambil data dari tabel barang
$query = "SELECT * FROM barang";
$result = mysqli_query($db, $query);

// Periksa apakah query berhasil
if ($result) {
    // Ambil semua data dalam bentuk array asosiatif
    $data_barang = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data_barang[] = $row;
    }
} else {
    $data_barang = []; // Jika query gagal, buat array kosong
}

?>