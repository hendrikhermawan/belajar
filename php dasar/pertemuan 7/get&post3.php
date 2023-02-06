<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<!-- logika pemrogaman menggunakan if -->
<?php if(isset($_POST["submit"])):?>
    <h1>selamat datang <?php echo $_POST["nama"];?></h1>
<?php endif;?>

<!-- buat form buat masukkan data user -->
<form action="" method="post">
    masukkan namamu coy :
    <input type="text" name="nama">
    <br>
 
    <button type="submit" name="submit">kirim!</button>
</form>
<!-- akhir form -->
</body>
</html>



