<?php
$toyota = [
[
    "Merk" => "TOYOTA 2023",
    "Type" => "FT 86 2022",
    "Warna" => "Merah",
    "Harga" => "Rp 752.100.000",
    "Gambar" =>"ft.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "ALL New C-HR HYBRID",
    "Warna" => "Hijau",
    "Harga" => "Rp 509.300.000",
    "Gambar" => "ch6.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "ALL New Corolla Altis",
    "Warna" => "Putih",
    "Harga" => "Rp 541.400.000",
    "Gambar" => "altis.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "All New Vios",
    "Warna" => "Silver",
    "Harga" => "Rp 400.100,.000",
    "Gambar" => "ch6.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "New Alpahard",
    "Warna" => "Hitam",
    "Harga" => "1.300.800.000",
    "Gambar" => "alphard.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "New Avanza",
    "Warna" => "Merah",
    "Harga" => "Rp 300.100.000",
    "Gambar" => "avanza.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "New Fortuner",
    "Warna" => "Coklat",
    "Harga" => "Rp 652.100.000",
    "Gambar" => "fortuner.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "New Kijang Innova",
    "Warna" => "Hitam",
    "Harga" => "Rp 552.100.000",
    "Gambar" => "innova.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "GR Supra",
    "Warna" => "Merah",
    "Harga" => "1.252.100.000",
    "Gambar" => "supra.png"
],
[
    "Merk" => "TOYOTA 2023",
    "Type" => "Toyota Land Cruiser",
    "Warna" => "Merah",
    "Harga" => "Rp 2.752.100.000",
    "Gambar" => "landcruiser.png"
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYOTA</title>
</head>
<body>
    <H1>DAFTAR MOBIL TOYOTA 2023</H1>
    <?php foreach( $toyota as $t) : ?>
        <ul>
            <li>
                <img src="img/<?=$t["Gambar"];?>">
            </li>
            <li><?= $t["Merk"];?></li>
            <li><?= $t["Type"];?></li>
            <li><?= $t["Warna"];?></li>
            <li><?= $t["Harga"];?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>