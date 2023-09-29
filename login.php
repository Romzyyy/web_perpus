<?php 
	session_start();
	if (isset($_SESSION['username'])) {
        if($_SESSION['level'] == "admin") {
          header('Location: admin/admin.php');
        } else if($_SESSION['level'] == "user") {
          header('Location: user/user.php');
        }
        exit;
      }
 
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="title">
                <p>Login</p>
            </div>
            <form action="ceklogin.php" method="post" class="form">
                <label for="username">Username</label>
                <input type="text" class="input" name="username">
                <label for="password">Password</label>
                <input type="password" class="input" name="password">
                <input type="submit" class="submit" name="submit">
                <p>Don't have account? <a href="registrasi.php">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>