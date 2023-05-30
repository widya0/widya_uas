<?php

include("koneksi.php");
if (isset($_POST['edit'])) {
        
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];

 
    $query = "UPDATE literasi SET judul = '$judul', penulis = '$penulis'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die ("Query gagal dijalankan: ".mysql_errno($conn).
        " - ".mysqli_error($conn));
    }
}

header("location: home.php");    


?>