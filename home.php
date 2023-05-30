
<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>literasi</title>
</head>
<body>
    
    <h1>Tabel Literasi</h1><br>
    <div class="button1">
        <center><button class= "button1" type="submit" name="input"><a href="input.php">Input data</a></button></center>
    </div>
    <br>
    <table>
        <tr>
            <th style="background-color: #7b7ed6">Judul buku</th>
            <th style="background-color: #7b7ed6">Penulis</th>
            <th style="background-color: #7b7ed6">Pilihan</th>
        </tr>
        <br>

        <?php
        
        $query = "SELECT * FROM literasi";
        $result = mysqli_query($conn, $query);

        
        if(!$result){
            die("Query Error : ".mysqli_errno($conn))." - ".mysqli_error(($conn));
        }

        
        while($data = mysqli_fetch_assoc($result)) {
            
            echo "</tr>";
            echo "<td>$data[judul]</td>"; 
            echo "<td>$data[penulis]</td>"; 
            
            echo '<td>
            <a href="edit.php?id='.$data['id'].'">Edit</a> /
            <a href="hapus.php?id='.$data['id'].'">Hapus</a>
            </td>';
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>
    <div class="button1">
        <button class= "button1" type="submit" name="logout" style="margin-bottom: 10px"><a href="index.php">LOGOUT</a></button></center>
        </div>
    </div>
</body>
</html>


