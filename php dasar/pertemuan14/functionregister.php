<?php 

    $conn = mysqli_connect("localhost","root","","phpdasar");

    function query( $query ){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    

    function register($data){
        global $conn;

        $username = $data["username"];
        $password = $data["password"];
        $password2 = $data["password2"];


        //cek username apakah sama dengan yang  sebelumnya
        $result = mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");
        if (mysqli_fetch_all($result)) {
            
        echo "<script>
        alert('username sudah terdaftar')
        
        </script>";

        return false;
    }

        //cek konfirmasi password

        if($password !== $password2){
            echo "<script>
            alert('cek konfirmasi tidak sesuai')
            
            </script>";

            return false;
        }


        // insert usernname dan password baru ke database

        mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password')");
        return mysqli_affected_rows($conn);

        
    }

















?>