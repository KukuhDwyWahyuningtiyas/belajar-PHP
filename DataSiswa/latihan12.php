<?php
$siswa = [
    [
        "nama" => "Kukuh Dwy",
        "asal" => "Pule",
        "status_kehadiran" => "Hadir"
    ],
    [
        "nama" => "Fira Yogi",
        "asal" => "Suruh",
        "status_kehadiran" => "Izin"
    ],
    [
        "nama" => "Aqny Yohana",
        "asal" => "Ngares",
        "status_kehadiran" => "Sakit"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kehadiran Siswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Daftar Kehadiran Siswa</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Asal Daerah</th>
            <th>Status Kehadiran</th>
        </tr>

        <tr>
            <td>1</td>
            <td><?php echo $siswa[0]["nama"]; ?></td>
            <td><?php echo $siswa[0]["asal"]; ?></td>
            <td><?php echo $siswa[0]["status_kehadiran"]; ?></td>
        </tr>

        <tr>
            <td>2</td>
            <td><?php echo $siswa[1]["nama"]; ?></td>
            <td><?php echo $siswa[1]["asal"]; ?></td>
            <td><?php echo $siswa[1]["status_kehadiran"]; ?></td>
        </tr>

        <tr>
            <td>3</td>
            <td><?php echo $siswa[2]["nama"]; ?></td>
            <td><?php echo $siswa[2]["asal"]; ?></td>
            <td><?php echo $siswa[2]["status_kehadiran"]; ?></td>
        </tr>

    </table>
</div>

</body>
</html>