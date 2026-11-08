<?php
// Menyiapkan data siswa statis
$nama_siswa = "Kukuh Dwy W.";
$nomor_ujian = "UJN-2026-004";
$nilai_ujian = 82; // Coba ganti nilainya nanti (misal: 60) untuk tes logika

// Logika penentuan status kelulusan
if ($nilai_ujian >= 75) {
    $status = "LULUS";
    $warna_tema = "success"; // Warna hijau di Bootstrap
} else {
    $status = "TIDAK LULUS";
    $warna_tema = "danger"; // Warna merah di Bootstrap
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kelulusan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<!-- Container -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Card -->
            <div class="card shadow">
                <div class="card-header bg-dark text-white text-center py-3">
                    <h5 class="mb-0">HASIL UJIAN NASIONAL</h5>
                </div>

                <div class="card-body p-4">

                    <table class="table table-borderless mb-4">
                        <tr>
                            <td width="35%" class="text-secondary">Nomor Ujian</td>
                            <td><strong><?php echo $nomor_ujian; ?></strong></td>
                        </tr>

                        <tr>
                            <td class="text-secondary">Nama Lengkap</td>
                            <td><?php echo $nama_siswa; ?></td>
                        </tr>

                        <tr>
                            <td class="text-secondary">Nilai Ujian</td>
                            <td>
                                <span class="badge bg-secondary">
                                    <?php echo $nilai_ujian; ?>
                                </span>
                                (KKM: 75)
                            </td>
                        </tr>
                    </table>

                    <!-- Alert -->
                    <div class="alert alert-<?php echo $warna_tema; ?> text-center mb-0" role="alert">
                        <p class="mb-1 small text-uppercase">Dinyatakan</p>
                        <h3 class="alert-heading fw-bold">
                            <?php echo $status; ?>
                        </h3>
                    </div>

                </div>

                <div class="card-footer bg-white text-center py-3">
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        Cetak Surat Keterangan
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>