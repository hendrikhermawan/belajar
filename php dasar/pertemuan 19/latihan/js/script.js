// //ambil elemen yang akan digunakan
// var keyword = document.getElementById("keyword");
// var tombol_cari = document.getElementById("tombol-cari");
// var container = document.getElementById("container");

// //tambahkan event ketika user menulis di keyword

// keyword.addEventListener("keyup", function () {
//   // console.log(keyword.value);

//   // buat object ajax

//   var xhr = new XMLHttpRequest();

//   // cek kesiapan dari ajax

//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   };

//   // eksekusi ajax
//   xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value , true);
//   xhr.send();
// });


