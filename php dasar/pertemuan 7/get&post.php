<?php 
// variabel scope / lingkup variabel
$x = 10;
function tampil(){
   global $x;
    echo $x;
}
tampil();
echo "<br>";
// ---------------------------------- //
?>

<?php 
// super global milik php
// merupakan array assosiative
$_GET["nama"] = "Allah";

var_dump($_GET);
echo "<br>";
// ------------------------------- //
?>

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
    ul li button{
        color: aliceblue;
        font-weight: bold;
        background-color: crimson;
        margin: 5px;
        padding: 10px;
        border: 1px solid crimson ;
       border-radius: 15px;
        
    }
    ul li button:hover{
        background-color: blue;
        border: 1px solid blue ;
        cursor: pointer;
       

    }
        .gambar img {
        transition: transform .5s, filter 1.5s ease-in-out;
        }
        .gambar:hover img {
        transform: scale(1.1);
            }
        a{
           text-decoration: none;
  
           
        }
    </style>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <ul>
<?php foreach ( $mahasiswa as $mhs ):?>

        <li>
            <a href="get&post2.php?
            nama=<?php echo $mhs["nama"];?>
            &Nrp=<?php echo $mhs["Nrp"];?>
            &Email=<?php echo $mhs["Email"];?>
            &Prodi=<?php echo $mhs["Prodi"];?>
            &Pacar=<?php echo $mhs["Pacar"];?>
            &gambar=<?php echo $mhs["gambar"];?>
            "><button>
             Nama : <?php echo $mhs["nama"]?></button></a>
        </li>

<?php endforeach;?>
    </ul>


</body>
</html> 