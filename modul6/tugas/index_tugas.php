<!DOCTYPE html> 
<html>
    <head>
        <title>Data Produk</title> 
        <!-- Link Bootstrap CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light p-4">
        <div class="container">
            <h2 class="mb-4 text-primary">Daftar Produk</h2>
            <a href="form_tambah.html" class="btn btn-success mb-3">Tambah Produk Baru</a> 
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover"> 
                    <thead class="table-primary"> 
                        <tr>
                            <th>ID Produk</th> 
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php
                        include 'koneksi_tugas.php'; // Menyertakan file koneksi 
                        $sql = "SELECT id_produk, nama_produk, harga, stok FROM produk";
                        $result = $conn->query($sql); 

                        if ($result->num_rows > 0) {
                            // Loop untuk menampilkan setiap baris data 
                            while ($row = $result->fetch_assoc()) { 
                                echo "<tr>"; 
                                echo "<td>" . $row["id_produk"] . "</td>"; 
                                echo "<td>" . $row["nama_produk"] . "</td>";
                                echo "<td>Rp " . number_format($row["harga"], 0, ',', '.') . "</td>"; 
                                echo "<td>" . $row["stok"] . "</td>"; 
                                echo "<td>
                                        <a href='form_edit.php?id_produk=" . $row["id_produk"] . "' class='btn btn-sm btn-warning'>Edit</a> 
                                        <a href='hapus.php?id_produk=" . $row["id_produk"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")' class='btn btn-sm btn-danger'>Hapus</a>
                                    </td>";
                                echo "</tr>";
                            }
                        } else { 
                            echo "<tr><td colspan='5' class='text-center'>Tidak ada data</td></tr>";
                        }
                        $conn->close(); 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>