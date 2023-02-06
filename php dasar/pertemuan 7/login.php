<?php 
// apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
    // cek username & password
        if($_POST["username"]=="hendrik" && $_POST["password"]=="123"){
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
        } else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;    
    
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <!-- judul di dalam web -->
    <h1>Login Admin</h1> 
    <!-- buat paragraf untuk menampilkan kesalahan dalam input -->
    <?php if(isset($error)):?>
        <p style="color: red;">username / password salah!</p>
    <?php endif;?>
    <!-- daftar login -->
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">login</button>
            </li>
        </form>
    </ul>
</body>
</html>
