<?php
require '../function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa WHERE 
    nama LIKE '%$keyword%' OR 
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' 
    ";
$mahasiswa = query($query);
?>

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
    <?php foreach ($mahasiswa as $row): ?>


        <tr>
            <td>
                <?php echo $i; ?>
            </td>
            <td>
                <!-- menggubakan aksi ubah untuk mengubah sesuai id -->
                <a href="ubah.php?id=<?php echo $row['id']; ?>">ubah</a> |

                <!-- menggubakan aksi hapus untuk mengubah sesuai id -->
                <a href="hapus.php?id=<?php echo $row["id"]; ?>"
                    onclick="return confirm('apakah anda ingin menghapus?'); ">hapus</a>
            </td>
            <td>
                <img src="img/<?php echo $row["gambar"]; ?>" alt="" width="60">
            </td>
            <td>
                <?php echo $row["nrp"]; ?>
            </td>
            <td>
                <?php echo $row["nama"]; ?>
            </td>
            <td>
                <?php echo $row["email"]; ?>
            </td>
            <td>
                <?php echo $row["jurusan"]; ?>
            </td>
        </tr>
        <?php $i++ ?>
    <?php endforeach; ?>
    <!-- akhir dari perulangan while -->

</table>