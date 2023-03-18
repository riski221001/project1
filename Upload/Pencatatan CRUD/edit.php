<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Pencatatan</title>
</head>
<body>
	<h2>Edit Data Pencatatan</h2>
	<?php
	include_once("config.php");

	if(isset($_POST['update'])) {	
		$id = $_POST['id'];
		$tgl = $_POST['tgl'];
		$note = $_POST['note'];
		$user = $_POST['user'];
		
		$result = mysqli_query($mysqli, "UPDATE notes SET tgl='$tgl',note='$note',user='$user' WHERE id=$id");
		
		echo "Data berhasil diupdate. <a href='index.php'>Lihat Data</a>";
	} else {
		$id = $_GET['id'];
		$result = mysqli_query($mysqli, "SELECT * FROM notes WHERE id=$id");
		$data = mysqli_fetch_array($result);
	?>
	<form action="edit.php" method="post">
		<table>
			<tr>
				<td>Tanggal</td>
				<td><input type="datetime-local" name="tgl" value="<?php echo $data['tgl'] ?>"></td>
			</tr>
			<tr>
				<td>Note</td>
				<td><input type="text" name="note" value="<?php echo $data['note'] ?>"></td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" name="user" value="<?php echo $data['user'] ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>