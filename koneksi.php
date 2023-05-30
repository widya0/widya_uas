<?php

$host = "localhost";
$user = "root";
$paswd = "";
$dbname = "dbuas";


$conn = mysqli_connect($host, $user, $paswd, $dbname);


if (!$conn) {
    die("Koneksi gagal : ".mysqli_connect_error());
}

?>