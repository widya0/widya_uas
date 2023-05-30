<?php 
    
    include 'koneksi.php';
    
    if (isset($_GET['id'])) { 
        
        $id = ($_GET["id"]);

        $query = "SELECT * FROM literasi WHERE id='$id'"; 
        $result = mysqli_query($conn, $query);
        
        if (!$result) {
            die ("Query Error: ".mysqli_errno ($conn)." - ".mysqli_error($conn));
        }
        
        $data =  mysqli_fetch_assoc($result);
        $id = $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $penulis = htmlspecialchars($data["penulis"]);
    } else {
        
        header("location: home.php");
    }
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
    <h1>Edit Data</h1>
    <div class="container">
        <form action="prosesedit.php" method="post">
                <p>
                    <label for="judul">Judul   : </label>
                    <input type="text" name="judul" id="judul" value="<?php echo $judul ?>" autocomplete="off" class="inp">
                </p><br>
                <p>
                    <label for="penulis">Penulis : </label>
                    <input type="text" name="penulis" id="penulis" value="<?php echo $penulis ?>" autocomplete="off" class="inp">
                </p>
                <br>          
            <div class="btn-login">
                <button type="submit" name="input">UPDATE</button>
            </div>
        </form>
    </div>
</body>
</html>
