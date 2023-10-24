<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Mahasiswa</a>
    <br />

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
            <a href="#">Ubah</a> |
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