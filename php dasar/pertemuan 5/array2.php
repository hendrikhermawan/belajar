<?php 

// melakukan pengulangan pada array
// for / foreach
$angka=[3,1,2,4,7,8,89,5];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
       .clear{
        clear: both;
       }

    </style>
</head>
<body>
    <!-- cara lama -->
<?php for ($i = 0; $i < 8; $i++){?>
<div class="kotak"><?php echo $angka[$i];?></div>
    <?php }?>

    <div class="clear"></div>

    <!-- cara baru tanpa harus menghitung berapa jumlah arraynya -->
    <?php for ($i = 0; $i < count($angka); $i++){?>
<div class="kotak"><?php echo $angka[$i];?></div>
    <?php }?>

  <div class="clear"></div>

  <!-- cara poakai foreach -->
    <?php foreach($angka as $a){?>
        <div class="kotak"><?php echo $a;?></div>
        
        <?php }?>





        
</body>
</html>
