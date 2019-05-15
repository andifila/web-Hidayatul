<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
// buat koneksi dengan database
include("koneksi.php");
// membuat variabel untuk menampung data dari form edit

$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$kelas = $_POST['kelas'];
//buat dan jalankan query UPDATE
$query  = "UPDATE siswa SET ";
$query .= " nama_siswa = '$nama_siswa', ";
$query .= "jk = '$jk',";
$query .= "alamat ='$alamat', ";
$query .= "ttl = '$ttl',";
$query .= "kelas= '$kelas' ";
$query .= "WHERE nis = '$nis'";
$result = mysqli_query($conn, $query);
//periksa hasil query apakah ada error
if(!$result) {
die ("Query gagal dijalankan: ".mysqli_errno($conn).
" - ".mysqli_error($conn));
}
}
//lakukan redirect ke halaman index.php
header("location:siswa_show.php");
?>