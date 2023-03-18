<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pencatatan</title>
</head>
<body>
	<h2>Tambah Data Pencatatan</h2>
	<form action="add.php" method="post">
		<table>
			<tr>
				<td>Tanggal</td>
				<td><input type="datetime-local" name="tgl"></td>
			</tr>
			<tr>
				<td>Note</td>
				<td><input type="text" name="note"></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php
	include_once("config.php");

	if(isset($_POST['submit'])) {	
		$tgl = $_POST['tgl'];
		$note = $_POST['note'];
		$user = $_POST['user'];
		
		$result = mysqli_query($mysqli, "INSERT INTO notes(tgl,note,user) VALUES('$tgl','$note','$user')");
		
		echo "Data berhasil disimpan. <a href='index.php'>Lihat Data</a>";
	}
	?>
</body>
</html>
