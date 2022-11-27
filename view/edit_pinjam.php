<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
<?php
    include "../navbar.php";
    ?>
    <h4>Edit Peminjam</h4>
    <?php 
	include "../config/koneksi.php";
	$id_pinjam = $_GET['id_pinjam'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_pinjam='$id_pinjam'")or die(mysql_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>
    <form action="edit_peminjaman.php" method="post">
        <label for="">Id Peminjam</label> <input type="text" name="id_pinjam" value="<?= $data['id_pinjam'];?>"><br>
        <label for="">Id Buku</label> <input type="text" name="id_buku" value="<?= $data['id_buku'];?>"><br>
        <label for="">Nama Pinjam</label> <input type="text" name="nama_peminjam" value="<?= $data['nama_peminjam'];?>"><br>
        <label for="">Tanggal Pinjam</label> <input type="date" name="tgl_peminjaman" value="<?= $data['tgl_peminjaman'];?>"><br>
        <label for="">Tanggal Kembali</label> <input type="date" name="tgl_pengembalian" value="<?= $data['tgl_pengembalian'];?>"><br>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <?php } ?>
</body>
</html>