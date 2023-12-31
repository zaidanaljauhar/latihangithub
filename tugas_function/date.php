<?php
// Replace these values with your actual birthdate
$birthYear = 2002;
$birthMonth = 4;
$birthDay = 28;

$targetYear = 2030;

// Create a timestamp for the birthdate using mktime()
$targetTimestamp = mktime(0, 0, 0, $birthMonth, $birthDay, $targetYear);

// Format the birthdate for display
$targetBirthday = date('l, d F Y', $targetTimestamp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal Lahir</title>
</head>
<body>
    <h3>
    Ulang Tahun di Tahun 2030: <?= $targetBirthday; ?>

    </h3>
</body>
</html>