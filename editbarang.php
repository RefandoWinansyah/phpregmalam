<?php
include("koneksi.php");
if(isset($_POST['save'])){
$query_edit=mysqli_query($koneksi,"update barang set
	id_barang='".$_POST['id_barang']."',
	jenis_barang='".$_POST['jenis_barang']."',
	nama_barang='".$_POST['nama_barang']."'
	WHERE id_barang ='".$_POST['id_barang']."'");
if($query_edit){
	header("location:viewbarang.php");
}else{
	echo mysqli_error();
}
}
$tampil=mysqli_query($koneksi,"select * from barang where id_barang='".$_GET['id_barang']."'");
$hasil_data=mysqli_fetch_array($tampil);
?>
<form method="POST">
<table class="table table-bordered" border="1">
  <input type="hidden" name="id_barang" value="<?php echo $hasil_data['id_barang'];?>">
  <tr>
    <td>Id Barang</td>
		<td><input type="text" name="id_barang" class="form-control" value="<?php echo $hasil_data['id_barang'];?>"></td>
	</tr>	
	<tr>
    <td>Jenis Barang</td>
		<td><input type="text" name="jenis_barang" class="form-control" value="<?php echo $hasil_data['jenis_barang'];?>"></td>
	</tr>	
	<tr>
    <td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control" value="<?php echo $hasil_data['nama_barang'];?>"></td>
	</tr>	
	<tr>
		<td><input type="submit" value="Ralat Data" name="save"></td>
		</tr>
</table>
</form>