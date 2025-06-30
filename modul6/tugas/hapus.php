<?php
include 'koneksi_tugas.php'; 

// Mengambil id dari URL 
$id_produk = $_GET['id_produk'];

// Query untuk menghapus data 
$sql = "DELETE FROM produk WHERE id_produk=$id_produk"; 

if ($conn->query($sql) === TRUE) { 
    header("Location: index_tugas.php");
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();