
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
    <h4>Input Data</h4>
  </div>
      <form id="siswa" action="siswa_inputproses.php" method="post">
      <div class="row">
        <div class="col-3">
            <label for="nis">Nis: </label>
          </div>
             <div class="col-8">
            <input class="itext-large" type="text" name="nis" id="nis" placeholder="Contoh: 12345678"required>
          </div>
      </div>
      <div class="row">
        <div class="col-3">
            <label for="nama_siswa">Nama Siswa : </label>
          </div>
          <div class="col-8">
            <input class="itext-large" type="text" name="nama_siswa" id="nama_siswa"required>
          </div>
        </div>
        <div class="row">
        <div class="col-3">
            <label for="alamat">Alamat : </label>
          </div>
        <div class="col-8">
            <input class="itext-large" type="text" name="alamat" id="alamat"required>
          </div>
            </div>
            <div class="row">
              <div class="col-3">
            <label for="jk">Jenis Kelamin : </label>
          </div>
          <div class="col-8">
           <label class="container">Laki-laki
            <input type="radio" name="jk" value="Laki-laki">
            <span class="checkmark"></span>
        </label>
        <label class="container">Perempuan
          <input type="radio" name="jk" value="Perempuan">
          <span class="checkmark"></span>
        </label>
        </div>
      </div>
        <div class="row">
          <div class="col-3">
            <label for="ttl">Tempat Tanggal Lahir : </label>
          </div>
          <div class="col-8">
            <input class="itext-large" type="text" name="ttl" id="ttl"required>
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            <label for="kelas">Kelas : </label>
          </div>
          <div class="col-8">
            <input class="itext-large" type="text" name="kelas" id="kelas"required>
          </div>
        </div>
          <input type="submit" name="input" value="Tambah Data">
      </form>
    </div>
  </body>
</html>