<?php
require 'koneksi.php';

if (isset($_POST['daftar'])) {
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
$result =  mysqli_query($conn, $query);
    
    if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno ($conn).
        " - ".mysqli_error ($conn));
    }
}

header("LOcation: index.php");