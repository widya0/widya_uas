<?php

include ("koneksi.php");

    if (isset($_GET["id"])) {

    $id = $_GET["id"];

    $query = "DELETE FROM literasi WHERE id='$id' "; 
    $hasil_query = mysqli_query($conn, $query);
  
    if (!$hasil_query) { die ("Gagal menghapus data: ".mysqli_errno ($conn).
    " - ".mysqli_error($conn));
    }
}

header("location: home.php");
?>