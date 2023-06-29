<?php 

//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar"); 
function query( $query ){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){ 
    global $db;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    

    //jalankan fungsi upload gambar

    $gambar = upload();

    if(!$gambar){
        return false;
    }


    $query = "INSERT INTO mahasiswa 
              VALUES
        ('','$nama','$nrp','$email','$jurusan','$gambar')";

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);

}

function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $temp_files = $_FILES['gambar']['tmp_name'];


    //cek apakah tidak ada gambar yang diupload
    if($error == 4){
        echo"
        <script> alert('pilih gambar terlebih dahulu') </script>
        ";
        return false;
    }

    //cek ekstensi jenis file gambar
    $ekstensigambarvalid = ['jpg','jpeg','png'];
    $ekstensigambar = explode('.', $namafile);

    // jika ingin mengambil nama file seperti jpg 
    // kita bisa menggunakan angka satu di belakang jenis ekstensi gambarnya seperti contoh di bawah
    // $ekstensigambar = $ekstensigambar[1];
    // contoh 
    // ['namagambar','jpg'];

    // atau

    // hendrik.ganteng.jpg (maka yang diambil hanya ganteng bukan jpgnya yang harusnya dibaca sebagai nama file)

    // maka kita bisa menggunakan cara di bawah ini (dengan menambah end)
    $ekstensigambar = strtolower(end($ekstensigambar));


    // cek apakah sesuai format gambar yang diupload user 
    if(!in_array($ekstensigambar,$ekstensigambarvalid)){
        echo"
        <script> alert('masukkan file dengan format jpg,jpeg atau png')
        ";
        return false;
    }

    // cek apakah ukurannya lebih besar dari 2 mb

    if($ukuranfile > 2000000){
        echo"
        <script> alert('ukuran gambar maksimal 1 mb') </script>
        ";
        return false;
    }

    // lolos pengecekan akan diupload
    // buat nama file baru

    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;


    move_uploaded_file($temp_files, 'img/'. $namafilebaru);

    return $namafilebaru;

}

function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id=$id ");
    return mysqli_affected_rows($db);
}


function ubah($data){
    global $db;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarlama =htmlspecialchars($data["gambarlama"]);
  
    //cek apakah user memakai gambar lama atau upload gambar baru

    if($_FILES["gambar"]["error"] == 4){
        $gambar = $gambarlama;
    }else{
        $gambar = upload();
    }
    

    $query = "UPDATE mahasiswa SET 
                nrp = '$nrp', 
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);

}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa 
                WHERE 
                nama LIKE '%$keyword%' OR 
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' 
                ";
    return query($query);
}

?>



