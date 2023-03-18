<!DOCTYPE html>
<html>
<head>
	<title>CRUD Pencatatan</title>
</head>
<body>
	<h2>Data Pencatatan</h2>
	<a href="add.php">Tambah Data</a>
	<br/><br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Note</th>
			<th>User</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include_once("config.php");
		$result = mysqli_query($mysqli, "SELECT * FROM notes ORDER BY id DESC");
		$no=1;
		while($data = mysqli_fetch_array($result)) {         
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$data['tgl']."</td>";
			echo "<td>".$data['note']."</td>";
			echo "<td>".$data['user']."</td>";    
			echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]' onClick='return confirm(\"Apakah anda yakin ingin menghapus data?\")'>Hapus</a></td></tr>";        
		}
		?>
	</table>
</body>
</html>
