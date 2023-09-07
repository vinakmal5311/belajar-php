<?php
$mahasiswa = [["Davin akmal", "874834848", "Teknik Informatika", "davinakmal@gmail.com"],["alka", "85454834848", "Teknik Informatika", "alkaachmad@gmail.com"],["awang", "85334834848", "Teknik Informatika", "awangchmad@gmail.com"]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) :?>
    <ul>
            <li> nama    :<?= $mhs[0]; ?></li>
            <li> NIM     :<?= $mhs[1]; ?></li>
            <li> Jurusan :<?= $mhs[2]; ?></li>
            <li> Email   :<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>