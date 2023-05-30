<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>

 <div class="main-container">
   <input type="checkbox" id="slide">
   
   <div class="container">
     <div class="login-container">

         <div class="text">
            Masuk 
         </div>
   
         <form action="login.php" method="POST">
            <div class="data">
               <label>Username</label>
               <input type="text" name="username" value="" autocomplete="off">
            </div>
            <div class="data">
               <label for="">Password</label>
               <input type="password" name="password" value="" autocomplete="off">
            </div>
            <div class="btn-login">
               <button type="submit" name="masuk">login</button>
            </div>
   
            <div class="signup-link">
               Belum mendaftar ? <a href="index.php"><label for="slide" class="slide">Daftar</label></a>
            </div>
         </form>
      </div>
     

      <div class="signup-container">
         <div class="text">Sign up</div>
   
         <form action="register.php" method="POST">
            <div class="data">
               <label>E-mail</label>
               <input type="text" name="email" value="" autocomplete="off">
            </div>
            <div class="data">
               <label for="">Username</label>
               <input type="text" name="username" value="" autocomplete="off">
            </div>
            <div class="data">
               <label for="">Password</label>
               <input type="password" name="password" value="" autocomplete="off">
            </div>
            <div class="btn-signup">
               <button type="submit" name="daftar">Daftar</button>
            </div>
   
            <div class="signup-link">
               Sudah punya akun ? <a href="index.php"><label for="slide" class="slide">Masuk Akun</label></a>
            </div>
         </form>

      </div>
 </div>
   
</body>
</html>

