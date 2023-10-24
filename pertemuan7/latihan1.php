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
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <?php  foreach( $toyota as $tyt ) : ?>

    <li>
        <a href="latihan2.php?Type=<?= $tyt["Type"];?>&Warna=<?= $tyt["Warna"];?>&Harga=<?= $tyt["Harga"];?>&Gambar=<?= $tyt["Gambar"];?>"> <?= $tyt["Type"];?></a>
    </li>

    <?php endforeach ?>
</body>
</html>