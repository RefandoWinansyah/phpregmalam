<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Beranda Toko <a href="ceklogout.php">Keluar</a>
    <ul>
	<?php
	$level =$_SESSION['level']=='status';
	if($level){
	?>
	<h2> Selamat datang Pengguna </h2>
    <li><a href="viewbarang.php"> Lihat Daftar Barang </a></li>
	<?php }else{ ?>
	<h2> Selamat datang </h2>
	<li><a href="viewkategori.php">Lihat Daftar Kategori </a></li>
	<li><a href="viewbarang.php"> Lihat Daftar Barang </a></li>
	<?php } ?>
	</ul>
</body>
</html>