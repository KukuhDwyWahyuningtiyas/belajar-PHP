<?php
$perusahaan = "RPL WEB STUDIO";
$nama = "Kukuh Dwy Wahyuningtiyas";
$jabatan = "Junior Web Developer";
$email = "wahyuoks26@gmail.com";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Nama Digital</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="card">
    <h4><?php echo $perusahaan; ?></h4>
    <h1><?php echo $nama; ?></h1>
    <h3><?php echo $jabatan; ?></h3>
    <hr>
    <p>Email: <?php echo $email; ?></p>
</div>

</body>
</html>