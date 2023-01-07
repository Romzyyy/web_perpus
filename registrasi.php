<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tambahbuku.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="title">
                <p>Registrasi</p>
            </div>
            <form action="" method="post" class="form">
                <label>Username</label>
                <input type="text" class="input" name="username">
                <label>Email</label>
                <input type="text" class="input" name="email">
                <label>Password</label>
                <input type="password" class="input" name="password">
                <input type="submit" class="submit" name="submit">

            </form>

        </div>
    </div>
</body>

</html>
<?php
include "koneksi.php";
if(isset($_POST['submit'])){
  mysqli_query($connect, "INSERT INTO user set
  username = '$_POST[username]',
  password = '$_POST[password]',
  level = 'user',
  email = '$_POST[email]'") or die (mysqli_error($connect));
  header("location:login.php");
}

?>