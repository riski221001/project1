<!DOCTYPE html>
<html>
<head>
	<title>Hapus Data Pencatatan</title>
</head>
<body>
	<h2>Hapus Data Pencatatan</h2>
	<?php
	include_once("config.php");

	$id = $_GET['id'];
	
	$result = mysqli_query($mysqli, "DELETE FROM notes WHERE id=$id");
	
	echo "Data berhasil dihapus. <a href='index.php'>Lihat Data</a>";
	?>
</body>
</html>
