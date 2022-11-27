<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
<?php
    include "navbar.php";
    ?>
	<h3>Sistem Informasi Perpustakaan Buku UNIRA</h3>
	<br>

	<a href="tambah_pinjam.php">
		<button>Tambah</button>
	</a>
	<br><br>
	<table align="center" border="1">
        <tr>
            <th>no</th>
            <th>Nama Peminjam</th>
            <th>Kode Buku</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Aksi</th>
        </tr>

        <?php
    include 'config/koneksi.php';
    $sql = "SELECT * FROM `peminjaman` INNER JOIN buku on buku.id_buku=peminjaman.id_buku";

    $hasil = mysqli_query($koneksi, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;
    ?>

        <tr>
            <td>
                <?php echo $no; ?>
            </td>
            <td>
                <?php echo $data["nama_peminjam"]; ?>
            </td>
            <td>
                <?php echo $data["kode_buku"]; ?>
            </td>
            <td>
                <?php echo $data["tgl_peminjaman"]; ?>
            </td>
            <td>
                <?php echo $data["tgl_pengembalian"]; ?>
            </td>
            <td> 
                <a href="view/edit_pinjam.php?id_pinjam=<?php echo $data['id_pinjam']; ?>" class="btn btn-warning" role="button">Update</a>
                <a href="view/hapus_peminjaman.php?id_pinjam=<?php echo $data['id_pinjam']; ?>" class="btn btn-warning" role="button">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>