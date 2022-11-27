<?php
include "../config/koneksi.php";

$id_buku=$_POST["id_buku"];
$nama_peminjam=$_POST["nama_peminjam"];
$tgl_peminjaman=$_POST["tgl_peminjaman"];
$tgl_pengembalian=$_POST["tgl_pengembalian"];

$query=mysqli_query($koneksi,"insert into peminjaman values('','$id_buku','$nama_peminjam','$tgl_peminjaman','$tgl_pengembalian')");
if($query){
    echo "Sukses Simpan!";
}