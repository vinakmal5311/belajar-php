<?php
session_start();
if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC ");

// tombol cari ditekan
if(isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="Masukan pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>

        <th>NO.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th> 

    </tr>

    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $mhs) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $mhs["id"];?>">Ubah</a> |
            <a href="hapus.php?id=<?= $mhs["id"];?>" onclick="return confirm('yakin?')">Hapus</a>
        </td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" width="50" alt=""></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
    </tr>

        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>