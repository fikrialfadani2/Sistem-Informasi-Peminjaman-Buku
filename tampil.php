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

	<a href="view/viewCreatebuku.php">
		<button>Tambah</button>
	</a>
	<br><br>
	<table align="center" border="1">
        <tr>
            <th>no</th>
            <th>kode buku</th>
            <th>no Rak</th>
            <th>Judul</th>
            <th>Sinopsis</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>

        <?php
    include 'config/koneksi.php';
    $sql = "select * from buku";

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
                <?php echo $data["kode_buku"]; ?>
            </td>
            <td>
                <?php echo $data["no_rak"]; ?>
            </td>
            <td>
                <?php echo $data["judul"]; ?>
            </td>
            <td>
                <?php echo $data["sinopsis"]; ?>
            </td>
            <td>
                <?php echo $data["pengarang"]; ?>
            </td>
            <td>
                <?php echo $data["penerbit"]; ?>
            </td>
            <td>
                <?php echo $data["tahun"]; ?>
            </td>
            <td> 
                <a href="view/viewUpdatebuku.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-warning" role="button">Update</a>
                <a href="view/hapusBuku.php?id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-warning delete" role="button">Delete</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
</body>
</html>

<script>
    var button_hapus = document.getElementByClassName('delete')
    button_hapus.addEventListeners('click', function(e){
        e.preventDefault()
        let confirm = confirm('Apakah anda akan menghapus data ini?')
        if(confirm){
            window.location.href = button_hapus.href
        }
    })
</script>