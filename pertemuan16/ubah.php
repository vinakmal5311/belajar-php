<?php
session_start();
if( !isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL 
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah Ditekan atau belum
if ( isset($_POST["submit"])) {
   
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';    
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';    
    </script>";
    }
    
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
    
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]?>">
        <ul>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]?>">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="name" value="<?= $mhs["nama"]?>">
            </li>
            <li>
            <label for="email">EMAIL :</label>
                <input type="gmail" name="email" id="email" value="<?= $mhs["email"]?>">
            </li>
            <li>
            <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
            <label for="gambar">GAMBAR :</label>
            <br>
                <img src="img/<?= $mhs["gambar"];?>" alt="" width="100px">
                <br>
                <input type="file" name="gambar" id="gambar" ">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>