<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Document</title>

</head>
<body>
    <h1>Input data</h1>
    <div class="container">
        <form action="prosesinput.php" method="post">

                <p>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" style="border-style: none; background-color: #dfdfff" autocomplete="off">
                </p>
                <br>
                <p>
                    <label for="penulis">Penulis : </label>
                    <input type="text" name="penulis" id="penulis" style="border-style: none; background-color: #dfdfff" autocomplete="off">
                </p>
                <br>
            <div class="btn-login">
                <button type="submit" name="input">SIMPAN</button>
            </div>
        </form>
    </div>
</body>
</html>


