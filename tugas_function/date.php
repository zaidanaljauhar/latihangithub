<?php

//deklarasi variabel 
$harilahir = mktime(0,0,0,4,28,2002);

//menampilkan tanggal lahir 
$hari = date ("1",$minggu);
$tanggal = date ("d",$28);
$bulan = date ("m",$04);
$tahun = date ("y",$2002);

echo "Tanggal lahir":"$minggu","28","04","2002"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>output hari lahir</title>
</head>
<body>
    <h2>output hari lahir</h2>
    <p>tanggal lahir: <?php echo $hari "minggu", $tanggal "28", $bulan "04", $tahun "2002"; ?></p>
</body>
</html>