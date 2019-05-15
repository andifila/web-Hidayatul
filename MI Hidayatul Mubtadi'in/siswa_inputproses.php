<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$nis = $_POST['nis'];
  $nama_siswa = $_POST['nama_siswa'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $ttl = $_POST['ttl'];
  $kelas = $_POST['kelas'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO siswa VALUES ('$nis', '$nama_siswa', '$jk','$alamat' ,'$ttl','$kelas')";
  $result = mysqli_query($conn, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($conn).
           " - ".mysqli_error($conn));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:siswa_show.php");
?>