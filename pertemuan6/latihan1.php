<?php
// $mahasiswa = [["Davin akmal", "874834848", "Teknik Informatika", "davinakmal@gmail.com"],["alka", "85454834848", "Teknik Informatika", "alkaachmad@gmail.com"],["awang", "85334834848", "Teknik Informatika", "awangchmad@gmail.com"]];

// array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "Nama" => "Davin Akmal", 
    "NIM" => "676336367677", 
    "Jurusan" => "Teknik Informatika", 
    "Email" => "akmal@gmail.com",
    "Gambar" => "davin.jpg"
    ],
    [
    "Nama" => "Azlin", 
    "NIM" => "676336364447", 
    "Jurusan" => "Manajemen",
    "Email" => "azlin@gmail.com",
    "Gambar" => "azlin.jpg"
    ]
    ];
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
            <li>
                <img src="img/<?= $mhs["Gambar"];?>">
            </li>
            <li> nama    :<?= $mhs["Nama"]; ?></li>
            <li> NIM     :<?= $mhs["NIM"]; ?></li>
            <li> Jurusan :<?= $mhs["Jurusan"]; ?></li>
            <li> Email   :<?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>