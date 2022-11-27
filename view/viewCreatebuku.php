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
    include "../navbar.php";
    ?>
    <form action="createBuku.php" method="POST">
        <label for="Kode Buku">Kode Buku</label>
        <input type="text" name="kodeBuku" id="">
        <br> <br>
        <label for="Kode Buku">No Rak</label>
        <input type="text" name="no_rak" id="">
        <br> <br>
        <label for="Kode Buku">Judul</label>
        <input type="text" name="judul" id="">
        <br> <br>
        <label for="Sinopsis">Sinopsis</label>
        <textarea name="sinopsis" id="" cols="30" rows="10"></textarea>
        <br> <br>
        <label for="Kode Buku">Pengarang</label>
        <input type="text" name="pengarang" id="">
        <br> <br>
        <label for="Kode Buku">Penerbit</label>
        <input type="text" name="penerbit" id="">
        <br> <br>
        <label for="Kode Buku">Tahun</label>
        <input type="text" name="tahun" id="">
        <br> <br>
        <button name="submit">Sumbit</button>
    </form>
</body>
</html>