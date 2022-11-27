<?php
    include '../config/koneksi.php';
    $idBuku = $_GET['id_buku'];
    
    $sql = "delete from buku where id_buku = {$idBuku}";
    mysqli_query($koneksi, $sql);
    header("location:../tampil.php");
?>