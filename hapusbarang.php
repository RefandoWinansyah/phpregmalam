<?php
include("koneksi.php");
$query_delete=mysqli_query($koneksi, "delete from barang where id_barang='".$_GET['id_barang']."'");
if($query_delete) {
    header("location:viewbarang.php");
}else{
    echo mysqli_error();
}
?> 