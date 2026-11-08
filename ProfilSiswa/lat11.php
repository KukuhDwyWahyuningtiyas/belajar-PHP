<?php
$nama = "Kukuh Dwy Wahyuningtiyas";
$tempat_lahir = "Trenggalek";
$tanggal_lahir = "23 Mei 2009";

$nilai_desain = 95;
$nilai_web = 92;

define("KKM", 75);

$rata_rata = ($nilai_desain + $nilai_web) / 2;

if ($rata_rata >= KKM) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil & Hasil Belajar</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Profil & Hasil Belajar</h2>

    <table>
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $nama; ?></td>
        </tr>

        <tr>
            <th>Tempat, Tgl Lahir</th>
            <td><?php echo $tempat_lahir . ", " . $tanggal_lahir; ?></td>
        </tr>

        <tr>
            <th>Nilai Desain Grafis</th>
            <td><?php echo $nilai_desain; ?></td>
        </tr>

        <tr>
            <th>Nilai Pemrograman Web</th>
            <td><?php echo $nilai_web; ?></td>
        </tr>

        <tr>
            <th>Standar KKM</th>
            <td><?php echo KKM; ?> (Konstanta)</td>
        </tr>

        <tr>
            <th>Rata-Rata Nilai</th>
            <td><?php echo $rata_rata; ?></td>
        </tr>

        <tr>
            <th>Status Kelulusan</th>
            <td>
                <span class="<?php echo ($status == 'LULUS') ? 'lulus' : 'gagal'; ?>">
                    <?php echo $status; ?>
                </span>
            </td>
        </tr>
    </table>
</div>

</body>
</html>