<?php
require 'functions.php';
// cek apakah tombol submit sudah Ditekan atau belum

if ( isset($_POST["submit"])) {
   
    // cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';    
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
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
    
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="name">
            </li>
            <li>
            <label for="email">EMAIL :</label>
                <input type="gmail" name="email" id="email">
            </li>
            <li>
            <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <label for="gambar">GAMBAR :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit"> Tambah Data!</button>
            </li>
        </ul>
    </form>

</body>
</html>