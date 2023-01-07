<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tambahbuku.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="title">
                <p>Pinjam Buku</p>
            </div>
            <form action="" method="post" class="form">
                <?php 
                if(isset($_GET['pesan'])){
		        if($_GET['pesan']=="gagal"){
			    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		                }
	                }
	              ?>
                <label>Nama</label>
                <input type="text" class="input" name="nama">
                <label>Judul buku</label>
                <input type="text" class="input" name="judulbuku">
                <label>Kode Buku</label>
                <input type="text" class="input" name="kode">
                <input type="submit" class="submit" name="submit">
            </form>

        </div>
    </div>
</body>

</html>
<?php
include "../koneksi.php";
if(isset($_POST['submit'])){
  mysqli_query($connect, "INSERT INTO peminjam set
    nama = '$_POST[nama]',
  judulbuku = '$_POST[judulbuku]',
  kode = '$_POST[kode]'") or die (mysqli_error($connect));
  header("location:userpinjam.php");
}

?>