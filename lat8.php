<?php
// Array multidimensi (menghubungkan array asosiatif ke dalam wadah)
$data_siswa = [
    ["nama" => "Andi<br>", "Asal" => "jakarta"], //index ke-0
    ["nama" => "siti", "Asal" => "Bandung"] //index ke-1
];

// Cara memanggilnya: [Indeks baris]["nama Key Kolom"]
echo $data_siswa[0]["nama"]; //Menampilkan: Andi
echo $data_siswa[0]["Asal"]; //Menampilkan: bandung