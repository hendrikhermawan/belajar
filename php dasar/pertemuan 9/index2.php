<?php 
use LDAP\Result;
require 'function.php';

//koneksi ke databases
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//untuk mengecek apakah eror atau tidak 

if( !$result ) {
    echo mysqli_error($db);
}
// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya 
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
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
        <?php $i = 1;?>
            <?php while( $row = mysqli_fetch_assoc($result) ):?>
        
        
        <tr>
            <td><?php echo $i;?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?php echo $row["gambar"];?>" alt="" width="60">
            </td>
            <td><?php echo $row["nrp"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo  $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
        </tr>
        <?php $i++?>
          <?php endwhile;?>
        <!-- akhir dari perulangan while -->

    </table>
</body>
</html>