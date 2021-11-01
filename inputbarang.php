<?php
include("koneksi.php");

if (isset($_POST['save'])){
    $jenis_barang=$_POST['jenis_barang'];
    $nama_barang=$_POST['nama_barang'];
    $query=mysqli_query($koneksi,"insert into barang(jenis_barang,nama_barang) 
    value ('$jenis_barang','$nama_barang')");
if($query) {
    header ("location:viewbarang.php");
} else {
    echo mysqli_eror ();

}
}
?>
<form method="POST">
<table class="table table-bordered" border="0">
    <tr>
		<td>Jenis barang</td>
		<td><input type="text" name="jenis_barang" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>