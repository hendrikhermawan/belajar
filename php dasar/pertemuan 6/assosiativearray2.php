<!-- array associative -->
<!-- definisinya sama seperti array numerik, kecuali -->
<!-- key-nya adalah string kita buat sendiri -->



<?php 
$mahasiswa = [
    [
       "nama" => "Devon",
       "Nrp" => "1202210008",
       "Email" => "devon@gmail.com",
       "Prodi" => "MIPA",
       "Pacar" =>"Dela",
       "gambar" =>"penulis.jpg"
    ],
    [ "nama" =>"mischka",
    "Nrp" => "1202210009",
    "Email" => "mischka@gmail.com",
    "Prodi" =>"MIPA",
    "Pacar" =>"Hendrik",
    "gambar" =>"Horikita.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
    <style>
        ul {
            float: left;
            
        }
        .gambar img {
        transition: transform .5s, filter 1.5s ease-in-out;
        }
        .gambar:hover img {
        transform: scale(1.1);
            }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
<?php foreach ( $mahasiswa as $mhs ):?>
    <ul>
       <div class="gambar">
           <img src="img/<?php echo $mhs["gambar"];?>">

       </div>
      
        <li>Nama : <?php echo $mhs["nama"]?></li>
        <li>NRP :<?php echo $mhs[ "Nrp"]?></li>
        <li>Email :<?php echo $mhs[ "Email" ]?></li>
        <li>Prodi :<?php echo $mhs[ "Prodi"]?></li>
        <li>Pacar :<?php echo $mhs[ "Pacar"]?></li>
    </ul>
<?php endforeach;?>


</body>
</html>
