<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET nis
  if (isset($_GET['nis'])) {
    // ambil nilai nis dari url dan disimpan dalam variabel $nis
    $nis = ($_GET["nis"]);

    // menampilkan data siswa dari database yang mempunyai nis=$nis
    $query = "SELECT * FROM siswa WHERE nis='$nis'";
    $result = mysqli_query($conn, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $nis = $data["nis"];
    $nama_siswa = $data["nama_siswa"];
    $jk = $data["jk"];
    $alamat= $data["alamat"];
    $ttl = $data["ttl"];
    $kelas = $data["kelas"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:siswa_show.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistem Pengolahan Nilai Siswa SD</title>
  </head>
  <body>
    <?php 
        include 'header.html';
    ?>
    <div class="content">
        <div class="title">
         <h4>Edit Data Siswa</h4>
    </div> 
      <form id="g" action="siswa_editproses.php" method="post">
        <input type="hidden" name="nis" value="<?php echo $nis; ?>">
        <div class="row">
          <div class="col-3">
            <label for="nis">Nis : </label>
          </div>
          <div class="col-8">
            <input class="itext-large" type="text" name="nis" id="nis" value="<?php echo $nis ?>" readonly>
            </div>
          </div>
          <div class="row">
          <div class="col-3">
            <label for="nama_siswa">Nama Siswa: </label>
          </div>
          <div class="col-8">
            <input class="itext-large" type="text" name="nama_siswa" id="nama_siswa" value="<?php echo $nama_siswa ?>"required>
          </div>
          </div>
          <div class="row">
          <div class="col-3">
            <label for="nama"> Jk: </label>
          </div>
          <div class="col-8">
            <label class="container">Laki-laki
            <input type="radio" name="jk" value="Laki-laki"<?php if($jk=='Laki-laki'){echo 'checked';} ?>>
            <span class="checkmark"></span>
        </label>
        <label class="container">Perempuan
          <input type="radio" name="jk" value="Perempuan" <?php if($jk=='Perempuan'){echo'checked';} ?>>
          <span class="checkmark"></span>
        </label>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
            <label for="nama"> Alamat: </label>
          </div>
          <div class="col-8">
            <input class="itext-large"type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>"required>
          </div>
         </div>
          <div class="row">
          <div class="col-3">
            <label for="ttl">Tempat,Tanggal Lahir : </label>
            </div>
          <div class="col-8">  
            <input class="itext-large" type="text" name="ttl" id="ttl" value="<?php echo $ttl ?>"required>
          </div>
           </div>
         <div class="row">
          <div class="col-3">
            <label for="kelas">Kelas : </label>
          </div>
          <div class="col-8">
            <input class="itext-large" type="text" name="kelas" id="kelas" value="<?php echo $kelas ?>"required>
          </div>
          </div>     
          <input type="submit" name="edit" value="Update Data">
      </form>
  </div>
  </body>
</html>
