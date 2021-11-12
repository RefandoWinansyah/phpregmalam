<?php
include("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update kategori set
	id_kategori='".$_POST['id_kategori']."',
	nama_barang='".$_POST['nama_barang']."',
	merk_barang='".$_POST['merk_barang']."'
	WHERE id_kategori ='".$_POST['id_kategori']."'");
if($query_edit){
	header("location:viewkategori.php");
}else{
	echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from kategori where id_kategori='".$_GET['id_kategori']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table-bordered" border="1">
  <input type="hidden" name="id_kategori" value="<?php echo $hasil_data['id_kategori'];?>">
  <tr>
    <td>Id Kategori</td>
		<td><input type="text" name="id_kategori" class="form-control" value="<?php echo $hasil_data['id_kategori'];?>"></td>
	</tr>	
	<tr>
    <td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control" value="<?php echo $hasil_data['nama_barang'];?>"></td>
	</tr>	
	<tr>
    <td>Merk Barang</td>
		<td><input type="text" name="merk_barang" class="form-control" value="<?php echo $hasil_data['merk_barang'];?>"></td>
	</tr>	
	<tr>
		<td><input type="submit" value="Ralat Data" name="save"></td>
		</tr>
</table>
</form>