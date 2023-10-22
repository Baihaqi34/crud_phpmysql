<?php 
		include 'koneksi.php';
		$idguru = $_GET['id'];

		$result = mysqli_query($conn,"SELECT * FROM tblguru WHERE idguru = $idguru");
	 	$data = mysqli_fetch_assoc($result);
	 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit data</title>
</head>
<body>
	<form action="edit.php" method="POST">
		<table width="40%">
			<tr>
				<input type="hidden" value="<?= $data["idguru"] ?>" name="idguru">
				<td>Nama lengkap</td>
				<td><input type="text" name="namaguru" value="<?= $data['namaguru'] ?>"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jeniskelamin" value="laki-laki" <?php if($data['jeniskelamin'] == "laki-laki") echo 'checked' ?>>L
					<input type="radio" name="jeniskelamin" value="perempuan" <?php if($data['jeniskelamin'] == "perempuan") echo 'checked' ?>>P
				</td>
			</tr>
			<tr>
				<td>Tempat lahir</td>
				<td><input type="text" name="tempatlahir" value="<?= $data['tempatlahir']?>"></td>
			</tr>

			<tr>
				<td>Tanggal lahir</td>
				<td><input type="date" name="tgllahir" value="<?= $data['tgllahir']?>"></td>
			</tr>

			<tr>
				<td>Lulusan</td>
				<td><input type="number" name="lulusan" value="<?= $data['lulusan']?>"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"><?= $data['alamat']?></textarea></td>
			</tr>

			<tr>
				<td>No HP</td>
				<td><input type="number" name="nohp" value="<?= $data['nohp']?>"></td>
			</tr>

			<tr>
				
				<td><input type="submit" name="edit" value="Edit"></td>
			</tr>

	
		</table>
		</form>
</body>
</html> 



<?php

	include "koneksi.php";
	if (isset($_POST['edit'])) {
		$idguru = $_POST['idguru'];
		$nama = $_POST['namaguru'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$tempatlahir = $_POST['tempatlahir'];
		$tgllahir = $_POST['tgllahir'];
		$lulusan = $_POST['lulusan'];
		$alamat = $_POST['alamat'];
		$nohp = $_POST['nohp'];


		//query MYSQL update data
		$query = "UPDATE tblguru SET 
		namaguru = '$nama',
		jeniskelamin = '$jeniskelamin',
		tempatlahir = '$tempatlahir',
		tgllahir = '$tgllahir',
		lulusan = '$lulusan',
		alamat = '$alamat',
		nohp = '$nohp'
		WHERE idguru = $idguru";


		$result = mysqli_query($conn,$query);


		header("location:index.php");
	}

?>


