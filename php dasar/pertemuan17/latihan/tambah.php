<?php 
session_start();
if (!isset($_SESSION["login"])) {
    # code...
    header("Location: login.php");
    exit;
}
require 'function.php';

//cek apakah submit sudah di klik
if( isset($_POST["submit"])){
  

    // eck apakah data berhasil ditambahkan atau tidak
    if(tambah($_POST)>0){
        echo 
        "<script>
            alert('data berhasil ditambahkan')
            document.location.href = 'index.php'
        </script>";
    }else{
        "<script>
            alert('data gagal ditambahkan')
            document.location.href = 'index.php'
        </script>"; 
       
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu tambah data</h1>

    <!-- memakai post -->

    <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nrp">nrp :</label>
            <input type="text" name="nrp" id="nrp"
            required
            oninvalid="this.setCustomValidity('nrp tidak boleh kosong')" oninput="setCustomValidity('')">
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama"
            required
            oninvalid="this.setCustomValidity('nama tidak boleh kosong')" oninput="setCustomValidity('')">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email"
            required 
            oninvalid="this.setCustomValidity('email tidak boleh kosong')" oninput="setCustomValidity('')">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"
            required
            oninvalid="this.setCustomValidity('jurusan tidak boleh kosong')" oninput="setCustomValidity('')">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <input type="file" name="gambar" id="gambar"
            required
            >
        </li>
           <li>
            <button type="submit" name="submit">tambah data!</button>
           </li>
    </ul>
    <button><a href="index.php">kembali</a></button>
    

    </form>
  
</body>
</html>