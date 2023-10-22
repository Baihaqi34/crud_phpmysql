<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Guru</title>
</head>
<body>
	<table width=80% border=1>
		<tr>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>TEMPAT LAHIR</th>
		<th>TANGGAL LAHIR</th>
		<th>LULUSAN</th>
		<th>ALAMAT</th>
		<th>NO HP</th>
		<th>OPSI</th>
	</tr>


		<?php
		include "koneksi.php";
		$tampil = mysqli_query($conn, "SELECT * FROM tblguru");
		while($data = mysqli_fetch_array($tampil)):
		?>
			<tr>
				
				<td><?= $data['namaguru']?></td>
				<td><?= $data['jeniskelamin']?></td>
				<td><?= $data['tempatlahir']?></td>
				<td><?= $data['tgllahir']?></td>
				<td><?= $data['lulusan']?></td>
				<td><?= $data['alamat']?></td>
				<td><?= $data['nohp']?></td>

				<td><a class="btn btn-success" href='edit.php?id="<?= $data['idguru'] ?>"'>Edit</a>   <a class="btn btn-danger" href='delete.php?id="<?= $data['idguru'] ?>"'>Delete</a></td>
			</tr> 
		<?php endwhile; ?>
	
	</table>


	<a href="add.php">Tambah Data</a>
</body>
</html>