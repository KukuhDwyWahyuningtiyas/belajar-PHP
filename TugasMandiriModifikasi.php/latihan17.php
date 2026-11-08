<?php
// ==================================================
// 1. LOGIKA PHP (PROSES DATA & ARITMATIKA)
// ==================================================

// Simulasi Data Transaksi dari Kasir
$nama_pelanggan = "Kukuh Dwy";
$nomor_nota     = "TXT-2026-0089";
$tanggal        = date("d M Y");

// Data Produk yang dibeli (Array Asosiatif di dalam Array)
$keranjang_belanja = [
    ["nama" => "Buku Tulis Kiki", "harga" => 5000, "jumlah" => 10],
    ["nama" => "Pena Gel Picbox", "harga" => 3500, "jumlah" => 5],
    ["nama" => "Penggaris Besi 30cm", "harga" => 7000, "jumlah" => 2],
    ["nama" => "Pensil 2B Faber Castell", "harga" => 4000, "jumlah" => 3],
    ["nama" => "Penghapus Joyko", "harga" => 2500, "jumlah" => 4],
];

// Inisialisasi variabel hitung
$total_kotor = 0;
$diskon = 0;
$total_bayar = 0;

// Menghitung subtotal menggunakan perulangan (foreach) dan operator penugasan
foreach ($keranjang_belanja as $produk) {
    $subtotal = $produk['harga'] * $produk['jumlah'];
    $total_kotor += $subtotal; // Operator penugasan (+=)
}

// Logika Perbandingan & Kondisional untuk Diskon
// Jika total belanja lebih besar dari Rp 50.000, dapat diskon 10%
if ($total_kotor > 70000) {
    $diskon = 0.15 * $total_kotor;
}

$total_bayar = $total_kotor - $diskon;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Kasir SMK - Dashboard</title>

    <!-- 2. INTEGRASI BOOTSTRAP CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- 3. INTEGRASI CSS TERPISAH (EXTERNAL CSS) -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <!-- NAVIGASI UTAMA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand text-brand" href="#">
                🛒 E-KASIR
                <span class="text-warning">SMK</span>
            </a>

            <span class="navbar-text text-white">
                Toko Alat Tulis Siswa
            </span>

        </div>
    </nav>


    <!-- KONTEN UTAMA -->
    <div class="container my-5">
        <div class="row g-4">

            <!-- KOLOM KIRI: DAFTAR BARANG YANG DIBELI -->
            <div class="col-lg-8">

                <div class="card card-custom shadow-sm bg-white p-4">

                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <h5 class="card-title mb-0 fw-bold text-dark">
                            Keranjang Belanja
                        </h5>

                        <span class="badge bg-primary">
                            Nota: <?php echo $nomor_nota; ?>
                        </span>

                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th class="text-end">Harga Satuan</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-end">Total</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                $no = 1;

                                foreach ($keranjang_belanja as $item) :
                                    $sub_item = $item['harga'] * $item['jumlah'];
                                ?>

                                    <tr>

                                        <td>
                                            <?php echo $no++; ?>
                                        </td>

                                        <td class="fw-semibold">
                                            <?php echo $item['nama']; ?>
                                        </td>

                                        <td class="text-end">
                                            Rp <?php echo number_format($item['harga'], 0, ',', '.'); ?>
                                        </td>

                                        <td class="text-center">
                                            <span class="badge bg-secondary rounded-pill">
                                                <?php echo $item['jumlah']; ?>
                                            </span>
                                        </td>

                                        <td class="text-end fw-bold text-secondary">
                                            Rp <?php echo number_format($sub_item, 0, ',', '.'); ?>
                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- KOLOM KANAN: RINGKASAN PEMBAYARAN / STRUK NOTA -->
            <div class="col-lg-4">

                <div class="card card-custom shadow-sm bg-white p-4">

                    <h5 class="fw-bold mb-3 text-dark">
                        Ringkasan Transaksi
                    </h5>


                    <div class="p-3 mb-4 struk-belanja">

                        <small class="text-muted d-block">
                            Pelanggan:
                        </small>

                        <strong class="text-dark d-block mb-2">
                            <?php echo $nama_pelanggan; ?>
                        </strong>

                        <small class="text-muted d-block">
                            Tanggal Transaksi:
                        </small>

                        <span class="small fw-semibold">
                            <?php echo $tanggal; ?>
                        </span>

                    </div>


                    <!-- Rincian Perhitungan Angka -->

                    <div class="d-flex justify-content-between mb-2">

                        <span class="text-muted">
                            Total Kotor
                        </span>

                        <span class="fw-semibold">
                            Rp <?php echo number_format($total_kotor, 0, ',', '.'); ?>
                        </span>

                    </div>


                    <div class="d-flex justify-content-between mb-3 text-danger">

                        <span>
                            Diskon (Potongan)
                        </span>

                        <span>
                            - Rp <?php echo number_format($diskon, 0, ',', '.'); ?>
                        </span>

                    </div>


                    <hr>


                    <div class="d-flex justify-content-between align-items-center mb-4">

                        <span class="h6 mb-0 fw-bold">
                            Total Wajib Bayar
                        </span>

                        <span class="h4 mb-0 fw-bold text-success">
                            Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?>
                        </span>

                    </div>


                    <!-- Tombol Aksi Kerja Kasir -->

                    <div class="d-grid gap-2">

                        <button
                            class="btn btn-primary py-2 fw-semibold shadow-sm"
                            onclick="alert('Transaksi Berhasil Disimpan!')">
                            💸 Proses Pembayaran
                        </button>

                        <button class="btn btn-outline-secondary btn-sm">
                            🖨️ Cetak Struk
                        </button>

                    </div>

                </div>

            </div>

        </div>
    </div>


    <!-- 4. INTEGRASI BOOTSTRAP JAVASCRIPT (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>