<?php 
date_default_timezone_set('Asia/Jakarta');
function salam(){
    $nama="Hendrik !";
    $jam=date("H:i");
    $a = date ("H");
    if (($a>=6) && ($a<=11)){
        echo "<b>Selamat Pagi </b>";
        }
        else if(($a>11) && ($a<=15))
        {
        echo " Selamat Siang ";}
        else if (($a>15) && ($a<=18)){
        echo " Selamat Sore ";}
        else { echo ", <b> Selamat Malam </b>";}

    return $nama ;
   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan funtion</title>
    <style>
        h2{
            color: blue;
            border: 1px solid aqua;
            width: fit-content;
            border-radius: 3px;
            background-color: aqua;
            
            
            
        }
    </style>
</head>
<body>
    <?php $jam=date("H:i");?>
    <h1><?php echo salam();?></h1>
    <h2><?php echo $jam;?></h2>
 
</body>
</html>


