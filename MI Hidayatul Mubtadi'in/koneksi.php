<?php
  // buat koneksi dengan database mysql
  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "pengolahan_nilai";
  $conn = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$conn){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>