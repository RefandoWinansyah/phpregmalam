<?php
include("koneksi.php");

if (isset($_POST['save'])){
    $nama_barang=$_POST['nama_barang'];
    $merk_barang=$_POST['merk_barang'];
    $query=mysqli_query($koneksi,"insert into kategori(nama_barang,merk_barang)
    value ('$nama_barang','$merk_barang')");
if($query) {
    header ("location:viewkategori.php");
} else{
    echo mysqli_eror ();

}
}
?>
<form method="POST">
<table class="table table-bordered" border="0">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
    <tr>
		<td>Merk Barang</td>
		<td><input type="text" name="merk_barang" class="form-control"></td>
	</tr>
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>