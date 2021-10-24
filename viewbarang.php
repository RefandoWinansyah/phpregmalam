<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemrograman 3</title>
</head>
<body>
    <h3> View Barang </h3>

    <?php
    include "koneksi.php";  

    $query_view=mysqli_query($koneksi, "select * from barang");

    ?>
    <table class="table table-borderd" border="1">
        <tr>
            <td>No</td>
            <td>ID Barang</td>
            <td>Jenis Barang</td>
            <td>Nama Barang</td>
        </tr>
    

    <?php
    $no=1;
    while ($tampil=mysqli_fetch_array ($query_view)) {
    ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tampil['id_barang']; ?></td>
            <td><?php echo $tampil['jenis_barang']; ?></td>
            <td><?php echo $tampil['nama_barang']; ?></td>
        </tr>

<?php } ?>
</table>
    
</body>
</html>