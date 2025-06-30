<!DOCTYPE html>
<html>
    <head>
        <title>Latihan Kondisi PHP</title>
    </head>
    <body>
        <h1>Cek Nilai</h1>
        <?php 
        $nilai = 95; 
        echo "<p>Nilai Anda: $nilai</p>";

        if ($nilai >= 75) { 
            echo "<p style='color:green;'>Selamat, Anda Lulus!</p>"; 
        } else { 
            echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>";
        }

        // Tambahan elseif untuk kategori nilai
        if ($nilai > 90) {
            echo "<p>Kategori: Sangat Baik</p>";
        } elseif ($nilai > 80) {
            echo "<p>Kategori: Baik</p>";
        } elseif ($nilai > 70) {
            echo "<p>Kategori: Cukup</p>";
        }
        ?> 
    </body>
</html>