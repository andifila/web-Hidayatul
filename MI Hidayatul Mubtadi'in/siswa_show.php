<?php
// Memanggil File koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
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
        <h4>Data Siswa</h4>
      </div>
      <table>
        <tr>
          <th>No.</th>
          <th>Nis</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Tempat,Tanggal Lahir</th>
          <th>Kelas</th>
          <th>Edit</th>
          <th>Hapus</th>
        </tr>
        <?php
        // Jalankan query untuk menampilkan semua data diurutkan berdasarkan nis
        $query = "SELECT * FROM siswa ORDER BY nis ASC";
        $result = mysqli_query($conn, $query);
        //Mengecek apakah ada error ketika menjalankan query
        if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
        }
        //buat perulangan untuk element tabel dari data siswa
        $no = 1; //variabel untuk membuat nomor urut
        // hasil query akan disimpan dalam variabel $data dalam bentuk array
        // kemudian dicetak dengan perulangan while
        while($data = mysqli_fetch_assoc($result))
        {
        ?>
        <!-- mencetak / menampilkan data -->
        <tr>
          <td><?php echo $no; ?></td> <!-- menampilkan no urut -->
          <td><?php echo $data['nis']; ?></td><!-- menampilkan data nis -->
          <td class="td-left"><?php echo $data['nama_siswa']; ?></td> <!-- menampilkan data nama siswa -->
          <td><?php echo $data['jk']; ?></td> <!-- menampilkan data alamat  -->
          <td><?php echo $data['alamat']; ?></td> <!-- menampilkan data jenis kelamin -->
          <td><?php echo $data['ttl']; ?></td> <!-- menampilkan data tempat tanggal lahir -->
          <td><?php echo $data['kelas']; ?></td> <!-- menampilkan data kelas -->
          <!-- membuat link untuk mengedit dan menghapus data -->
          <td>
            <button type="button" onclick=document.location.href="siswa_edit.php?nis=<?php echo $data['nis']; ?>">Edit</button>
          </td>
          <td>
            <button type="button" onClick=document.location.href="siswa_hapus.php?nis=<?php echo $data['nis']; ?>">Hapus</button>
          </td>
        </tr>
        <?php
        $no++; // menambah nilai nomor urut
        }
        ?>
      </table>
    </div>
  </body>
</html>