<?php 
// array
// membuat array

$hari = array("senin","selasa");

$bulan = ["januari","februari"];


$arr = [100,"teks",true];

// menampilkan array
// versi debugging
var_dump($hari);
echo"</br>";
print_r($bulan);

echo"</br>";
// menampilakan 1 elemen pada array
echo $arr[1];
echo"</br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak{
            width: 70px;
            height: 70px;
            background-color: lightseagreen;
            line-height: 70px;
            text-align: center;
           float: left;
           margin: 5px;
            transition: 1s;

        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
            background-color: cornflowerblue;
            
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    ?>
    <?php foreach( $angka as $a ):?>
        <?php foreach ( $a as $b ):?>
    <div class="kotak"><?php echo $b;?></div>
        <?php endforeach?>
        <div class="clear"></div>
    <?php endforeach?>
</body>
</html>

