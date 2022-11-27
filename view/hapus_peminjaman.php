<?php
    include '../config/koneksi.php';
    $idPinjam = $_GET['id_pinjam'];
    
    $sql = "delete from peminjaman where id_pinjam = {$idPinjam}";
    mysqli_query($koneksi, $sql);
    header("location:../tampil_pinjam.php");
?>