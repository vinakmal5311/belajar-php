<?php
if( !isset($_GET["Type"]) || 
    !isset($_GET["Warna"])||
    !isset($_GET["Harga"])||
    !isset($_GET{"Gambar"}) ){
    //redireact
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li><img src="img/<?= $_GET['Gambar'] ?>"></li>
    <li><?= $_GET["Type"] ;?></li>
    <li><?= $_GET["Warna"] ;?></li>
    <li><?= $_GET["Harga"] ;?></li>

    <a href="latihan1.php">Kembali</a>
</body>
</html>