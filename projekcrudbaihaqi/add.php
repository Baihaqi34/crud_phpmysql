<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah data</title>
</head>
<body>
	<form action="add.php" method="POST">
		<table width="40%">
			<tr>
				<td>Nama lengkap</td>
				<td><input type="text" name="namaguru"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jeniskelamin" value="laki-laki">L
					<input type="radio" name="jeniskelamin" value="perempuan">P
				</td>
			</tr>
			<tr>
				<td>Tempat lahir</td>
				<td><input type="text" name="tempatlahir"></td>
			</tr>

			<tr>
				<td>Tanggal lahir</td>
				<td><input type="date" name="tgllahir"></td>
			</tr>

			<tr>
				<td>Lulusan</td>
				<td><input type="number" name="lulusan"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>

			<tr>
				<td>No HP</td>
				<td><input type="number" name="nohp"></td>
			</tr>

			<tr>
				
				<td><input type="submit" name="add" value="tambah"></td>
			</tr>

	
		</table>
		</form>
</body>
</html>  


<?php 
	include "koneksi.php";
	if (isset($_POST['add'])) {

		$nama = $_POST['namaguru'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$tempatlahir = $_POST['tempatlahir'];
		$tgllahir = $_POST['tgllahir'];
		$lulusan = $_POST['lulusan'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];

		
	
		$query = "INSERT INTO tblguru VALUES(
												NULL,
												'$nama',
												'$jeniskelamin',
												'$tempatlahir', 
												'$tgllahir',
												'$lulusan',
												'$alamat',
												'$nohp')";

		$result = mysqli_query($conn,$query);


		if ($result) {
			header("location:index.php");
		}else{
			echo "<b>tambah data gagal</b>";
		}

	}

?>