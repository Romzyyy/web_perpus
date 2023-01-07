<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "";
$connect = mysqli_connect($host, $user, $password, $dbname);

if (!$connect){
    echo "connection failed";
}
?>