<?php 

    require 'functionregister.php';
    if(isset($_POST["submit"])){
        if(register($_POST) > 0){
            echo "<script>
            alert('register anda berhasil ditambahkan')
            document.location.href = 'reg.php'
            </script>";
        }else{
            return mysqli_error($conn);
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
    
    <form action="" method="post">
        <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        </ul>
        <ul>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
        </ul>
        <ul>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
        </ul>
        <ul>
            <button type="submit" name="submit">register</button>
        </ul>
    </form>
</body>
</html>