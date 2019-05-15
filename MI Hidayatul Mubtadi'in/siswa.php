<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- my CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MI Hidayatul Mubtadi'in</title>
    <link rel="shortcut icon" href="img/MI.png">
  </head>
<body id="home" class="scrollspy"></body>
<!-- navbar -->
<div class="navbar-fixed">
  <nav class="green darken-1">
    <div class="container">
      <div class="nav-wrapper">
        <div class="col">
          <a href="index.html" class="brand-logo"><h5>MI Hidayatul Mubdtadi'in</h5></a></div>
        </div>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="profil.html">Profil</a></li>
          <li><a href="guru.html">Guru</a></li>
          <li><a href="siswa.php">Siswa</a></li>
          <li><a href="kegiatan.html">Kegiatan</a></li>
          <li><a href="ekstra.html">Ekstrakurikuler</a></li>
          <li><a href="login.php" class="waves-effect white btn-small black-text">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- sidenav -->
<ul class="sidenav" id="mobile-nav">
  <li><a href="">Profil</a></li>
  <li><a href="">Guru</a></li>
  <li><a href="">Siswa</a></li>
  <li><a href="">Kegiatan</a></li>
  <li><a href="">Ekstrakurikuler</a></li>
</ul>
<div class="container">
  <form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  <table border="1">
    <?php
    include "koneksi.php";
    $sql = "SELECT * FROM siswa";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 10){
    // Output data of each row
    echo "<table border=1>";
      echo "<tr>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Gender</th>
        <th>Alamat</th>
        <th>TTL</th>
        <th>Kelas</th>
      </tr>";
      while($row = mysqli_fetch_assoc($result)){
      echo "<tr>
        <td>" . $row['nis']. "</td>
        <td>" . $row['nama_siswa']. "</td>
        <td>" . $row['jk']. "</td>
        <td>" . $row['alamat']. "</td>
        <td>" . $row['ttl']. "</td>
        <td>" . $row['kelas']."</td>
      </td>
    </tr>";
    }
  echo "</table>";
  }else {
  echo "0 Results";
  }
  mysqli_close($conn);
  ?>
</table>
</div>
<!-- Footer -->
<footer class="page-footer green darken-1">
<div class="container">
  <div class="row">
    <div class="col l6 s12">
      <h5 class="white-text">We're Here</h5>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.753243285354!2d112.62342551389074!3d-7.920823144294189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62a0208d7dbd9%3A0xda829a33234d2df4!2sMI+HIDAYATUL+MUBTADI&#39;IN+TASIKMADU!5e0!3m2!1sen!2sid!4v1531737355323" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col l4 offset-l2 s12">
      <h4>Our School</h4>
      MI Hidayatul Mubtadi'in
      Jl. KH. Yusuf No.174 Tasikmadu, Malang
      East Java 65143, Indonesia
    </div>
    <div class="col l4 offset-l2 s12">
      <h4>Social Media</h4>
      <a href="https://www.facebook.com/ypi.hm?ref=br_rs&_rdc=1&_rdr" class="white-text">Facebook</a>
    </div>
  </div>
</div>
<div class="footer-copyright green darken-1">
  <div class="container">
    2018@STIKI Malang. All rights reserved.
  </div>
</div>
</footer>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
const sidenav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sidenav);
const slider = document.querySelectorAll('.slider');
M.Slider.init(slider, {
indicators : false,
height: 500,
transition: 600,
interval: 3000
});
const parallax = document.querySelectorAll('.parallax');
M.Parallax.init(parallax);
const materialbox = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialbox);
const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
scrollOffset: 50
});
</script>
</body>
</html>