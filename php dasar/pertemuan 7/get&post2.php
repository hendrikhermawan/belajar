<?php 
// kita cek apakan tidak ada data di $_GET

if( !isset($_GET["nama"])||
    !isset($_GET["Nrp"])||
    !isset($_GET["Email"])||
    !isset($_GET["Prodi"])||
    !isset($_GET["Pacar"])){

    // redirect
    header("Location: get&post.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        a{
           text-decoration: none;
        }
    </style>
</head>
<body>
    <ul>
        <img src="img/<?php echo $_GET["gambar"];?>" alt="">
        <li>Nama :<?php echo $_GET["nama"];?></li>
        <li>NRP :<?php echo $_GET["Nrp"];?></li>
        <li>Email :<?php echo $_GET["Email"];?></li>
        <li>Prodi :<?php echo $_GET["Prodi"];?></li>
        <li>Pacar :<?php echo $_GET["Pacar"];?></li>
    </ul>
<a href="get&post.php">klik untuk kembali cuy</a>
</body>
</html>