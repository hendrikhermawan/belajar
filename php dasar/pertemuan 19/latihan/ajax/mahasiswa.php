<?php 
require'../function.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswa = query($query);

var_dump($mahasiswa);
 ?>