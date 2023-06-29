<?php 

require 'function.php';

//kita ambil data id di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



//cek apakah submit sudah di klik
if( isset($_POST["submit"])){
  

    // eck apakah data berhasil ditambahkan atau tidak
    if(ubah($_POST)>0){
        echo 
        "<script>
            alert('data berhasil diubah')
            document.location.href = 'index.php'
        </script>";
    }else{
        "<script>
            alert('data gagal diubah')
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
    <h1>Menu edit data mahasiswa</h1>

    <!-- memakai post -->

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mhs["id"];?>">
        <input type="hidden" name="gambarlama" value="<?php echo $mhs["gambar"];?>">
    <ul>
        <li>
            <label for="nrp">nrp :</label>
            <input type="text" name="nrp" id="nrp"
            required value="<?php echo $mhs["nrp"];?>"
            oninvalid="this.setCustomValidity('nrp tidak boleh kosong')" oninput="setCustomValidity('')">
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama"
            required value="<?php echo $mhs["nama"];?>">
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email"
            required value="<?php echo $mhs["email"];?>">
        </li>
        <li>
            <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan"
            required value="<?php echo $mhs["jurusan"];?>">
        </li>
        <li>
            <label for="gambar">Gambar :</label>
            <br>
            <!-- menampilkan gambarnya -->
            <img src="img/<?php echo $mhs["gambar"];?>" width="60"">
            <input type="file" name="gambar" id="gambar"
             >
        </li>
           <li>
            <button type="submit" name="submit">ubah data!</button>
           </li>
    </ul>
    <button><a href="index.php">kembali</a></button>
    

    </form>
  
</body>
</html>