<?php
// buka koneksi dengan MySQL
  include("koneksi.php");

  //mengecek apakah di url ada GET nis
  if (isset($_GET["nis"])) {

    // menyimpan variabel nis dari url ke dalam variabel $nis
    $nis = $_GET["nis"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM siswa WHERE nis='$nis' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
    }
  }
  // melakukan redirect ke halaman index.php
  header("location:siswa_show.php");
?>