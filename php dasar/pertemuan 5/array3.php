<?php 
$mahasiswa =[["Hendrik hermawan","1202210008","teknologi informasi"
,"@hendrikprima97@gmail.com"],
["Maudy ayunda","1202210090","teknologi informasi"
,"@maudyprima97@gmail.com"]
,
["Dewangga","1202210089","teknologi informasi"
,"@dewanggaprima97@gmail.com"]

];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        
    </style>
</head>
<body>
    <!-- cara manual -->
    <h1>Daftar Mahasiswa</h1>
   <ul>
        <li>Hendrik hermawan</li>
        <li>1202210008</li>
        <li>teknologi informasi</li>
        <li>hendrikprima97@gmail.com</li>
   </ul>
    
    <!-- cara looping satu mahasiswa kalau > 1 error-->
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $m){?>
            <li><?php echo $m;?></li>
            <?php }?>
    </ul>.

    <!-- cara 2 mahasiswa -->
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs){?>
    <ul>
        <li>nama  : <?php echo $mhs[0];?></li>
        <li>nim   : <?php echo $mhs[1];?></li>
        <li>prodi :<?php echo $mhs[2];?></li>
        <li>email :<?php echo $mhs[3];?></li>
    </ul>
    <?php }?>
</body>
</html>
