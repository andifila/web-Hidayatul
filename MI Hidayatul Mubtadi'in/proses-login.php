<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $result = mysqli_num_rows($sql);
        if($result){
            header("location:siswa_show.php");
        } else {
            header("location:login.php");
        }
    } else {
        echo "Username dan Password anda kosong,Silakan diisi.";
    }
?>
    

