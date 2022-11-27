<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
<?php
    include "navbar.php";
    include 'config/koneksi.php';
    $sql = "select * from buku";
    $hasil = mysqli_query($koneksi, $sql);
    ?>
    <h4>Tambah Peminjam</h4>
    <form action="view/simpan_peminjaman.php" method="post">
        <label for="">Nama Buku</label>
        <select name="id_buku" id="">
            <?php
            while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?=$data["id_buku"]?>"><?=$data["judul"]?></option>
            <?php } ?>
        </select><br>
        <label for="">Nama Pinjam</label> <input type="text" name="nama_peminjam"><br>
        <label for="">Tanggal Pinjam</label> <input type="date" name="tgl_peminjaman"><br>
        <label for="">Tanggal Kembali</label> <input type="date" name="tgl_pengembalian"><br>
        <br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>