<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../config/koneksi.php';
        $id_buku = $_GET['id_buku'];
        $sql = mysqli_query($koneksi,"select * from buku where id_buku = $id_buku");
        $result = mysqli_fetch_row($sql); //hasilnya berbentuk array
    ?>
    <?php
    include "../navbar.php";
    ?>
    <form action="updateBuku.php?idbuku=<?= $id_buku ?>" method="POST">
        <label for="Kode Buku">Kode Buku</label>
        <input type="text" value="<?= $result[1] ?>" name="kodeBuku" id="">
        <br> <br>
        <label for="Rak Buku">Rak Buku</label>
        <input type="text" value="<?= $result[2] ?>" name="rak_buku" id="">
        <br> <br>
        <label for="Kode Buku">Judul</label>
        <input type="text" value="<?= $result[3] ?>" name="judul" id="">
        <br> <br>
        <label for="Sinopsis">Sinopsis</label>
        <textarea name="sinopsis" id="" cols="30" rows="10"><?= $result[4] ?></textarea>
        <br> <br>
        <label for="Kode Buku">Pengarang</label>
        <input type="text" name="pengarang" value="<?= $result[5] ?>" id="">
        <br> <br>
        <label for="Kode Buku">Penerbit</label>
        <input type="text" name="penerbit" value="<?= $result[6] ?>" id="">
        <br> <br>
        <label for="Kode Buku">Tahun</label>
        <input type="text" name="tahun" value="<?= $result[7] ?>" id="">
        <br> <br>
        <button name="submit">Sumbit</button>
    </form>
</body>
</html>