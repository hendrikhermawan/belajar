<?php 
// array 
// wariabel yang dapat memiliki banyak nilai
// array boleh miliki type data yang berbeda di php
// pasangan antara key dan value
// key adalah index yang dimulai dari 0
$nama = "contohnama";

echo $nama;
echo"</br>";
// membuat array dengan cara lama
$hari=array("senin","selasa","rabu");

// menulis cara dengan cara baru

$bulan  =["januari","februari","maret"];
$arr1 = [123,"tulisan",false];


// menampilkan array
// var_dump() / print_r()
var_dump($bulan);
echo"</br>";
print_r($hari);


// menampilka elemen pada array
echo"</br>";
echo $arr1[0];

// menambahkan 1 elemen baru pada array

echo"</br>";

$hari[]="kamis";
$hari[]="jumat";
echo"</br>";
var_dump($hari);
?>



