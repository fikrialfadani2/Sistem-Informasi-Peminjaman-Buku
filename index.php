<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
<?php
    include "navbar.php";
    ?>
	<h3>Sistem Informasi Perpustakaan Buku UNIRA</h3>
    <form action="">
    <input type="text" name="keybuku"> <input type="submit" value="Cari">
    </form>
	<br><br>
	<table align="center" border="1">
        <tr>
            <th>no</th>
            <th>kode buku</th>
            <th>No Rak</th>
            <th>Judul</th>
            <th>Sinopsis</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
        </tr>

        <?php
    include 'config/koneksi.php';
    $keybuku =(isset($_GET['keybuku'])) ? $_GET['keybuku'] : '';
    $sql = "select * from buku where judul like '%".$keybuku."%';";

    $hasil = mysqli_query($koneksi, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;
    ?>

        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $data["kode_buku"]; ?>
            </td>
            <td>
                <?php echo $data["no_rak"]; ?>
            </td>
            <td>
                <?php echo $data["judul"]; ?>
            </td>
            <td>
                <?php echo $data["sinopsis"]; ?>
            </td>
            <td>
                <?php echo $data["pengarang"]; ?>
            </td>
            <td>
                <?php echo $data["penerbit"]; ?>
            </td>
            <td>
                <?php echo $data["tahun"]; ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>