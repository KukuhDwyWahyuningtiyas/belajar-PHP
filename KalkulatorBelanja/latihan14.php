<?php
$harga_barang_1 = 20000;
$jumlah_barang_1 = 3;

$harga_barang_2 = 50000;
$jumlah_barang_2 = 1;

$diskon_persen = 10;

// Perhitungan
$total_barang_1 = $harga_barang_1 * $jumlah_barang_1;
$total_barang_2 = $harga_barang_2 * $jumlah_barang_2;

$total_kotor = $total_barang_1 + $total_barang_2;
$diskon = $total_kotor * ($diskon_persen / 100);
$total_bersih = $total_kotor - $diskon;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Belanja</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="struk">
    <h2>Kukuh's MART</h2>
    <p>Jl. Raya Trenggalek No. 13 Trenggalek</p>
    <hr>

    <table>
        <tr>
            <td>Barang 1</td>
            <td>3 pcs x Rp<?php echo number_format($harga_barang_1,0,",","."); ?></td>
            <td>Rp<?php echo number_format($total_barang_1,0,",","."); ?></td>
        </tr>

        <tr>
            <td>Barang 2</td>
            <td>1 pcs x Rp<?php echo number_format($harga_barang_2,0,",","."); ?></td>
            <td>Rp<?php echo number_format($total_barang_2,0,",","."); ?></td>
        </tr>
    </table>

    <hr>

    <table>
        <tr>
            <td>Total Kotor</td>
            <td>Rp<?php echo number_format($total_kotor,0,",","."); ?></td>
        </tr>

        <tr>
            <td>Diskon (<?php echo $diskon_persen; ?>%)</td>
            <td>-Rp<?php echo number_format($diskon,0,",","."); ?></td>
        </tr>

        <tr class="total">
            <td>TOTAL BERSIH</td>
            <td>Rp<?php echo number_format($total_bersih,0,",","."); ?></td>
        </tr>
    </table>

    <hr>

    <p class="footer">
        Terima Kasih Atas Kunjungan Anda<br>
        Kami tunggu kedatangan anda kembali!
    </p>

</div>

</body>
</html>