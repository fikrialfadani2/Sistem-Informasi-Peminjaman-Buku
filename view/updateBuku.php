<?php
include '../config/koneksi.php';


if(isset($_POST['submit'])) {
    $idbuku = $_GET['idbuku'];
    $kodeBuku = $_POST['kodeBuku'];
    $rakBuku = $_POST['rak_buku'];
    $judul = $_POST['judul'];
    $sinopsis = $_POST['sinopsis'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    
    $sql = mysqli_query($koneksi, "UPDATE buku SET 
    kode_buku = '$kodeBuku',
    no_rak = '$rakBuku',
    judul = '$judul',
    sinopsis = '$sinopsis',
    pengarang = '$pengarang',
    penerbit = '$penerbit',
    tahun = '$tahun' 
    WHERE id_buku = $idbuku");

    header("location:../tampil.php");
}

?>