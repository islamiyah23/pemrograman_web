<?php 
include 'koneksi_tugas.php';

if (!isset($_GET['id_produk'])) {
    echo "<script>alert('ID Produk tidak ditemukan di URL'); window.location.href='index_tugas.php';</script>";
    exit();
}

$id_produk = $_GET['id_produk']; 
$id_produk = intval($id_produk); 
$sql = "SELECT * FROM produk WHERE id_produk = $id_produk"; 
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<script>alert('Data tidak ditemukan'); window.location.href='index_tugas.php';</script>";
    exit();
}
$row = $result->fetch_assoc(); 
?> 

<!DOCTYPE html> 
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4 text-warning">Form Edit Data Produk</h2>
        <form action="edit.php" method="post" class="bg-white p-4 rounded shadow-sm border"> 
            <input type="hidden" name="id_produk" value="<?php echo $row['id_produk']; ?>"> 

            <div class="mb-3">
                <label class="form-label">Nama Produk:</label>
                <input type="text" name="nama_produk" class="form-control" value="<?php echo $row['nama_produk']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga:</label>
                <input type="number" name="harga" class="form-control" value="<?php echo $row['harga']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stok:</label>
                <input type="number" name="stok" class="form-control" value="<?php echo $row['stok']; ?>" required>
            </div>

            <input type="submit" value="Update" class="btn btn-primary">
            <a href="index_tugas.php" class="btn btn-secondary ms-2">Kembali</a>
        </form>
    </div>
</body>
</html>