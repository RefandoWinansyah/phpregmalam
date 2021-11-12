<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemrograman 3</title>
</head>
<body>
    <h3>View Kategori</h3>
    
    <?php
    include "koneksi.php";  

    $query_view=mysqli_query($koneksi, "select * from kategori");

    ?>
    <br>
    <a href="inputkategori.php""btn btn-danger"> Tambah Data Kategori </a>
    <br>
    <table class="table table-borderd" border="1">
        <tr>
            <td>No</td>
            <td>ID Kategori</td>
            <td>Nama Barang</td>
            <td>Merk Barang</td>
            <td colspan="4"> Eksekusi </td> 
        </tr>
    

    <?php
    $no=1;
    while ($tampil=mysqli_fetch_array ($query_view)) {
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tampil['id_kategori']; ?></td>
            <td><?php echo $tampil['nama_barang']; ?></td>
            <td><?php echo $tampil['merk_barang']; ?></td>
            <td><a href="editkategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>"> Edit </a></td>
            <td><a href="hapuskategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>"> Deleted </a></td>
        </tr>

<?php } ?>
</table>
</body>
</html>