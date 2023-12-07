<?php
$todayDate = "07 des 2024";
$returnDate = date('d-M-Y', strtotime('+100 day',strtotime($todayDate)));
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
</head>

<body>
    <h1>
    tanggal hari ini = <?= $todayDate; ?>
    <br>
    tanggal +100 hari ini sekarang = <?= $returnDate; ?>
    </h1>
</body>
</html>