<?php
include '../config/koneksi.php';

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $kodeBuku = $_POST['kodeBuku'];
        $noRak = $_POST['no_rak'];
        $judul = $_POST['judul'];
        $sinopsis = $_POST['sinopsis'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO buku VALUE('','$kodeBuku','$noRak','$judul','$sinopsis','$pengarang','$penerbit','$tahun')");
        if ($result) {
            header("location:../tampil.php");
        } else {
            echo"Data Cannor to Insert";
        };
    };
?>