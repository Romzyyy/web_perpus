<?php
	session_start();
 
	if($_SESSION['level']!=="admin"){
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
                <li><a href="admin.php">Buku</a></li>
                <li><a href="#">Peminjam</a></li>
                <li><a href="../logout.php">logout</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="contentTitle">
            <h2>Daftar Pinjaman Buku</h2>
        </div>
        <div class="contentTable">
            <table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nama Buku</th>
                    <th>Kode Buku</th>
                    <th>Aksi</th>

                </tr>
                <?php
                include "../koneksi.php";
                $no = 1;
                $data = mysqli_query($connect, "SELECT * from peminjam ") or die(mysqli_error($connect));
                while ($tampil = mysqli_fetch_array($data)){
                    echo "<tr>
                    <td>$no</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[judulbuku]</td>
                    <td>$tampil[kode]</td>
                    <td>
                    <a href='editbuku.php?kode=$tampil[id]'>ubah</a>
                    <a href='?kode=$tampil[id]'>hapus</a>
                    </td>
                   
                </tr>";
                $no++;
                }
                ?>

            </table>
        </div>

    </div>
</body>

</html>

<?php
include "../koneksi.php";
if(isset($_GET['kode'])){
    mysqli_query($connect, "DELETE from buku where id='$_GET[kode]'");
    header("location:admin.php");
}
?>