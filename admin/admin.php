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
            <h2>Admin</h2>
        </div>
        <div class="navlist">
            <ul>
                <li><a href="#">Buku</a></li>
                <li><a href="peminjam.php">Peminjam</a></li>
                <li><a href="../logout.php">logout</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="contentTitle">
            <h2>Data Buku</h2>
        </div>
        <div class="contentTable">
            <table>
                <tr>
                    <th>No</th>
                    <th>Kode buku</th>
                    <th>Nama buku</th>
                    <th>Penulis</th>
                    <th>tahun terbit</th>
                    <th>aksi</th>

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
                    <td>
                    <a href='editbuku.php?kode=$tampil[id]'>ubah</a>
                    <a href='?kode=$tampil[id]'>hapus</a>
                    </td>
                   
                </tr>";
                $no++;
                }
                ?>

            </table>
            <button><a href="tambahbuku.php">Tambah</a></button>
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