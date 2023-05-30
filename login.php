<?php
require 'koneksi.php';

if (isset($_POST['masuk'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result =  mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0) {
        header("Location: home.php");
    }
    else{
        echo "<center><h2>Username atau Password salah. SIlahkan coba Masuk kembali.</h2>
        <button><strong><a href='index.php'>Masuk</a></strong></button></center>";
    }
}

