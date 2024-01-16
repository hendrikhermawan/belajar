//ambil elemen yang akan digunakan
var keyword = document.getElementById('keyword');
var tombol_cari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

//tambahkan event ketika user menulis di keyword

keyword.addEventListener('keyup', function(){

    // console.log(keyword.value);

    // buat object ajax

    var xhr = new HTMLHttpRequest();

    // cek kesiapan dari ajax

    xhr.onreadystatechange =    function 
    () {
     
        if (xhr.readyState == 4 && xhr.status == 200) {
            
        }
    }



});