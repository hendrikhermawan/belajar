<?php
require 'function.php';
if (isset($_POST["submit"])) {

    if (register($_POST) > 0) {
        echo
            "<script>
            alert('berhasil melakukan registrasi')
            document.location.href = 'login.php'
        </script>";
    } else {
        echo mysqli_error($db);

    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>halaman registrasi</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="submit">Register</button>
            </li>
            
        </ul>
    </form>
</body>

</html>