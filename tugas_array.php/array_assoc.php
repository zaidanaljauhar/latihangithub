<?php 
$prodi = array("SI" => "S1 - Sistem Informasi",
                "D3" => "D3 - Sistem Informasi",
                "TI" => "S1 - Teknologi Informasi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assoc</title>
</head>
<body>
    <p>
        Berikut ini merupakan Prodi yang ada di <a href="https://stimata.ac.id/">Kampus STIMATA</a>
        <br>
        Prodi dengan Jenjang S1 adalah <?= $prodi['SI'];  ?>. dan <?= $prodi['TI'];  ?>, sedangkan 
        untuk prodi Jenjang D3 adalah  <?= $prodi['D3'];  ?>
    </p>
</body>
</html>