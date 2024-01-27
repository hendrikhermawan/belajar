$(document).ready(function () {
    
  // hilangkan tombol cari
  $("#tombol-cari").hide();
  //buat event ketika keyword ditulis

  $("#keyword").on("keyup", function () {

    // menggunakan load
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());
  
    // menggunakan $.get()
    $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data){
      $("#container").html(data);
    })
  
  
  });



});