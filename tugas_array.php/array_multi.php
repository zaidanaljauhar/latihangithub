<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("saab",5,2),
    array("Land Rover", 17,15)
);
$mobil =[["Volvo",
             22,
             18],
                ["BMW",
                15,
                13],
                    ["saab",
                    5,
                    2],
                        ["Land Rover",
                        17,
                        15
                        ]

]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multi</title>
</head>
<body>
    <p>
        Mobil Jenis <?= $cars[1][0]; ?> memiliki stok yaitu <?=$cars[1][1]; ?> dan telah terjual sebanyak <?= $cars[1][2]; ?>
        <br>
        Mobil Jenis <?= $mobil[3][0]; ?> memiliki stok yaitu <?= $mobil[3][1]; ?> dan telah terjual sebanyak <?= $mobil[3][2]; ?>
    </p>
<br>
<?php 
    for($row = 0; $row < 4; $row++) {
        echo "<p><b> Baris Nomer $row </b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$mobil[$row][$col]."</li>";
        }
        echo "</ul>";
    }
?>
<br>
    <table>
        <tr>
          <th>Nama</th>
          <th>Stok</th>
          <th>Terjual</th>  
        </tr>
        <tr>
            <td><?=$mobil[0][0]; ?></td>
            <td><?=$mobil[0][1]; ?></td>
            <td><?=$mobil[0][2]; ?></td>
        </tr>
        <tr>
            <td><?=$mobil[1][0]; ?></td>
            <td><?=$mobil[1][1]; ?></td>
            <td><?=$mobil[1][2]; ?></td>
        </tr>
        <tr>
            <td><?=$mobil[2][0]; ?></td>
            <td><?=$mobil[1][1]; ?></td>
            <td><?=$mobil[1][2]; ?></td>
        </tr>
    </table>
</body>
</html>