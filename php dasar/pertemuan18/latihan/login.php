<?php
session_start();

// cek cookie
require 'function.php';
if (isset($_COOKIE['id']) && isset($_COOKIE['kunci'])) {
    $id = $_COOKIE['id'];
    $kunci = $_COOKIE['kunci'];


    // ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM user WHERE id =$id");
    $row = mysqli_fetch_assoc($result);


    // cek cookie dan username 

    if($kunci == hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}


// cek session
if (isset($_SESSION["login"])) {
    # code...
    header("Location: index.php");
    exit;
}



if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username ='$username'");

    //cek username terlebih dahulu
    if (mysqli_num_rows($result) == 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set session dulu
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookienya
                setcookie('id', $row['id'], time()+60);
                setcookie('kunci',hash('sha256', $row['username']), time()+60);
            }

            header("Location: index.php");
            exit;
        } else {
        }
    }
    $error = true;
}

?>


<!-- kode html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h1>halaman login</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red;">username atau password salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">remember me</label>
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>

</html>