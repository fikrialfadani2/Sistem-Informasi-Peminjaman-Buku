<?php
include "../config/koneksi.php";

$id_pinjam=$_POST["id_pinjam"];
$id_buku=$_POST["id_buku"];
$nama_peminjam=$_POST["nama_peminjam"];
$tgl_peminjaman=$_POST["tgl_peminjaman"];
$tgl_pengembalian=$_POST["tgl_pengembalian"];

$query=mysqli_query($koneksi,"update peminjaman set id_buku ='$id_buku',nama_peminjam = '$nama_peminjam', tgl_peminjaman = '$tgl_peminjaman',tgl_pengembalian = '$tgl_pengembalian' where id_pinjam = '$id_pinjam'");
if($query){
    echo "Sukses Simpan!";
}