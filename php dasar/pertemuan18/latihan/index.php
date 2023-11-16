<?php

use LDAP\Result;

session_start();

// buat logika jika belum login akan kembali ke login
if (!isset($_SESSION["login"])) {
    # code...
    header("Location: login.php");
    exit;
}


require 'function.php';


// pagination
// konfigurasi
$JumlahDataPerHalaman = 2;
$JumlahData = query("SELECT * FROM mahasiswa");
$JumlahHalaman = ceil(count($JumlahData) / $JumlahDataPerHalaman);
$HalamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

var_dump($HalamanAktif);
// halaman = 2, awal data = 3
// halaman = 3, awal data = 6


$AwalData = ($JumlahDataPerHalaman * $HalamanAktif) - $JumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $AwalData, $JumlahDataPerHalaman");


// tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style10.css">

    <style>
        h1 {
            text-align: center;
        }
    </style>
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <!-- kita buat link buat menambah data -->
    <button class="tambah"><a style="color: white;" href="tambah.php">tambah data mahasiswa</a></button>

    <!-- buat form untuk searching-->
    <form action="" method="post">
        <br>
        <input type="text" name="keyword" size="40" autofocus placeholder="input data yang ingin dicari" autocomplete="off">
        <button type="submit" name="cari">cari !</button>

        <!-- tombol logout -->
        <button><a href="logout.php" onclick="return confirm('Anda yakin ingin logout?');">logout</a></button>

    </form>

    <!-- navigasi pagination -->

    <!-- ikon ke kiri -->
    <?php if($HalamanAktif > 1):?>
    <a href="?halaman=<?php echo $HalamanAktif - 1; ?> ">&laquo;</a>
    <?php else:?>

    <?php endif;?>

    <?php for ($i = 1; $i <= $JumlahHalaman; $i++) : ?>

        <?php if($i == $HalamanAktif): ?>
            <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>

        <?php else : ?>
        <a href="?halaman=<?php echo $i; ?>""><?php echo $i; ?></a>
            
        <?php endif; ?>
    <?php endfor; ?>
    
      <!-- ikon ke kanan -->
      <?php if($HalamanAktif < $JumlahHalaman):?>
    <a href="?halaman=<?php echo $HalamanAktif + 1; ?> ">&raquo;</a>
    <?php else:?>

    <?php endif;?>

    <br>
    <table border="1" cellpadding="10" cellspacing="0" align="center">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!-- kita buat perulangan while -->
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>


            <tr>
                <td><?php echo $i; ?></td>
                <td>
                    <!-- menggubakan aksi ubah untuk mengubah sesuai id -->
                    <a href="ubah.php?id=<?php echo $row['id']; ?>">ubah</a> |

                    <!-- menggubakan aksi hapus untuk mengubah sesuai id -->
                    <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('apakah anda ingin menghapus?'); ">hapus</a>
                </td>
                <td>
                    <img src="img/<?php echo $row["gambar"]; ?>" alt="" width="60">
                </td>
                <td><?php echo $row["nrp"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo  $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
        <!-- akhir dari perulangan while -->

    </table>
</body>

</html>