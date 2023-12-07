<?php

// Deklarasi variabel
$tanggalSekarang = new DateTime();
$tanggalMasaDepan;

// Menampilkan tanggal hari ini
echo "Tanggal hari ini: " . $tanggalSekarang->format("d-m-Y") . PHP_EOL;

// Perulangan untuk 1000 hari yang akan datang
for ($i = 0; $i < 1000; $i++) {
    // Menambahkan 1 hari ke tanggal sekarang
    $tanggalMasaDepan = $tanggalSekarang->add(new DateInterval("P1D"));

    // Menampilkan tanggal di masa depan
    $hari = $tanggalMasaDepan->format("l");
    $tanggal = $tanggalMasaDepan->format("d");
    $bulan = $tanggalMasaDepan->format("m");
    $tahun = $tanggalMasaDepan->format("Y");

    // Menampilkan output HTML
    echo "<tr>";
    echo "<td>" . $i + 1 . "</td>";
    echo "<td>" . $hari . "</td>";
    echo "<td>" . $tanggal . "</td>";
    echo "<td>" . $bulan . "</td>";
    echo "<td>" . $tahun . "</td>";
    echo "</tr>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output Hari, Tanggal, Bulan, dan Tahun</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Menampilkan output PHP
        ?>
        </tbody>
    </table>
</body>
</html>