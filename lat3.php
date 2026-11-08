<?php
// 1. Menyiapkan data
$nama = "Kukuh Dwy Wahyuningtiyas";
$peran = "Web Developer";
$warna_tema = "#2e9dcc";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>

    <style>
        /* 2. Menuliskan CSS untuk mengatur tampilan */
        .kartu-profil {
            border: 2px solid <?php echo $warna_tema; ?>; /* Mengisi warna border lewat PHP */
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            font-family: Arial, sans-serif;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .nama {
            color: #333333;
            margin-bottom: 5px;
        }

        .peran {
            color: <?php echo $warna_tema; ?>; /* Warna teks dinamis */
            font-weight: bold;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- 3. Menampilkan data ke dalam struktur HTML -->
    <div class="kartu-profil">
        <h2 class="nama"><?php echo $nama; ?></h2>
        <p class="peran"><?php echo $peran; ?></p>

        <button style="background-color: <?php echo $warna_tema; ?>; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer;">
            Hubungi Saya
        </button>
    </div>

</body>
</html>