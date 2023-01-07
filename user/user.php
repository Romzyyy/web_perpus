<?php 
	session_start();
 
	if($_SESSION['level']!=="user"){
		header("location:index.php?pesan=gagal");
	}
 
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <div class="navbrand">
            <h2><?php echo $_SESSION['username']?></h2>
        </div>
        <div class="navlist">
            <ul>
                <li><a href="#">Buku</a></li>
                <li><a href="userpinjam.php">MyBook</a></li>
                <li><a href="../logout.php">logout</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="contentTitle">
            <h2>Daftar Buku</h2>
        </div>
        <div class="contentTable">
            <table>
                <tr>
                    <th>No</th>
                    <th>Kode buku</th>
                    <th>Nama buku</th>
                    <th>Penulis</th>
                    <th>tahun terbit</th>
                </tr>
                <?php
                include "../koneksi.php";
                $no = 1;
                $data = mysqli_query($connect, "SELECT * from buku ") or die(mysqli_error($connect));
                while ($tampil = mysqli_fetch_array($data)){
                    echo "<tr>
                    <td>$no</td>
                    <td>$tampil[kode]</td>
                    <td>$tampil[judulbuku]</td>
                    <td>$tampil[penulis]</td>
                    <td>$tampil[tahunterbit]</td>
                </tr>";
                $no++;
                }
                ?>

            </table>
        </div>

    </div>
</body>

</html>