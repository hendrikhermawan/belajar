
<!-- ada dua  -->
<!-- 1. built in funtion = php.net/manual/en/funcref.php-->


<!-- =============== time ============= -->
<?php 
// DATE
   echo date("l,d-m-y");

   echo "<br/>";
//    time
// UNIX timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
//echo time();
echo "<br/>";

echo date("l",time()+60*60*24*100);

echo "<br/>";

//mktime
// membuat detik sendiri
//mktime (0,0,0,0,0,0)
//jam,menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,07,29,2002);
echo "<br/>";

echo date("l",mktime(0,0,0,07,29,2002)) ;

echo "<br/>";

//strtotime

echo date("l",strtotime("29 jul 2002"));








?>

<!-- =============== string ============= -->
<?php 
    // strlen()
    //menghitung panjang sebuah string
    //strcmp()
    //membandingkan sebuah string
    //explode()
    //htmlspecialchars

    echo"hello cuy";



?>

<!-- ============ utility ============ -->
<?php 
//  var_dumb()
// isset()
// empty()
// die()
// sleep()




?>

<!-- 2. user defined funtion -->
<?php 

// kurang lebih sama kayak javascript cuma beda sytaxnya




?>
