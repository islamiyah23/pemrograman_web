<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input, textarea {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #2c3e50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            background-color: #ecf0f1;
            padding: 10px;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Digital STITEK Bontang</h1>
        <form method="post" action="">
            <label for="nama">Nama Lengkap :</label>
            <input type="text" id="nama" name="nama">

            <label for="email">Alamat Email :</label>
            <input type="email" id="email" name="email">

            <label for="pesan">Pesan/Komentar :</label>
            <textarea id="pesan" name="pesan" rows="4"></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars(trim($_POST['nama']));
            $email = htmlspecialchars(trim($_POST['email']));
            $pesan = htmlspecialchars(trim($_POST['pesan']));

            $errors = [];
            if (empty($nama)) {
                $errors[] = "Nama lengkap tidak boleh kosong.";
            }
            if (empty($email)) {
                $errors[] = "Alamat email tidak boleh kosong.";
            }
            if (empty($pesan)) {
                $errors[] = "Pesan/komentar tidak boleh kosong.";
            }

            if (!empty($errors)) {
                echo '<div class="result">';
                foreach ($errors as $error) {
                    echo "<div class='error'>" . $error . "</div>";
                }
                echo '</div>';
            } else {
                echo '<div class="result">';
                echo "<strong>Data berhasil dikirim:</strong><br>";
                echo "Nama Lengkap : " . $nama . "<br>";
                echo "Alamat Email : " . $email . "<br>";
                echo "Pesan/Komentar : " . nl2br($pesan) . "<br>";
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>
